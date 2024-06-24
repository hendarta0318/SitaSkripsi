<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SidangSkripsi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SidangSkripsiController extends Controller
{
    public function showSidangSkripsiForm()
    {
        return view('sidang_skripsi');
    }

    public function store(Request $request)
    {  
        // dd($request->all());
        $validate = Validator::make ($request->all(),[
           'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'rumusan_masalah' => 'required|string',
            'topik1' => 'required|string|max:255',
            'topik2' => 'required|string|max:255',
            'dosen_pembimbing1' => 'required|string|max:255',
            'dosen_pembimbing2' => 'required|string|max:255',
            'proposal_acc' => 'required|file|mimes:pdf|max:2048',
            'no_wa' => 'required|string|max:255',
        ]);

        if($validate->fails()) return redirect()->back()->withInput()->withErrors($validate);

        $proposalAccPath = $request->file('proposal_acc')->store('seminar_proposal');

        SidangSkripsi::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'judul' => $request->judul,
            'rumusan_masalah' => $request->rumusan_masalah,
            'topik1' => $request->topik1,
            'topik2' => $request->topik2,
            'dosen_pembimbing1' => $request->dosen_pembimbing1,
            'dosen_pembimbing2' => $request->dosen_pembimbing2,
            'proposal_acc_path' => $proposalAccPath,
            'no_wa' => $request->no_wa,
        ]);

        return redirect()->route('dashboard_mahasiswa');
    }
}
