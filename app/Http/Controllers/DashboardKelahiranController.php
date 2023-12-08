<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class DashboardKelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelahiran = Kelahiran::latest('updated_at')->get();
        return view('dashboard.adminduk.kelahiran', ['kelahiran' => $kelahiran]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.adminduk.create_kelahiran');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kelahiran = new Kelahiran();
        $kelahiran->nik_bayi = $request->input('nik_bayi');
        $kelahiran->nama_bayi = $request->input('nama_bayi');
        $kelahiran->warganegara_bayi = $request->input('warganegara_bayi');
        $kelahiran->kecamatan = $request->input('kecamatan');
        $kelahiran->kelurahan = $request->input('kelurahan');
        $kelahiran->jns_kelamin = $request->input('jns_kelamin');
        $kelahiran->tmpt_dilahirkan = $request->input('tmpt_dilahirkan');
        $kelahiran->tmpt_kelahiran = $request->input('tmpt_kelahiran');
        $kelahiran->tgl_lahir = $request->input('tgl_lahir');
        $kelahiran->jam = $request->input('jam');
        $kelahiran->anak_ke = $request->input('anak_ke');
        $kelahiran->jns_kelahiran = $request->input('jns_kelahiran');
        $kelahiran->penolong_lahir = $request->input('penolong_lahir');
        $kelahiran->brt_bayi = $request->input('brt_bayi');
        $kelahiran->pjg_bayi = $request->input('pjg_bayi');

        $kelahiran->nik_ayah = $request->input('nik_ayah');
        $kelahiran->nama_ayah = $request->input('nama_ayah');
        $kelahiran->tmpt_lahir_ayah = $request->input('tmpt_lahir_ayah');
        $kelahiran->tgl_lahir_ayah = $request->input('tgl_lahir_ayah');
        $kelahiran->no_kk_ayah = $request->input('no_kk_ayah');
        $kelahiran->warganegara_ayah = $request->input('warganegara_ayah');

        $kelahiran->nik_ibu = $request->input('nik_ibu');
        $kelahiran->nama_ibu = $request->input('nama_ibu');
        $kelahiran->tmpt_lahir_ibu = $request->input('tmpt_lahir_ibu');
        $kelahiran->tgl_lahir_ibu = $request->input('tgl_lahir_ibu');
        $kelahiran->no_kk_ibu = $request->input('no_kk_ibu');
        $kelahiran->warganegara_ibu = $request->input('warganegara_ibu');

        $kelahiran->nik_s1 = $request->input('nik_s1');
        $kelahiran->nama_s1 = $request->input('nama_s1');
        $kelahiran->no_kk_s1 = $request->input('no_kk_s1');
        $kelahiran->warganegara_s1 = $request->input('warganegara_s1');
        $kelahiran->nik_s2 = $request->input('nik_s2');
        $kelahiran->nama_s2 = $request->input('nama_s2');
        $kelahiran->no_kk_s2 = $request->input('no_kk_s2');
        $kelahiran->warganegara_s2 = $request->input('warganegara_s2');

        $kelahiran->nik_pelapor = $request->input('nik_pelapor');
        $kelahiran->nama_pelapor = $request->input('nama_pelapor');
        $kelahiran->email_pelapor = $request->input('email_pelapor');
        $kelahiran->no_hp_pelapor = $request->input('no_hp_pelapor');
        $kelahiran->no_kk_pelapor = $request->input('no_kk_pelapor');
        $kelahiran->warganegara_pelapor = $request->input('warganegara_pelapor');
        $kelahiran->save();

        return redirect()->route('dashboard.adminduk.index')->with('success', 'Data kelahiran berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelahiran $kelahiran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        $kelahiran  = Kelahiran::where('id', '=', $id)->firstOrFail();

        return view('dashboard.adminduk.edit_kelahiran', ['kelahiran' => $kelahiran]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            //data bayi
            'nik_bayi' => 'required',
            'nama_bayi' => 'required',
            'warganegara_bayi' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'tmpt_dilahirkan' => 'required',
            'tmpy_kelahiran' => 'required',
            'tgl_lahir' => 'required',
            'jam' => 'required',
            'jns_kelamin' => 'required',
            'anak_ke' => 'required',
            'pnjng_lahir' => 'required',
            'brt_bayi' => 'required',
            'pjg_bayi' => 'required',

            //data ayah
            'nik_ayah' => 'required',
            'nama_ayah' => 'required',
            'tmpt_lahir_ayah' => 'required',
            'tgl_lahir_ayah' => 'required',
            'no_kk_ayah' => 'required',
            'warganegara_ayah' => 'required',

            //data ibu
            'nik_ibu' => 'required',
            'nama_ibu' => 'required',
            'tmpt_lahir_ibu' => 'required',
            'tgl_lahir_ibu' => 'required',
            'no_kk_ibu' => 'required',
            'warganegara_ibu' => 'required',

            //data saksi
            'nik_s1' => 'required',
            'nama_s1' => 'required',
            'no_kk_s1' => 'required',
            'warganegara_s1' => 'required',
            'nik_s2' => 'required',
            'nama_s2' => 'required',
            'no_kk_s2' => 'required',
            'warganegara_s2' => 'required',
        ]);

        $kelahiran  = Kelahiran::where('id', '=', $id)->firstOrFail();
        $kelahiran->update($validatedData);

        return redirect()->route('dashboard.adminduk.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kelahiran = Kelahiran::findOrFail($id);
        $kelahiran->delete();
        return redirect()->route('dashboard.adminduk.index')->with('success', 'Data penduduk berhasil dihapus');
    }

    public function export(string $id)
    {
        $kelahiran  = Kelahiran::where('id', '=', $id)->firstOrFail();
        $pdf = new Dompdf();
        $contxt = stream_context_create([
            'ssl' => [
                'verify_peer' => FALSE,
                'verify_peer_name' => FALSE,
                'allow_self_signed' => TRUE,
            ]
        ]);

        // return view('dashboard.adminduk.tampilan_lahiran', ['kelahiran' => $kelahiran]);

        $pdf = \PDF::setOptions(['isHTML5ParserEnabled' => true, 'isRemoteEnabled' => true]);
        $pdf->getDomPDF()->setHttpContext($contxt);

        $pdf->loadHtml(View::make('dashboard.adminduk.tampilan_lahiran')->with('kelahiran', $kelahiran)->render());
        $pdf->render();

        return $pdf->stream();
    }
}
