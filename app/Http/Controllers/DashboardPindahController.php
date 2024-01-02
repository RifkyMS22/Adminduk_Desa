<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Pindah;
use App\Models\DataPenduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class DashboardPindahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pindah = Pindah::latest('updated_at')->get();
        return view ('dashboard.adminduk.df_pindah', ['pindah' => $pindah]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.adminduk.create_pindah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $pindah = new Pindah();
        $pindah->nik = $request->input('nik');
        $pindah->nama = $request->input('nama');
        $pindah->email = $request->input('email');
        $pindah->no_hp = $request->input('no_hp');
        $pindah->no_kk = $request->input('no_kk');
        $pindah->almt_asal = $request->input('almt_asal');
        $pindah->rt = $request->input('rt');
        $pindah->rw = $request->input('rw');
        $pindah->provinsi = $request->input('provinsi');
        $pindah->kabupaten = $request->input('kabupaten');
        $pindah->kecamatan = $request->input('kecamatan');
        $pindah->desa = $request->input('desa');
        $pindah->kd_pos = $request->input('kd_pos');
        $pindah->kls_pindah = $request->input('kls_pindah');
        $pindah->almt_pindah = $request->input('almt_pindah');
        $pindah->rt_pindah = $request->input('rt_pindah');
        $pindah->rw_pindah = $request->input('rw_pindah');
        $pindah->provinsi_pindah = $request->input('provinsi_pindah');
        $pindah->kota_pindah = $request->input('kota_pindah');
        $pindah->kd_pos_pindah = $request->input('kd_pos_pindah');
        $pindah->alasan_pindah = $request->input('alasan_pindah');
        $pindah->jns_kepindahan = $request->input('jns_kepindahan');
        $pindah->aggt_tdk_pindah = $request->input('aggt_tdk_pindah');
        $pindah->aggt_pindah = $request->input('aggt_pindah');
        $pindah->df_aggt_pindah = $request->input('df_aggt_pindah');

        // Mengonversi opsi klasifikasi pindahan menjadi format JSON
        $klsPindahArray = [$request->input('kls_pindah')];
        $pindah->kls_pindah = json_encode($klsPindahArray);
        
        $pindah->save();

        return redirect()->route('dashboard.pindah.create')->with('success', 'Data berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pindah $pindah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pindah $pindah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validateData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'no_kk' => 'required',
            'almt_asal' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'desa' => 'required',
            'kd_pos' => 'required',
            'kls_pindah' => 'required',
            'almt_pindah' => 'required',
            'rt_pindah' => 'required',
            'rw_pindah' => 'required',
            'provinsi_pindah' => 'required',
            'kota_pindah' => 'required',
            'kd_pos_pindah' => 'required',
            'alasan_pindah' => 'required',
            'jns_kepindahan' => 'required',
            'aggt_tdk_pindah' => 'required',
            'aggt_pindah' => 'required',
            'df_aggt_pindah' => 'required',
        ]);
        $pindah = Pindah::where('id', '=', $id)->firstOrfail();
        $pindah->update($validateData);

        return redirect()->route('dashboard.pindah.index')->with('succes', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pindah = Pindah::findOrFail($id);
        $pindah->delete();
        return redirect()->route('dashboard.pindah.index')->with('success', 'Data penduduk berhasil dihapus');
    }

    public function export(string $id)
    {
        $pindah = Pindah::findOrFail($id);

        // Pastikan bahwa kls_pindah adalah array
        if (is_string($pindah->kls_pindah)) {
            $pindah->kls_pindah = json_decode($pindah->kls_pindah, true);
        }

        $alasanPindahOptions = [
            'Pekerjaan',
            'Pendidikan',
            'Kesehatan',
            'Keluarga',
            'Lainnya',
        ];

        $jenispindahOptions = [
            'kepala keluarga',
            'kep. kel. dan seluruh angg. keluarga',
            'kep. kel. dan sbg. angg. keluarga',
            'anggota keluarga',
        ];

        $aggttdkpindahOptions = [
            'Numpang KK',
            'Membuat KK Baru',
            'Nomor KK Tetap',
        ];

        $aggtpindahOptions = [
            'Numpang KK',
            'Membuat KK Baru',
            'Nomor KK Tetap',
        ];
        // Setup Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        // Set ukuran kertas (misalnya 'A4')
        $dompdf->setPaper('legal', 'landscape');

        // Load HTML
        $html = View::make('dashboard.adminduk.tampilan_pindah', compact('pindah', 'alasanPindahOptions', 'jenispindahOptions', 'aggttdkpindahOptions', 'aggtpindahOptions'))->render();
        $dompdf->loadHtml($html);

        // Render PDF (rendering terpisah dari loadHtml untuk memungkinkan pengaturan lainnya)
        $dompdf->render();

        // Stream atau download PDF
        return $dompdf->stream();
        // Jika ingin mengunduh, gunakan:
        // return $dompdf->download('nama_file.pdf');
    }

}

