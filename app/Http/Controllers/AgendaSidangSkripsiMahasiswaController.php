<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\MenambahkanAgendaSidangSkripsiOperator;

class AgendaSidangSkripsiMahasiswaController extends Controller
{
    public function showAgendaSidSkripForm()
    {
        $data = MenambahkanAgendaSidangSkripsiOperator::select('id', 'tanggal', 'nama', 'judul')->paginate();
        return view('agenda_sidang_skripsi_mahasiswa', compact('data'));
    }

    public function show($id)
    {
        $agendasidangskripsi = MenambahkanAgendaSidangSkripsiOperator::findOrFail($id);
        return view('detail_agenda_sidang_skripsi_mahasiswa', compact('agendasidangskripsi'));
    }
}
