<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanPembimbing;

class BerandaOperatorController extends Controller
{
    public function showBerandaOperatorForm()
    {
        $data = UsulanPembimbing::select('id','nim', 'nama', 'judul', 'no_wa')->paginate();
        return view('beranda_operator', compact('data'));
    }
}
