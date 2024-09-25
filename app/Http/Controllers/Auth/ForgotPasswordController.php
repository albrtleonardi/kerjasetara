<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    // Show the form to request a password reset link
    public function showLinkRequestForm()
    {
        return view('auth.forgot-password'); // Make sure this view exists
    }

    // Handle sending the reset link email
    public function sendResetLinkEmail(Request $request)
    {
        // Validate the email input
        $request->validate([
            'email' => 'required|email'
        ]);

        // Send the reset link to the user's email
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Check if the reset link was sent successfully
        return $status === Password::RESET_LINK_SENT
            ? back()->with('status', __($status)) // Success message
            : back()->withErrors(['email' => __($status)]); // Error message
    }
}
