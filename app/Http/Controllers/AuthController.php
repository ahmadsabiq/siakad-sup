<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Display login page
    public function login()
    {
        return view('auth.login');
    }

    // Display register page
    public function register()
    {
        return view('auth.register');
    }

    // display dashboard
    public function dashboard()
    {
        return view('dashboard.index');
    }

    // Display forgot password page
    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    // Display reset password page
    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    // submit login form direct to dashboard
    public function submitLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

        return redirect()->route('dashboard.index');
    }
}
