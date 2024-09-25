<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        $password = bcrypt($request->password);

        $user = User::create([
            'email' => $request->email,
            'password' => $password,
            'role' => 'User',
        ]);

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
