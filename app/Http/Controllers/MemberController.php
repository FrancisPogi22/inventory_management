<?php

namespace App\Http\Controllers;

class MemberController extends Controller
{
    public function memberDashboard()
    {
        return view("userpage.userDashboard");
    }
}
