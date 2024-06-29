<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenambahSidSkripOperatorController extends Controller
{
    public function showMenambahSidSkripOperatorForm()
    {
        return view('menambahkan_agenda_sidskrip_operator');
    }
}
