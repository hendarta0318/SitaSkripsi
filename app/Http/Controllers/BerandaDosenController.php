<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanPembimbing;

class BerandaDosenController extends Controller
{
    public function showBerandaDosenForm()
    {
        $data = UsulanPembimbing::select('id','nim', 'nama', 'dosen_pembimbing1', 'dosen_pembimbing2', 'judul','draf_proposal', 'krs_berjalan',)->paginate();
        return view('beranda_dosen', compact('data'));
    }
}
