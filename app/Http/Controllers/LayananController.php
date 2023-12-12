<?php

namespace App\Http\Controllers;

use App\Models\Layanans;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        //
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
    public function update(Request $request, Layanans $layanans)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Layanans $layanans)
    {
        //
    }
}
