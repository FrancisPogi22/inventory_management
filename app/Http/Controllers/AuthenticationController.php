<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function loginUser(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validation->fails()) {
            return back()->withInput()->with('warning', $validation->errors()->first());
        }

        if (auth()->attempt($request->only("email", "password"))) {
            return $this->checkUser();
        }

        return back()->withInput()->with('warning', 'Incorrect User Information.');
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect("/")->with('success', 'Successfully Logged Out.');
    }

    private function checkUser()
    {
        if (auth()->check()) {
            return redirect("/applicant/dashboard")->with('success', "Welcome " . auth()->user()->fullname . " .");
        }

        return back();
    }
}
