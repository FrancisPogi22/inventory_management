<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ApplicantController extends Controller
{
    public function applicantDashboard()
    {
        return view("userpage.userDashboard");
    }

    public function registerUser(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'fullname' => 'required',
            'age' => 'required|numeric',
            'address' => 'required',
            'email' => 'required|email',
            'contact' => 'required',
            'password' => 'required'
        ]);

        if ($validation->fails()) {
            return back()->withInput()->with('error', $validation->errors()->first());
        }

        User::create([
            'type' => "Applicant",
            'fullname' => Str::of(trim($request->fullname))->title(),
            'age' => trim($request->age),
            'address' => trim($request->address),
            'email' => trim($request->email),
            'contact' => trim($request->contact),
            'password' => Hash::make(trim($request->password))
        ]);

        return back()->with('success', 'Applicant Successfully Registered.');
    }
}
