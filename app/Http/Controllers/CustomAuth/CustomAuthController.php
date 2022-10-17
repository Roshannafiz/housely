<?php

namespace App\Http\Controllers\CustomAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class CustomAuthController extends Controller
{

    // Login View
    public function login_view()
    {
        return view('auth-view.login');
    }

    // Sign Up View
    public function sign_up_view()
    {
        return view('auth-view.sign-up');
    }

    // Login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:8',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->user_type == 1) {
                return redirect('dashboard');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('login')->with('error_message', 'Login Details Not Valid!');
        }
    }

    // Register
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:8',
            'terms_condition' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            if ($user->user_type == 1) {
                return redirect('dashboard');
            } else {
                return redirect('/');
            }
        } else {
            return redirect('register')->with('error_message', 'Something Is Wrong Please Try Again!');
        }
    }

    // Logout
    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
