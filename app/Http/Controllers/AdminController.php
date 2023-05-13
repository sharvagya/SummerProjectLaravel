<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class AdminController extends Controller
{
    
    public function showSignupForm() {
        return view('signup');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',

        //     'email' => 'required|email|unique:admins',
        //     'username' => 'required|unique:admins',
        //     'password' => 'required|min:6',
        // ]);

        $admin = new Admin();
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        $admin->email = $request->email;
        $admin->username = $request->username;
        $admin->password = bcrypt($request->password);
        $admin->save();

        return redirect('/signup')->with('success', 'You have been successfully registered.');
    }
    public function login(Request $request)
    {
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        // ]);

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        throw ValidationException::withMessages([
            'username' => 'Invalid credentials.',
        ]);
    }

    protected function guard()
    {
        return Auth::guard('admins');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');
    
        if (Auth::guard('admins')->attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/dashboard');
        }
    
        return redirect()->back()->withInput($request->only('username'))->withErrors([
            'username' => 'These credentials do not match our records.',
        ]);
    }
    
    }

