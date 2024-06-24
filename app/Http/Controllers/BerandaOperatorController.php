<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaOperatorController extends Controller
{
    public function showBerandaOperatorForm()
    {
        return view('beranda_operator');
    }
}
