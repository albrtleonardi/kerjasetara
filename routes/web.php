<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\ProfileController;

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');

// Route for displaying all jobs with filters
Route::get('jobs', [JobController::class, 'index'])->name('jobs.index');

// Route for displaying job details
Route::get('jobs/{id}', [JobController::class, 'show'])->name('jobs.show');

// Optional: Redirect to jobs index when visiting the dashboard
Route::get('dashboard', function () {
    return redirect()->route('jobs.index');
})->middleware('auth')->name('dashboard');


Route::get('profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('ChangePassword', [ChangePasswordController::class, 'index'])->middleware('auth');

Route::post('UpdatePassword', [ChangePasswordController::class, 'update'])->middleware('auth');
