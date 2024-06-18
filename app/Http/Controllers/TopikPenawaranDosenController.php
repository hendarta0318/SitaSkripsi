<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopikPenawaranDosenController extends Controller
{
     public function showTopikPenawaranDosenForm()
    {
        return view('topik_penawaran_dosen');
    }
}
