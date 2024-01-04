<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Layanans;
use App\Models\Pengajuan;
use Illuminate\Http\Request;


class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        //
    }
    
     public function index()
    {
       return view ('layanan.index-layanan');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pengajuan = new Pengajuan();
        $pengajuan->nama_pemohon = $request->input('nama_pemohon');
        $pengajuan->nik = $request->input('nik');
        $pengajuan->email = $request->input('email');
        $pengajuan->jenis_pengajuan = $request->input('jenis_pengajuan');
        $pengajuan->pesan = $request->input('pesan');
        $pengajuan->status = $request->input('status');

      // Menambahkan ID pengguna yang sedang login
        $pengajuan->user_id = Auth::id();

        $pengajuan->save();

         return redirect()->route('layanan.index')->with('success', 'Pengajuan berhasil disimpan.');
 
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanans $layanans)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Layanans $layanans)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
            // Validasi input
            $request->validate([
               'nama_pemohon' => 'required',
               'email' => 'required',
               'nik' => 'required',
               'jenis_pengajuan' => 'required',
               'pesan' => 'required',
               // 'status' => 'required',
               // 'lampiran' => 'required',
         ]);

         // Temukan data pengajuan berdasarkan ID
         $pengajuan = Pengajuan::findOrFail($id);

         // Update data pengajuan
         $pengajuan->update($request->all());

         return redirect()->route('layanan.index')->with('success', 'Pengajuan berhasil diperbarui.');
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanans $layanans)
    {
        //
    }

    public function pengajuan()
    {
      return view('layanan.pengajuan-index');
    }

    public function riwayatPengajuan()
    {
        $userId = Auth::id();
        
        // $riwayatPengajuan = Pengajuan::all(); // Sesuaikan dengan model dan tabel Anda
        $riwayatPengajuan = Pengajuan::where('user_id', $userId)->get();

        return view('layanan.riwayat_pengajuan', compact('riwayatPengajuan'));
    }
}
