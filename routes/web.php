<?php

use App\Http\Controllers\ApplicantController;
use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthenticationController::class)->group(function () {
    Route::view('/', 'homepage')->name('home');
    Route::view('/applicant/register-applicant', 'authentication.applicant.registerApplicant')->name('register.applicant');
    Route::view('/applicant/login-applicant', 'authentication.applicant.loginApplicant')->name('login.applicant');

    Route::post('/', 'loginUser')->name('login');
    Route::get('/logout', 'logout')->name('logout');

    Route::controller(ApplicantController::class)->group(function () {
        Route::get('/registerUser', 'registerUser')->name('registerUser');
    });
});

Route::middleware('auth')->group(function () {
    Route::name('applicant.')->controller(ApplicantController::class)->group(function () {
        Route::get('/applicant/dashboard', 'applicantDashboard')->name('dashboard');
    });
});
