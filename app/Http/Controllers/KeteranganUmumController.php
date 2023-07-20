<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeteranganUmumController extends Controller
{
    public function index()
    {
    return view ('dashboard.administrasi.create_umum');
    }
}
