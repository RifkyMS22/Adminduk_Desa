<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardPendudukController extends Controller
{
    public function index()
    {
        $dataPenduduk = DataPenduduk::latest('updated_at')->paginate(5);
        return view('dashboard.penduduk.index', ['dataPenduduk' => $dataPenduduk]);
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
        $dataPenduduk->save();

        return redirect()->route('dashboard.penduduk.index')->with('success', 'Data penduduk berhasil ditambahkan');
    }


    public function show(Penduduk $penduduk)
    {
       //
    }


    public function edit(Penduduk $penduduk)
    {
        $dataPenduduk = DataPenduduk::findOrFail($penduduk->nik);

        return view('dashboard.penduduk.edit', ['dataPenduduk' => $dataPenduduk]);

    }

    public function update(Request $request, Penduduk $penduduk)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ]);

        $dataPenduduk = DataPenduduk::findOrFail($penduduk->nik);
        $dataPenduduk->update($validatedData);

        // $dataPenduduk = new DataPenduduk();
        // $dataPenduduk->nik = $request->input('nik');
        // $dataPenduduk->no_kk = $request->input('no_kk');
        // $dataPenduduk->nama = $request->input('nama');
        // $dataPenduduk->alamat = $request->input('alamat');
        // $dataPenduduk->save();

        return redirect()->route('dashboard.penduduk.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    public function destroy(Penduduk $penduduk)
    {

        $dataPenduduk = DataPenduduk::findOrFail($penduduk->nik);
        $dataPenduduk->delete();
        return redirect()->route('dashboard.penduduk.index')->with('success', 'Data penduduk berhasil dihapus');
    }
}
