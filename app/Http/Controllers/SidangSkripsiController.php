<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidangSkripsiController extends Controller
{
    public function showSidangSkripsiForm()
    {
        return view('sidang_skripsi');
    }
}
