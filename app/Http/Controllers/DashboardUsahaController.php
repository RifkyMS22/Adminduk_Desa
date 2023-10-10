<?php

namespace App\Http\Controllers;

use App\Models\Usaha;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use App\Models\DataPenduduk;

class DashboardUsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usaha =  Usaha::latest('updated_at')->get();
        return view ('dashboard.administrasi.df_surat_usaha');
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
        $usaha = new Usaha();
        $usaha->nama = $request->input('nama');
        $usaha->nik = $request->input('nik');
        $usaha->no_kk = $request->input('no_kk');
        $usaha->jenis_kelamin = $request->input('jenis_kelamin');
        $usaha->binti = $request->input('binti');
        $usaha->tmpt_tgl_lahir = $request->input('tmpt_tgl_lahir');
        $usaha->agama = $request->input('agama');
        $usaha->warganegara = $request->input('warganegara');
        $usaha->pekerjaan = $request->input('pekerjaan');
        $usaha->alamat = $request->input('alamat');
        $usaha->no_surat = $request->input('no_surat');
        $usaha->keperluan = $request->input('keperluan');
        $usaha->save();

        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil ditambahkan');
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
        $usaha  = Usaha::where('id', '=', $id)->firstOrFail();

        return view('dashboard.administrasi.edit_domisili', ['domisili' => $usaha]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usaha $usaha)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'binti' => 'required',
            'tmpt_tgl_lahir' => 'required',
            'agama' => 'required',
            'warganegara' => 'required',
            'pekerjaan' => 'required',
            'no_surat' => 'required',
            'keperluan' => 'required',
        ]);

        $usaha  = Usaha::where('id', '=', $id)->firstOrFail();
        $usaha->update($validatedData);

        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usaha $usaha)
    {
        $usaha = Usaha::findOrFail($id);
        $usaha->delete();
        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil dihapus');
    }

    public function tampilkanForm()
{
    $dataPenduduk = DataPenduduk::pluck('nama_kolom_nik', 'id'); // Sesuaikan dengan nama kolom yang sesuai
    return view('form', compact('dataPenduduk'));
}

public function prosesForm(Request $request)
{
    $nik = $request->input('nik');
    $dataLainnyaId = $request->input('data_lainnya');

    // Mengambil data lainnya dari database berdasarkan $dataLainnyaId
    $dataLainnya = DataUtama::find($dataLainnyaId);

    // Lakukan apa yang perlu dilakukan dengan data yang sudah diambil
    // Misalnya, simpan ke database lain atau tampilkan ke pengguna

    return redirect('/form')->with('success', 'Form berhasil disubmit.');
}

}
