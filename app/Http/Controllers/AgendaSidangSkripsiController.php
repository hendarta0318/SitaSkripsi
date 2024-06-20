<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaSidangSkripsiController extends Controller
{
    public function showAgendaSidSkripForm()
    {
        return view('agenda_sidang_skripsi');
    }
}
