<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function index()
    {
    return view ('layanan');
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $layanan = Layanan::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
        ]);

        // Tindakan lain yang diperlukan setelah penyimpanan data

        return redirect()->route('create')->with('success', 'Layanan berhasil ditambahkan');
    }
}
