<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Logika bisnis atau tindakan yang diperlukan
        return view('home');
    }
}
