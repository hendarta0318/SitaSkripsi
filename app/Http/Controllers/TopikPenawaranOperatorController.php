<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopikPenawaranOperatorController extends Controller
{
     public function showTopikPenawaranOperatorForm()
    {
        return view('topik_penawaran_operator');
    }
}
