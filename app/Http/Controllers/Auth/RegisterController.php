<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    // // show registration form
    // public function show(){
    //     return view('auth.register');
    // }

    // handle submitted form
    public function register(Request $request)
    {
        // validate input
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'username' => 'required|string|unique:users,username',
            'phone' => 'required|string|unique:users,phone',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // create user (hash password)
        $user = user::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
        ]);

        // log to the user in
        Auth::login($user);

        // redirect to login page with success message
        return redirect()->route('login')->with('success', 'Registration successful. Please log in.'); 
    }
}
