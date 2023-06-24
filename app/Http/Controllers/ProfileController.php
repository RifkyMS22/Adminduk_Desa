<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Logika bisnis atau tindakan yang diperlukan
        return view('profile');
    }
    
}
