<?php

namespace App\Http\Controllers;

class ApplicantController extends Controller
{
    public function applicantDashboard()
    {
        return view("userpage.userDashboard");
    }
}
