<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'password' => $this->passwordRules(),
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $imagePath = null;

        if (request()->hasFile('image')) {
            $image = request()->file('image');
            $imageName = $input['name'] . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('profile-images', $imageName, 'public');
        }

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'address' => $input['address'],
            'profile_photo_path' => $imagePath,
            'password' => Hash::make($input['password']),
        ]);
    }
}
