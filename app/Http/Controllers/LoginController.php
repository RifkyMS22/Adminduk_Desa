<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('halaman_login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'nik' => 'required|numeric|digits:16',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('nik', 'password');

        if (Auth::attempt($credentials)) {
            // Jika otentikasi berhasil
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        }

        // Jika otentikasi gagal
        return back()->withErrors([
            'nik' => 'NIK atau kata sandi salah.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
} 
