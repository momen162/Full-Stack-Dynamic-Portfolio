<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Handle login submission
    public function login(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to login
        if (Auth::attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended('/dashboard'); // or your desired route
        }

        // Failed login
        return back()->with('error', 'Invalid email or password.');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}
