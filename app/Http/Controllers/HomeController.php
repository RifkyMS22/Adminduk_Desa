<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Pengaduan;
use App\Models\Informasi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::take(6)->get();
        $informasi = Informasi::latest()->get();
        $role = session('role');
        $isAdmin = $role === 'admin';
        return view('home', compact('berita', 'informasi', 'isAdmin'));
    }
    public function semuaBerita()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    // Metode ini menangani tampilan satu berita berdasarkan ID
    public function show($id)
    {
    $berita = Berita::find($id);
    return view('berita.show-berita', ['berita' => $berita]);
    }

    

    public function store(Request $request)
    {
    // Cek apakah pengguna sudah login
    if (!Auth::check()) {
        // Jika belum login, redirect ke halaman login atau lakukan tindakan lain
        return redirect()->route('halaman.login')->with('error', 'Anda harus login untuk mengirim pengaduan.');
    }

    $request->validate([
        'pengaduan' => 'required',
        'gambar' => 'nullable|file|mimes:jpeg,png,mp4|max:10240', // Max 10MB
    ]);

    $pengaduan = new Pengaduan();

if ($pengaduan) {
    // Isi data pengaduan dengan informasi pengguna yang sudah login
    $pengaduan->nama = Auth::user()->name;
    $pengaduan->email = Auth::user()->email;
    $pengaduan->pengaduan = $request->pengaduan;

    // Proses penyimpanan lampiran jika diunggah
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $exten = $file->getClientOriginalExtension();
        $filename = time() . "." . $exten;
        $file->move('storage/gambar', $filename);
        $pengaduan->gambar = $filename;
    }

    // Simpan data pengaduan ke database
    $pengaduan->save();

    // Redirect ke halaman home dengan pesan sukses
    return redirect()->route('home')->with('success', 'Pengaduan berhasil dikirim.');
} else {
    // Handle kesalahan pembuatan objek $pengaduan
    return redirect()->route('home')->with('error', 'Terjadi kesalahan saat membuat pengaduan.');
}
    }
}
