<?php

namespace App\Http\Controllers;

use App\Models\Usaha;
use Illuminate\Http\Request;

class DashboardUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $usaha =  Usaha::latest('updated_at')->get();
        // return view ('dashboard.administrasi.df_surat_usaha');

        // $text = "Hello, Laravel!"; // Ganti teks ini sesuai dengan teks yang ingin Anda tampilkan dalam kotak per kotak.
        // $text = Usaha::pluck('nama')->first();
        // return view('dashboard.administrasi.index', compact('text'));
        $data = Usaha::all(); // Ganti 'YourModel' dengan nama model yang sesuai dengan tabel Anda.

        return view('dashboard.administrasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.administrasi.create_usaha');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usaha $usaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usaha $usaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usaha $usaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usaha $usaha)
    {
        //
    }
}
