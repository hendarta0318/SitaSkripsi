<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaMahasiswaController extends Controller
{
    public function showBerandaMhsForm()
    {
        return view('beranda_mahasiswa');
    }
}
