<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\MenambahkanAgendaSemproOperator;

class AgendaSeminarProposalMahasiswaController extends Controller
{
    public function showAgendaSemproForm()
    {
        $data = MenambahkanAgendaSemproOperator::select('id', 'tanggal', 'nama', 'judul')->paginate();
        return view('agenda_seminar_proposal_mahasiswa', compact('data'));
    }

    public function show($id)
    {
        $agendasempro = MenambahkanAgendaSemproOperator::findOrFail($id);
        return view('detail_agenda_sempro_mahasiswa', compact('agendasempro'));
    }
}
