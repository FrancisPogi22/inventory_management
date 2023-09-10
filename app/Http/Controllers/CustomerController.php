<?php

namespace App\Http\Controllers;

class CustomerController extends Controller
{
    public function customerDashboard()
    {
        return view("userpage.userDashboard");
    }
}
