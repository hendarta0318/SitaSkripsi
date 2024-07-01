<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\MenambahkanAgendaSidangSkripsiOperator;

class AgendaSidangSkripsiOperatorController extends Controller
{
    public function showAgendaSidSkripOperatorForm()
    {
        $data = MenambahkanAgendaSidangSkripsiOperator::select('id', 'tanggal', 'nama', 'judul')->paginate();
        return view('agenda_sidang_skripsi_operator', compact('data'));
    }

    public function showMenambahSidSkripOperatorForm()
    {
        return view('menambahkan_agenda_sidang_skripsi_operator');
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

        MenambahkanAgendaSidangSkripsiOperator::create([
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

        return redirect('agenda_sidang_skripsi_operator')->with('success', 'Agenda sidang skripsi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $agendasidangskripsi = MenambahkanAgendaSidangSkripsiOperator::findOrFail($id);
        return view('edit_agenda_sidang_skripsi_operator', compact('agendasidangskripsi'));
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

        $agendasidangskripsi = MenambahkanAgendaSidangSkripsiOperator::findOrFail($id);
        $agendasidangskripsi->update($request->all());

        return redirect('agenda_sidang_skripsi_operator')->with('success', 'Agenda sidang skripsi berhasil diupdate.');
    }

    public function destroy($id)
    {
        $agendasidangskripsi = MenambahkanAgendaSidangSkripsiOperator::findOrFail($id);
        $agendasidangskripsi->delete();

        return redirect('agenda_sidang_skripsi_operator')->with('success', 'Agenda sidang skripsi berhasil dihapus.');
    }

    public function show($id)
    {
        $agendasidangskripsi = MenambahkanAgendaSidangSkripsiOperator::findOrFail($id);
        return view('detail_agenda_sidang_skripsi_operator', compact('agendasidangskripsi'));
    }
}
