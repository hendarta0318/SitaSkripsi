<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaSidangSkripsiOperatorController extends Controller
{
    public function showAgendaSidSkripOperatorForm()
    {
        return view('agenda_sidang_skripsi_operator');
    }
}
