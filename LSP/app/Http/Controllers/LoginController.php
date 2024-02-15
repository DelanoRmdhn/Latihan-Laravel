<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm(){
        return view('auth.login');
    }

    public function authenticate(Request $request)
{
    // Cek apakah pengguna sudah terautentikasi
    $credentials = $request->validate([
        'username' => ['required',],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/admin');
    }

    return redirect()->route('login')->with('error', 'Username atau password salah!');
}


    public function logout(){
        Auth::logout();

        request()->session()->invalidate();

        return redirect('/');
    }

    
}
