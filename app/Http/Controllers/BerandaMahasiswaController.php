<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanPembimbing;

class BerandaMahasiswaController extends Controller
{
    public function showBerandaMhsForm()
    {
        $data = UsulanPembimbing::select('nim', 'nama', 'judul')->paginate();
        return view('beranda_mahasiswa', compact('data'));
    }
}
