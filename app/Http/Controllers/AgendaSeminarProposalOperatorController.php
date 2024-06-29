<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\MenambahkanAgendaSemproOperator;

class AgendaSeminarProposalOperatorController extends Controller
{
    public function showAgendaSemproOperatorForm()
    {
        $data = MenambahkanAgendaSemproOperator::select('id', 'tanggal', 'nama', 'judul')->paginate();
        return view('agenda_seminar_proposal_operator', compact('data'));
    }

    public function showMenambahSemproOperatorForm()
    {
        return view('menambahkan_agenda_sempro_operator');
    }

    public function store(Request $request)
    {  
        // dd($request->all());
        $validate = Validator::make ($request->all(),[
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

        if($validate->fails()) return redirect()->back()->withInput()->withErrors($validate);

        MenambahkanAgendaSemproOperator::create([
            'nama' => $request->nama,
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'tempat' => $request->tempat,
            'linkzoom' => $request->linkzoom,
            'judul' => $request->judul,
            'dosen_pembimbing1' => $request->dosen_pembimbing1,
            'dosen_pembimbing2' => $request->dosen_pembimbing2,
            'penguji1' => $request->penguji1,
            'penguji2' => $request->penguji2,
        ]);

        return redirect('agenda_seminar_proposal_operator')->with('success', 'Agenda seminar proposal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $agendasempro = MenambahkanAgendaSemproOperator::findOrFail($id);
        return view('edit_agenda', compact('agendasempro'));
    }


    public function update(Request $request, $id)
    {
        // dd($request->all());
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

        // if ($validate->fails()) return redirect()->back()->withInput()->withErrors($validate);

        $agendasempro = MenambahkanAgendaSemproOperator::findOrFail($id);
        $agendasempro->update($request->all());

        return redirect('agenda_seminar_proposal_operator')->with('success', 'Agenda seminar proposal berhasil diupdate.');
    }

    public function destroy($id)
    {
        $agendasempro = MenambahkanAgendaSemproOperator::findOrFail($id);
        $agendasempro->delete();

        return redirect('agenda_seminar_proposal_operator')->with('success', 'Agenda seminar proposal berhasil dihapus.');
    }

    public function show($id)
    {
        $agendasempro = MenambahkanAgendaSemproOperator::findOrFail($id);
        return view('detail_agenda', compact('agendasempro'));
    }
}
