<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    // Show the password reset form
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.reset-password', ['token' => $token, 'email' => $request->email]);
    }

    // Handle resetting the password
    public function reset(Request $request)
    {
        // Validate the input
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed', // Ensure password confirmation
        ]);

        // Attempt to reset the user's password
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                // Hash the new password before saving it
                $user->password = Hash::make($password);
                $user->save();

                // Automatically log the user in after resetting password
                Auth::login($user);
            }
        );

        // Redirect based on the result of the password reset attempt
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('dashboard')->with('status', __($status)) // Redirect to dashboard if successful
            : back()->withErrors(['email' => [__($status)]]); // Show error if failed
    }
}
