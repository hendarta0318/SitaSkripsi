<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanPembimbing;

class BerandaDosenController extends Controller
{
    public function showBerandaDosenForm()
    {
        $data = UsulanPembimbing::select('nim', 'nama', 'dosen_pembimbing1', 'dosen_pembimbing2', 'judul')->paginate();
        return view('beranda_dosen', compact('data'));
    }
}
