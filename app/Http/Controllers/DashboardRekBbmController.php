<?php

namespace App\Http\Controllers;

use App\Models\RekomendasiBbm;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class DashboardRekBbmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rekomendasiBbm = RekomendasiBbm::latest('updated_at')->get();
        return view ('dashboard.administrasi.df_surat_bbm', ['rekomendasiBbm' => $rekomendasiBbm]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.administrasi.create_bbm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rekomendasiBbm = new RekomendasiBbm();
        $rekomendasiBbm->nama = $request->input('nama');
        $rekomendasiBbm->nik = $request->input('nik');
        $rekomendasiBbm->no_kk = $request->input('no_kk');
        $rekomendasiBbm->jenis_kelamin = $request->input('jenis_kelamin');
        $rekomendasiBbm->tmpt_tgl_lahir = $request->input('tmpt_tgl_lahir');
        $rekomendasiBbm->pekerjaan = $request->input('pekerjaan');
        $rekomendasiBbm->alamat = $request->input('alamat');
        $rekomendasiBbm->alamat_usaha = $request->input('alamat_usaha');
        $rekomendasiBbm->konsumen_pengguna = $request->input('konsumen_pengguna');
        $rekomendasiBbm->jns_usaha = $request->input('jns_usaha');
        $rekomendasiBbm->jns_bbm = $request->input('jns_bbm');
        $rekomendasiBbm->no_surat = $request->input('no_surat');
        $rekomendasiBbm->masa_berlaku = $request->input('masa_berlaku');
        $rekomendasiBbm->save();

        return redirect()->route('dashboard.bbm.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(RekomendasiBbm $rekomendasiBbm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rekomendasiBbm = RekomendasiBbm::where('id', '=', $id)->firstOrFail();
        return view ('dashboard.administrasi.edit_bbm', ['rekomendasiBbm' => $rekomendasiBbm]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $validatedData = $request->validate([
            
            'nama' => 'required',
            'nik' => 'required',
            'no_kk' => 'required',
            'jenis_kelamin' => 'required',
            'tmpt_tgl_lahir' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'alamat_usaha' => 'required',
            'jns_usaha' => 'required',
            'jns_bbm' => 'required',
            'no_surat' => 'required',
            'masa_berlaku' => 'required',
        ]);

        $rekomendasiBbm  = RekomendasiBbm::where('id', '=', $id)->firstOrFail();
        $rekomendasiBbm->update($validatedData);

        return redirect()->route('dashboard.bbm.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rekomendasiBbm = RekomendasiBbm::findOrFail($id);
        $rekomendasiBbm->delete();
        return redirect()->route('dashboard.bbm.index')->with('success', 'Data penduduk berhasil dihapus');
    }

    public function export(string $id)
    {
        $rekomendasiBbm  = RekomendasiBbm::where('id', '=', $id)->firstOrFail();
        // return view('dashboard.administrasi.tampilan_domisili', ['domisili'=> $rekomendasiBbm]);
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

        $pdf->loadHtml(View::make('dashboard.administrasi.tampilan_domisili')->with('domisili', $rekomendasiBbm)->render());
        $pdf->render();

        return $pdf->stream();
    }
}
