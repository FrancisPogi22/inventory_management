<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->group(function () {
    Route::view('/', 'homepage')->name('home');
    Route::view('/applicant/register-applicant', 'authentication.applicant.registerApplicant')->name('register.applicant');
    Route::view('/applicant/login-applicant', 'authentication.applicant.loginApplicant')->name('login.applicant');
    Route::view('/customer/register-customer', 'authentication.customer.registerCustomer')->name('register.customer');
    Route::view('/customer/login-customer', 'authentication.customer.loginCustomer')->name('login.customer');
    Route::view('/member/register-member', 'authentication.member.registerMember')->name('register.member');
    Route::view('/member/login-member', 'authentication.member.loginMember')->name('login.member');

    Route::post('/', 'loginUser')->name('login');
    Route::get('/logout', 'logout')->name('logout');
    Route::get('/registerUser', 'registerUser')->name('registerUser');
});

Route::middleware('auth')->group(function () {
    Route::middleware('check.applicant')->name('applicant.')->controller(ApplicantController::class)->group(function () {
        Route::get('/applicant/dashboard', 'applicantDashboard')->name('dashboard');
    });

    Route::middleware('check.customer')->name('customer.')->controller(CustomerController::class)->group(function () {
        Route::get('/customer/dashboard', 'customerDashboard')->name('dashboard');
    });

    Route::middleware('check.member')->name('member.')->controller(MemberController::class)->group(function () {
        Route::get('/member/dashboard', 'memberDashboard')->name('dashboard');
    });
});
