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
        $data = new Appointment();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->doctor = $request->doctor;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->status = 'in progressing';
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('success', 'Form submitted successfully!');
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
    public function deleteAppoinment($id){
        $appointment=Appointment::find($id);
        $appointment->delete();
        return redirect()->back();
    }
}
