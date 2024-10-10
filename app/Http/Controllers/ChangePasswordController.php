<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->is('ChangePassword')){
            return view('auth.change-password');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request)
     {
         $request->validate([
             'old_password' => 'required',
             'new_password' => 'required|min:8|confirmed', // Ensure new password is at least 8 characters and confirmed
         ]);

         $user = Auth::user();

         if (!$user) {
             return redirect()->back()->withErrors(['old_password' => 'User is not authenticated.']);
         }

         if (!Hash::check($request->old_password, $user->password)) {
             throw ValidationException::withMessages([
                 'old_password' => ['The provided password does not match our records.'],
             ]);
         }

         $user->password = bcrypt($request->new_password);

         return view('profile.index');
     }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
