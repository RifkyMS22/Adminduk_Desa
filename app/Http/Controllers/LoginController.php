<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login', [
            'tittle' => 'Login',
            'active' => 'login',
        ]);
    }

    public function authenticate(Request $request)
    {
    $request->validate([
        'email'=> 'required|email:dns',
        'password' => 'required'
    ]);

    if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
        // Autentikasi berhasil dengan "remember me"
        return redirect('/'); // Ganti '/dashboard' dengan rute yang sesuai.
    } else {
        // Autentikasi gagal
        return back()->withInput()->withErrors(['email' => 'Email atau password salah']);
    }
    }

}
