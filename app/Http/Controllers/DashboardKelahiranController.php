<?php

namespace App\Http\Controllers;

use App\Models\Kelahiran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardKelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kelahiran = Kelahiran::latest('updated_at')->get();
        return view ('dashboard.adminduk.kelahiran', ['kelahiran' => $kelahiran]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.adminduk.create_kelahiran');
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
        $kelahiran->tmpt_dilahirkan = $request->input('tmpt_dilahirkan');
        $kelahiran->tmpy_kelahiran = $request->input('tmpy_kelahiran');
        $kelahiran->tgl_lahir = $request->input('tgl_lahir');
        $kelahiran->jam = $request->input('jam');
        $kelahiran->jns_kelamin = $request->input('jns_kelamin');
        $kelahiran->anak_ke = $request->input('anak_ke');
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
        $kelahiran->save();

        return redirect()->route('dashboard.adminduk.index')->with('success', 'Data penduduk berhasil ditambahkan');
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
            'nik_bayi' => 'required',
            'nama_bayi' => 'required',
            'warganegara_bayi' => 'required',
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
}
