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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255'
        ]);

        // Jika data valid, Anda dapat menyimpannya ke dalam database atau melakukan tindakan lainnya di sini.

        // Misalnya:
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->save();

        // Setelah itu, Anda bisa mengarahkan pengguna ke halaman yang sesuai.
        return redirect('/login');

        // Atau, jika Anda hanya ingin mengembalikan data yang diterima untuk saat ini, Anda bisa menggunakan:
        // return $request->all();
    }
}
