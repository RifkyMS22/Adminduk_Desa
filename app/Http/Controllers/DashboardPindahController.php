<?php

namespace App\Http\Controllers;

use App\Models\Pindah;
use Illuminate\Http\Request;

class DashboardPindahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view ('dashboard.adminduk.df_pindah');
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
        //
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
    public function update(Request $request, Pindah $pindah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pindah $pindah)
    {
        //
    }
}
