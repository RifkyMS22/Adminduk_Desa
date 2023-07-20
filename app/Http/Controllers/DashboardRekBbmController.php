<?php

namespace App\Http\Controllers;

use App\Models\RekomendasiBbm;
use Illuminate\Http\Request;

class DashboardRekBbmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('dashboard.administrasi.df_surat_bbm');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('dashboard.administrasi.create_bbm');
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
    public function show(RekomendasiBbm $rekomendasiBbm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RekomendasiBbm $rekomendasiBbm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RekomendasiBbm $rekomendasiBbm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RekomendasiBbm $rekomendasiBbm)
    {
        //
    }
}
