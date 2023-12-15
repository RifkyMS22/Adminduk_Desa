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
        return view ('dashboard.administrasi.df_surat_usaha', ['usaha' => $usaha]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nikes = DataPenduduk::select('nik', 'nama', 'no_kk', 'jns_kelamin','nama_ayah', 'agama', 'alamat', 'tmpt_lahir', 'tgl_lahir')->get(); // Gantilah 'nik' dan 'id' sesuai dengan kolom yang sesuai di tabel DataPenduduk
        return view('dashboard.administrasi.create_usaha', compact('nikes'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // $validatedData = $request->validate([
    //     'nik' => 'required',
    //     'no_kk' => 'required',
    //     'nama' => 'required',
    //     'jenis_kelamin' => 'required',
    //     'binti' => 'required',
    //     'tmpt_lahir' => 'required',
    //     'tgl_lahir' => 'required',
    //     'agama' => 'required',
    //     'warganegara' => 'required',
    //     'pekerjaan' => 'required',
    //     'alamat' => 'required',
    //     'no_surat' => 'required',
    //     'keperluan' => 'required',
    // ]);

    $usaha = new Usaha();
    $usaha->nik = $request->input('nik'); // Mengambil NIK yang dipilih dari dropdown
    $usaha->no_kk = $request->input('no_kk');
    $usaha->nama = $request->input('nama');
    $usaha->jenis_kelamin = $request->input('jenis_kelamin');
    $usaha->binti = $request->input('binti');
    $usaha->tmpt_lahir = $request->input('tmpt_lahir');
    $usaha->tgl_lahir = $request->input('tgl_lahir');
    $usaha->agama = $request->input('agama');
    $usaha->warganegara = $request->input('warganegara');
    $usaha->pekerjaan = $request->input('pekerjaan');
    $usaha->alamat = $request->input('alamat');
    $usaha->no_surat = $request->input('no_surat');
    $usaha->keperluan = $request->input('keperluan');
    $usaha->save();

    return redirect()->route('dashboard.usaha.index')->with('success', 'Data penduduk berhasil ditambahkan');
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

        return view('dashboard.administrasi.edit_usaha', ['usaha' => $usaha]);
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
            'jenis_kelamin' => 'required',
            'binti' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'warganegara' => 'required',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'no_surat' => 'required',
            'keperluan' => 'required',
        ]);

        $usaha  = Usaha::where('id', '=', $id)->firstOrFail();
        $usaha->update($validatedData);

        return redirect()->route('dashboard.usaha.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usaha $usaha)
    {
        $usaha = Usaha::findOrFail($id);
        $usaha->delete();
        return redirect()->route('dashboard.usaha.index')->with('success', 'Data penduduk berhasil dihapus');
    }

    public function export(string $id)
    {
        $usaha  = Usaha::where('id', '=', $id)->firstOrFail();
        // return view('dashboard.administrasi.tampilan_domisili', ['domisili'=> $domisili]);
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

        $pdf->loadHtml(View::make('dashboard.administrasi.tampilan_domisili')->with('usaha', $usaha)->render());
        $pdf->render();

        return $pdf->stream();
    }

    public function getDataByNik($nik)
    {
        // Lakukan pencarian data berdasarkan NIK
        $data = DataPenduduk::where('nik', $nik)->first();

        if ($data) {
            return response()->json($data);
        } else {
            return response()->json(['error' => 'Data not found'], 404);
        }
    }


}
