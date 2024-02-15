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
    if (Auth::check()) {
        return redirect()->intended('/dashboard'); // Atau rute yang sesuai
    }

    // Jika belum terautentikasi, lakukan proses login
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/dashboard');
    }

    return redirect()->route('login')->with('error', 'Email atau password salah!');
}


    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    
}
