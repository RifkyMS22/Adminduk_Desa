<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::take(6)->get();
        return view('home', compact('berita'));
    }
    public function semuaBerita()
    {
        $berita = Berita::all();
        return view('berita.index', compact('berita'));
    }

    // Metode ini menangani tampilan satu berita berdasarkan ID
    public function show($id)
    {
    $berita = Berita::find($id);
    return view('berita.show-berita', ['berita' => $berita]);
    }
}
