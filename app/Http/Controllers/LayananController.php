<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Layanans;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct()
    // {
    //     // Middleware 'user' diaplikasikan pada seluruh metode controller
    //     $this->middleware('role:user');
    //     $this->middleware('role:admin');
    // }
    
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

    public function umum()
    {
       return view ('layanan.umum-index');
    }
    public function domisili()
    {
       return view ('layanan.domisili-index');
    }
    public function bbm()
    {
       return view ('layanan.bbm-index');
    }
    public function usaha()
    {
       return view ('layanan.usaha-index');
    }
    public function kelahiran()
    {
       return view ('layanan.kelahiran-index');
    }
    public function kematian()
    {
       return view ('layanan.kematian-index');
    }
    public function pindah()
    {
       return view ('layanan.pindah-index');
    }
    public function datang()
    {
       return view ('layanan.datang-index');
    }

}
