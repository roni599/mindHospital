<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            return redirect('home');
        } else {
            $doctors = Doctors::all();
            return view('frontend.user.home', compact('doctors'));
        }
    }
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->usertype == '0') {
                $doctors = Doctors::all();
                return view('frontend.user.home', compact('doctors'));
            } else {
                return view('backend.admin.home');
            }
        } else {
            return redirect()->back();
        }
    }
    public function appoinment(Request $request)
    {
        // Check if the user is authenticated
        if (!Auth::id()) {
            return redirect()->back()->with('error', 'Please Login / Registration in to make an appointment.');
        }

        // Proceed with storing the appointment if the user is authenticated
        $data = new Appointment();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'in progressing';
        $data->user_id = Auth::user()->id; // Assign the authenticated user's ID
        $data->save();

        return redirect()->back()->with('success', 'Form submitted successfully please want for admin approve and chck mail!');
    }


    public function showAppoinment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appointment = Appointment::where('user_id', $userid)->get();
            return view('frontend.user.components.showappointment', compact('appointment'));
        } else {
            return redirect()->back();
        }
    }
    public function deleteAppoinment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        return redirect()->back();
    }
}
