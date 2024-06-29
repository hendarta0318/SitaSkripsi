<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenambahkanAgendaSemproOperator;

class AgendaSeminarProposalOperatorController extends Controller
{
    public function showAgendaSemproOperatorForm()
    {
        $data = MenambahkanAgendaSemproOperator::select('tanggal', 'nama', 'judul')->paginate();
        return view('agenda_seminar_proposal_operator', compact('data'));
    }

    public function edit($nama)
    {
        $agendasempro = MenambahkanAgendaSemproOperator::findOrFail($nama);
        return view('edit_agenda', compact('agendasempro'));
    }

    public function update(Request $request, $nama)
    {
        $validate = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'tempat' => 'required|string|max:255',
            'linkzoom' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'dosen_pembimbing1' => 'required|string|max:255',
            'dosen_pembimbing2' => 'required|string|max:255',
            'penguji1' => 'required|string|max:255',
            'penguji2' => 'required|string|max:255',
        ]);

        if ($validate->fails()) return redirect()->back()->withInput()->withErrors($validate);

        $agendasempro = MenambahkanAgendaSemproOperator::findOrFail($nama);
        $agendasempro->update($request->all());

        return redirect('agenda_seminar_proposal_operator')->with('success', 'Agenda seminar proposal berhasil diperbarui.');
    }
}
