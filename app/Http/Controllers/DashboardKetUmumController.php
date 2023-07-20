<?php

namespace App\Http\Controllers;

use App\Models\KeteranganUmum;
use Illuminate\Http\Request;

class DashboardKetUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('dashboard.administrasi.df_surat_umum');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.administrasi.create_umum');
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
    public function show(KeteranganUmum $keteranganUmum)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(KeteranganUmum $keteranganUmum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, KeteranganUmum $keteranganUmum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(KeteranganUmum $keteranganUmum)
    {
        //
    }
}
