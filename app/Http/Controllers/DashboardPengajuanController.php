<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class DashboardPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan = Pengajuan::all();
        return view ('dashboard.pengajuan.pengajuan-index', compact('pengajuan'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function updateStatus($id)
{
    $pengajuan = Pengajuan::findOrFail($id);
    $pengajuan->status = 'processed'; // Ganti status sesuai kebutuhan
    $pengajuan->save();

    return redirect()->route('dashbaord.pengajuan.index')->with('success', 'Status pengajuan berhasil diperbarui.');
}
}
