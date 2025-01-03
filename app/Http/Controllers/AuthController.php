<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        $data = [
            'title'     => 'Rizal WebDev | Login'
        ];

        return view('auth.login', $data);
    }

    public function authenticate(Request $request) 
    {
        $credentials = $request->validate([
            'username'  => 'required',
            'password'  => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
 
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'Login Failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return to_route('home');
    }
}
