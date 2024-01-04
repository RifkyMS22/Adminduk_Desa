<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Dompdf\Dompdf;

class DashboardPendudukController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('search');$dataPenduduk = DataPenduduk::where('nama', 'like', "%$query%")
        ->latest('updated_at')
        ->paginate(25);

        return view('dashboard.penduduk.index', ['dataPenduduk' => $dataPenduduk]);



        
        // $dataPenduduk = DataPenduduk::latest('updated_at')->paginate(5);
        // return view('dashboard.penduduk.index', ['dataPenduduk' => $dataPenduduk]);
    }


    public function create()
    {
        return view('dashboard.penduduk.create');
    }


    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'nik' => 'required',
        //     'no_kk' => 'required',
        //     'nama' => 'required',
        //     'alamat' => 'required',
        // ]);

        // DataPenduduk::create($validatedData);
        $dataPenduduk = new DataPenduduk();
        $dataPenduduk->nik = $request->input('nik');
        $dataPenduduk->no_kk = $request->input('no_kk');
        $dataPenduduk->nama = $request->input('nama');
        $dataPenduduk->alamat = $request->input('alamat');
        $dataPenduduk->rt = $request->input('rt');
        $dataPenduduk->rw = $request->input('rw');
        $dataPenduduk->tmpt_lahir = $request->input('tmpt_lahir');
        $dataPenduduk->tgl_lahir = $request->input('tgl_lahir');
        $dataPenduduk->jns_kelamin = $request->input('jns_kelamin');
        $dataPenduduk->stts_kawin = $request->input('stts_kawin');
        $dataPenduduk->pendidikan = $request->input('pendidikan');
        $dataPenduduk->stts_hub_keluarga = $request->input('stts_hub_keluarga');
        $dataPenduduk->pekerjaan = $request->input('pekerjaan');
        $dataPenduduk->agama = $request->input('agama');
        $dataPenduduk->no_akta_lahir = $request->input('no_akta_lahir');
        $dataPenduduk->no_akta_nikah = $request->input('no_akta_nikah');
        $dataPenduduk->tgl_nikah = $request->input('tgl_nikah');
        $dataPenduduk->no_akta_cerai = $request->input('no_akta_cerai');
        $dataPenduduk->tgl_cerai = $request->input('tgl_cerai');
        $dataPenduduk->nik_ayah = $request->input('nik_ayah');
        $dataPenduduk->nama_ayah = $request->input('nama_ayah');
        $dataPenduduk->nik_ibu = $request->input('nik_ibu');
        $dataPenduduk->nama_ibu = $request->input('nama_ibu');
        $dataPenduduk->save();

        return redirect()->route('dashboard.penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan');
    }


    public function show(Penduduk $penduduk)
    {
       //
    }


    public function edit($nik)
    {
        $dataPenduduk = DataPenduduk::where('nik', $nik)->firstOrFail();
    
        return view('dashboard.penduduk.edit', ['dataPenduduk' => $dataPenduduk]);
    }
    

    public function update(Request $request, $nik)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jns_kelamin' => 'required',
            'stts_kawin' => 'required',
            'pendidikan' => 'required',
            'stts_hub_keluarga' => 'required',
            'pekerjaan' => 'required',
            'agama' => 'required',
            'no_akta_lahir' => 'required',
            'no_akta_nikah' => 'required',
            'tgl_nikah' => 'required',
            'no_akta_cerai' => 'required',
            'tgl_cerai' => 'required',
            'nik_ayah' => 'required',
            'nama_ayah' => 'required',
            'nik_ibu' => 'required',
            'nama_ibu' => 'required',
        ]);

        $dataPenduduk = DataPenduduk::where('nik', $nik)->firstOrFail();
        $dataPenduduk->update($validatedData);

        // $dataPenduduk = new DataPenduduk();
        // $dataPenduduk->nik = $request->input('nik');
        // $dataPenduduk->no_kk = $request->input('no_kk');
        // $dataPenduduk->nama = $request->input('nama');
        // $dataPenduduk->alamat = $request->input('alamat');
        // $dataPenduduk->save();

        return redirect()->route('dashboard.penduduk.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    public function destroy(string $nik)
    {

        $dataPenduduk = DataPenduduk::findOrFail($nik);
        $dataPenduduk->delete();
        return redirect()->route('dashboard.penduduk.index')->with('success', 'Data penduduk berhasil dihapus');
    }
    
}
