<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

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
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }
        else{
            //return redirect()->route('userlogin')->withErrors(['error' => 'Invalid username or password']);
            return redirect()->route('login')->with('error', 'Invalid username or password');

        }

    }
}
