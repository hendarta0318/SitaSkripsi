<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopikPenawaranMahasiswaController extends Controller
{
     public function showTopikPenawaranMahasiswaForm()
    {
        return view('topik_penawaran_mahasiswa');
    }
}
