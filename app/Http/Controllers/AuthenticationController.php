<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
            $userType = auth()->user()->type;
            return redirect("/" . Str::lower($userType) . "/dashboard")->with('success', "Welcome " . auth()->user()->fullname . " .");
        }

        return back();
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
            'type' => Str::ucfirst($request->type),
            'fullname' => Str::of(trim($request->fullname))->title(),
            'age' => trim($request->age),
            'address' => trim($request->address),
            'email' => trim($request->email),
            'contact' => trim($request->contact),
            'password' => Hash::make(trim($request->password))
        ]);

        return back()->with('success', 'User Successfully Registered.');
    }
}
