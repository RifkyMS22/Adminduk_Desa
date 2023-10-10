<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view ('login');
        
    }
    public function showregister()
    {
        return view ('registrasi');
    }
    public function login(Request $request)
    {
    // Validasi input
    $request->validate([
        'email' => 'required|string|email',
        'password' => 'required|string',
    ]);

    // Proses login
    if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        // Login berhasil
        return redirect()->intended('/dashboard'); // Ganti '/dashboard' dengan halaman setelah login
    } else {
        // Login gagal
        return redirect()->route('login')->with('error', 'Email atau password salah.');
    }
    } 
    public function register(Request $request)
    {
    // Validasi input
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|unique:users',
        'password' => 'required|string|min:6|confirmed',
    ]);

    // Simpan data user ke database
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);
    }


}
