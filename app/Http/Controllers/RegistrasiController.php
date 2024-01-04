<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi', [
            'title' => 'Registrasi',
            'active' => 'registrasi'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'nik' => 'required|numeric|digits:16|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
        ], [
            'name.required' => 'Nama harus diisi.',
            'nik.required' => 'NIK harus diisi.',
            'nik.numeric' => 'NIK harus berupa angka.',
            'nik.digits' => 'NIK harus memiliki panjang 16 karakter.',
            'nik.unique' => 'NIK sudah digunakan.',
            'email.required' => 'Email harus diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password harus diisi.',
            'password.min' => 'Password minimal 5 karakter.',
            'password.max' => 'Password maksimal 255 karakter.',
        ]);
        
        

        // Jika data valid, Anda dapat menyimpannya ke dalam database atau melakukan tindakan lainnya di sini.

        $user = new User;
        $user->name = $request->input('name');
        $user->nik = $request->input('nik'); // Tambahkan ini untuk menyimpan NIK
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        return redirect()->route('halaman.login')->with('success', 'Registrasi berhasil! Silakan login.');


        // Atau, jika Anda hanya ingin mengembalikan data yang diterima untuk saat ini, Anda bisa menggunakan:
        // return $request->all();
    }
}
