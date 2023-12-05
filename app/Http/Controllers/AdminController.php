<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function add_doctors()
    {
        return view('backend.admin.doctors.add_doctors');
    }
    public function create_doctors(Request $request)
    {
        Validator::make($request->all(), [
            'd_name' => 'required|string|max:255',
            'd_phone' => 'required|string|max:15',
            'spaciality' => 'required|string|in:skin,medicine,cardiology',
            'd_room' => 'required|string|max:10',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $doctor = new Doctors();
        $doctor->d_name = $request->d_name;
        $doctor->d_phone = $request->d_phone;
        $doctor->spaciality = $request->spaciality;
        $doctor->d_room = $request->d_room;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = rand(1, 1000) . '_' . $doctor->d_name . '-' . $request->file('image')->getClientOriginalName();
            $file->storeAs('doctors_images', $filename, 'public');
            $doctor->d_image = $filename;
        }
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }
    public function adminAppoinment()
    {
        // $appoinment=Appointment::all();
        $appoinment = Appointment::whereNotNull('user_id')->get();
        return view('backend.admin.doctors.appointment', compact('appoinment'));
    }
    public function approve($id)
    {
        $appoinment = Appointment::find($id);
        $appoinment->status = "Approved";
        $appoinment->save();
        return redirect()->back();
    }
    public function cancel($id)
    {
        $appoinment = Appointment::find($id);
        $appoinment->status = "Canceled";
        $appoinment->save();
        return redirect()->back();
    }
    public function alldoctors()
    {
        $doctor = Doctors::all();
        return view('backend.admin.doctors.alldoctors', compact('doctor'));
    }
    public function deleteDoctors($id)
    {
        $doctor = Doctors::find($id);
        $doctor->delete();
        return redirect()->back();
    }
    public function updateDoctors($id)
    {
        $doctor = Doctors::find($id);
        return view('backend.admin.doctors.updatedoctor', compact('doctor'));
    }
    public function editDoctors(Request $request, $id)
    {
        $doctor = Doctors::find($id);
        $doctor->d_name = $request->d_name;
        $doctor->d_phone = $request->d_phone;
        $doctor->spaciality = $request->spaciality;
        $doctor->d_room = $request->d_room;

        if ($request->hasFile('image')) {
            $destination = public_path('doctors_images' . $request->oldimage);
            if (file_exists($destination)) {
                unlink($destination);
            }
            $file = $request->file('image');
            $file = $request->file('image');
            $filename = rand(1, 1000) . '_' . $doctor->d_name . '-' . $request->file('image')->getClientOriginalName();
            $file->storeAs('doctors_images', $filename, 'public');
            $doctor->d_image = $filename;
        }
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Update Successfully');
    }
}
