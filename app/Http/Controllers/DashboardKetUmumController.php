<?php

namespace App\Http\Controllers;

use App\Models\KeteranganUmum;
use Dompdf\Dompdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class DashboardKetUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keteranganUmum = KeteranganUmum::latest('updated_at')->paginate(5);
        return view ('dashboard.administrasi.df_surat_umum', ['keteranganUmum' => $keteranganUmum]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.administrasi.create_umum');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $keteranganUmum = new KeteranganUmum();
        $keteranganUmum->nama = $request->input('nama');
        $keteranganUmum->nik = $request->input('nik');
        $keteranganUmum->no_kk = $request->input('no_kk');
        $keteranganUmum->jenis_kelamin = $request->input('jenis_kelamin');
        $keteranganUmum->tmpt_lahir = $request->input('tmpt_lahir');
        $keteranganUmum->tgl_lahir = $request->input('tgl_lahir');
        $keteranganUmum->warganegara = $request->input('warganegara');
        $keteranganUmum->agama = $request->input('agama');
        $keteranganUmum->pekerjaan = $request->input('pekerjaan');
        $keteranganUmum->alamat = $request->input('alamat');
        $keteranganUmum->no_surat = $request->input('no_surat');
        $keteranganUmum->berlaku = $request->input('berlaku');
        $keteranganUmum->ket_lain = $request->input('ket_lain');
        $keteranganUmum->keperluan = $request->input('keperluan');
        $keteranganUmum->save();
        

        return redirect()->route('dashboard.keteranganumum.index')->with('success', 'Data penduduk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(KeteranganUmum $keteranganUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KeteranganUmum $keteranganUmum)
    {
        $keteranganUmum  = KeteranganUmum::where('id', '=', $keteranganUmum->id)->firstOrFail();
    
        return view('dashboard.administrasi.edit_keteranganumum', ['keteranganUmum' => $keteranganUmum]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KeteranganUmum $keteranganUmum)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin'  => 'required',
            'tmpt_lahir'  => 'required',
            'tgl_lahir'  => 'required',
            'warganegara'  => 'required',
            'agama'  => 'required',
            'pekerjaan'  => 'required',
            'no_surat'  => 'required',
            'berlaku'  => 'required',
            'keperluan'  => 'required',
            'ket_lain'  => 'required',
        ]);

        $keteranganUmum  = KeteranganUmum::where('id', '=', $keteranganUmum->id)->firstOrFail();
        $keteranganUmum->update($validatedData);

        return redirect()->route('dashboard.keteranganumum.index')->with('success', 'Data penduduk berhasil diperbarui');
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeteranganUmum $keteranganUmum)
    {
        $keteranganUmum = KeteranganUmum::findOrFail($keteranganUmum->id);
        $keteranganUmum->delete();
        return redirect()->route('dashboard.keteranganumum.index')->with('success', 'Data penduduk berhasil dihapus');
    
    }

    public function export(string $id)
    {
        $keteranganUmum  = KeteranganUmum::where('id', '=', $id)->firstOrFail();
        $pdf = new Dompdf();
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);

        $pdf = \PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);

        $pdf->loadHtml(View::make('dashboard.administrasi.tampilan_umum')->with('keteranganUmum', $keteranganUmum)->render());
        $pdf->render();

        return $pdf->stream();
    }
}
