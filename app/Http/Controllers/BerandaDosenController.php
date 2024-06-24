<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaDosenController extends Controller
{
    public function showBerandaDosenForm()
    {
        return view('beranda_dosen');
    }
}
