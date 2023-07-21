<?php

namespace App\Http\Controllers;

use App\Models\Domisili;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        // $ket_domisili = Domisili::latest('updated_at')->paginate(5);
        // return view('dashboard.administrasi.df_surat_domisili', ['ke_domisili' => $ket_domisili]);
        $domisili =  Domisili::latest('updated_at')->paginate(5);
        return view('dashboard.administrasi.df_surat_domisili', ['domisili' => $domisili]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.administrasi.create_domisili');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $domisili = new Domisili();
        $domisili->nama = $request->input('nama');
        $domisili->nik = $request->input('nik');
        $domisili->no_kk = $request->input('no_kk');
        $domisili->jenis_kelamin = $request->input('jenis_kelamin');
        $domisili->binti = $request->input('binti');
        $domisili->tmpt_tgl_lahir = $request->input('tmpt_tgl_lahir');
        $domisili->agama = $request->input('agama');
        $domisili->warganegara = $request->input('warganegara');
        $domisili->pekerjaan = $request->input('pekerjaan');
        $domisili->alamat = $request->input('alamat');
        $domisili->no_surat = $request->input('no_surat');
        $domisili->keperluan = $request->input('keperluan');
        $domisili->save();
        

        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Domisili $domisili)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Domisili $domisili)
    {
        // $domisili = Domisili::findOrFail($domisili->id);
        $domisili  = Domisili::where('id', '=', $domisili->id)->firstOrFail();
    
        return view('dashboard.administrasi.edit_domisili', ['domisili' => $domisili]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Domisili $domisili)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);
    
        // $domisili = Domisili::findOrFail($domisili->id);
        $domisili  = Domisili::where('id', '=', $domisili->id)->firstOrFail();
        $domisili->update($validatedData);
    
        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Domisili $domisili)
    {
        $domisili = Domisili::findOrFail($domisili->id);
        $domisili->delete();
        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil dihapus');
    }

    public function domisili($id)
    {
        // Query data domisili dari database berdasarkan ID
        $domisili  = Domisili::where('id', '=', $domisili->id)->firstOrFail();

        // Render view laporan dengan data domisili yang sudah diquery
        return view('dashboard.administrasi.tampilan_domisili', ['domisili' => $domisili]);
    }

    public function tampilDataDomisili()
    {
        // Query semua data domisili dari database
        $dataDomisili = Domisili::all();

        // Render view untuk menampilkan data domisili dengan data yang sudah diquery
        return view('dashboard.administrasi.tampilan_domisili', ['dataDomisili' => $dataDomisili]);
    }
}
