<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Informasi;
use Illuminate\Http\Request;

class DashboardInformasiController extends Controller
{
    public function index()
    {
        $informasi = Informasi::all();
        return view ('dashboard.informasi.informasi-index', compact('informasi'));
    }

    public function create()
    {
        return view('dashboard.informasi.informasi-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        Informasi::create($request->all());

        return redirect()->route('dashboard.informasi.index')->with('success', 'Informasi berhasil ditambahkan.');
    }
}