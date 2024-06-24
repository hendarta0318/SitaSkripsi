<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaSeminarProposalController extends Controller
{
    public function showAgendaSemproForm()
    {
        return view('agenda_seminar_proposal');
    }
}
