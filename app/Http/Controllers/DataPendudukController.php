<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DataPendudukController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPenduduk::all();

        // Menghitung total jumlah penduduk
        $totalPenduduk = DataPenduduk::count();

        return view('penduduk', ['dataPenduduk' => $dataPenduduk, 'totalPenduduk' => $totalPenduduk]);
    }

    public function create()
    {
        return view('dashboard.penduduk.create');
    }

    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'tmpt_tgl_lahir' => 'required',
            'nama_ayah' => 'required',
            'nama_ibu' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
            'pendidikan' => 'required',
            'jenis_kelamin' => 'required',
            'status_perkawinan' => 'required',
            'stts_hub_keluarga' => 'required',
            'kewarganegaraan' => 'required',
            // Tambahkan validasi untuk atribut lain jika diperlukan
        ]);

        // Simpan data penduduk ke database
        $dataPenduduk = new DataPenduduk();
        $dataPenduduk->nik = $request->input('nik');
        $dataPenduduk->nama = $request->input('nama');
        $dataPenduduk->tmpt_tgl_lahir = $request->input('tmpt_tgl_lahir');
        $dataPenduduk->nama_ayah = $request->input('nama_ayah');
        $dataPenduduk->nama_ibu = $request->input('nama_ibu');
        $dataPenduduk->agama = $request->input('agama');
        $dataPenduduk->pekerjaan = $request->input('pekerjaan');
        $dataPenduduk->pendidikan = $request->input('pendidikan');
        $dataPenduduk->jenis_kelamin = $request->input('jenis_kelamin');
        $dataPenduduk->status_perkawinan = $request->input('status_perkawinan');
        $dataPenduduk->stts_hub_keluarga = $request->input('stts_hub_keluarga');
        $dataPenduduk->kewarganegaraan = $request->input('kewarganegaraan');
        // Setel atribut lain sesuai kebutuhan
        $dataPenduduk->save();


        return redirect()->route('index')->with('success', 'Data penduduk berhasil disimpan.');
    }
    
    public function edit($nik)
    {
    $dataPenduduk = DataPenduduk::findOrFail($nik);

    return view('datapenduduk.editpenduduk', compact('dataPenduduk'));
    }

    public function update(Request $request, $nik)
    {
    $dataPenduduk = DataPenduduk::findOrFail($nik)->update($request->all());

    return redirect()->route('datapenduduk.index')->with('success', 'Data penduduk berhasil diperbarui.');
    // // Validasi input jika diperlukan
    // $dataPenduduk->nik = $request->input('nik');
    // $dataPenduduk->nama = $request->input('nama');
    // $dataPenduduk->tmpt_tgl_lahir = $request->input('tmpt_tgl_lahir');
    // $dataPenduduk->nama_ayah = $request->input('nama_ayah');
    // $dataPenduduk->nama_ibu = $request->input('nama_ibu');
    // $dataPenduduk->agama = $request->input('agama');
    // $dataPenduduk->pekerjaan = $request->input('pekerjaan');
    // $dataPenduduk->pendidikan = $request->input('pendidikan');
    // $dataPenduduk->jenis_kelamin = $request->input('jenis_kelamin');
    // $dataPenduduk->status_perkawinan = $request->input('status_perkawinan');
    // $dataPenduduk->stts_hub_keluarga = $request->input('stts_hub_keluarga');
    // $dataPenduduk->kewarganegaraan = $request->input('kewarganegaraan');
    // Setel atribut lain sesuai kebutuhan

    // $dataPenduduk->save();

    // return redirect()->route('datapenduduk.index')->with('success', 'Data penduduk berhasil diperbarui.');
    }

    public function destroy($nik)
    {
        // Cari data penduduk berdasarkan NIK
        $dataPenduduk = DataPenduduk::where('nik', $nik)->first();

        if (!$dataPenduduk) {
            return redirect()->route('index')->with('error', 'Data penduduk tidak ditemukan.');
        }

        // Hapus data penduduk
        $dataPenduduk->delete();

        return redirect()->route('index')->with('success', 'Data penduduk berhasil dihapus.');
    }

    
}
