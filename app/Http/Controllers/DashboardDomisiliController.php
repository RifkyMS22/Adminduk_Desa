<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Domisili;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class DashboardDomisiliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $ket_domisili = Domisili::latest('updated_at')->paginate(5);
        // return view('dashboard.administrasi.df_surat_domisili', ['ke_domisili' => $ket_domisili]);
        $domisili =  Domisili::latest('updated_at')->get();
        return view('dashboard.administrasi.df_surat_domisili', ['domisili' => $domisili]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $nikes = DataPenduduk::select('nik', 'nama', 'no_kk', 'jns_kelamin','nama_ayah', 'agama', 'alamat', 'tmpt_lahir', 'tgl_lahir')->get();
        return view('dashboard.administrasi.create_domisili', compact('nikes'));
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
        $domisili->tmpt_lahir = $request->input('tmpt_lahir');
        $domisili->tgl_lahir = $request->input('tgl_lahir');
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
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $domisili = Domisili::findOrFail($domisili->id);
        $domisili  = Domisili::where('id', '=', $id)->firstOrFail();

        return view('dashboard.administrasi.edit_domisili', ['domisili' => $domisili]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'binti' => 'required',
            'tmpt_lahir' => 'required',
            'tgl_lahir' => 'required',
            'agama' => 'required',
            'warganegara' => 'required',
            'pekerjaan' => 'required',
            'no_surat' => 'required',
            'keperluan' => 'required',
        ]);

        $domisili  = Domisili::where('id', '=', $id)->firstOrFail();
        $domisili->update($validatedData);

        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $domisili = Domisili::findOrFail($id);
        $domisili->delete();
        return redirect()->route('dashboard.administrasi.index')->with('success', 'Data penduduk berhasil dihapus');
    }

    public function export(string $id)
    {
        $domisili  = Domisili::where('id', '=', $id)->firstOrFail();
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

        $pdf->loadHtml(View::make('dashboard.administrasi.tampilan_domisili')->with('domisili', $domisili)->render());
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
