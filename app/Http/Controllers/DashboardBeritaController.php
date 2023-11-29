<?php

namespace App\Http\Controllers;

use App\Models\DashboardBerita;
use Illuminate\Http\Request;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = DashboardBerita::all();
        return view('dashboard.Berita.index-berita', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.Berita.create-berita');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required', // Hanya menerima gambar dengan format tertentu
        ]);

         // Proses penyimpanan gambar jika diunggah
         $gambarPath = $request->file('gambar')->store('public/gambar');


        // Simpan data berita ke database
        // DashboardBerita::create($request->all());

        $berita = new DashboardBerita();
            if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $exten = $file->getClientOriginalExtension();
            $filename = time().".".$exten;
            $file->move('storage/gambar',$filename);
            $berita->gambar = $filename;
        }
            $berita->judul = $request->judul;
            $berita->isi = $request->isi;
            $berita->save();

        // Redirect ke halaman berita dengan pesan sukses
        return redirect()->route('dashboard.berita.index')->with('success', 'Berita berhasil ditambahkan!');

        }

    /**
     * Display the specified resource.
     */
    public function show(DashboardBerita $dashboardBerita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardBerita $dashboardBerita)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DashboardBerita $dashboardBerita)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardBerita $dashboardBerita)
    {
        //
    }
}
