<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeminarProposalController extends Controller
{
    public function showSeminarProposalForm()
    {
        return view('seminar_proposal');
    }
}
