<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class DataPendudukController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPenduduk::all();

        return view('index', ['dataPenduduk' => $dataPenduduk]);
    }

    public function create()
    {
        return view('datapenduduk.creatependuduk');
    }

    public function store(Request $request)
    {
    // Validasi input jika diperlukan
    $data_penduduk = new datapenduduk();
    $data_penduduk->nama = $request->input('nama');
    // Tambahkan atribut lain sesuai kebutuhan
    $layanan->save();

    return redirect()->route('index')->with('success', 'Data layanan berhasil disimpan.');
    }
    
    
}
