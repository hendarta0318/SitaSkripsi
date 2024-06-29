<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanPembimbing;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UsulanPembimbingController extends Controller
{
    public function showUsulanPembimbingForm()
    {
        return view('usulan_pembimbing');
    }
    public function store(Request $request)
    {
        $validate = Validator::make ($request->all(),[
           'nim' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'judul' => 'required|string|max:255',
            'rumusan_masalah' => 'required|string',
            'topik1' => 'required|string|max:255',
            'topik2' => 'required|string|max:255',
            'dosen_pembimbing1' => 'required|string|max:255',
            'dosen_pembimbing2' => 'required|string|max:255',
            'draf_proposal' => 'required|file|mimes:pdf|max:2048',
            'krs_berjalan' => 'required|file|mimes:pdf|max:2048',
            'form_persetujuan' => 'required|file|mimes:pdf|max:2048',
            'no_wa' => 'required|string|max:255',
        ]);

        if($validate->fails()) return redirect()->back()->withInput()->withErrors($validate);

         $drafProposalPath = $request->file('draf_proposal')->store('usulan_pembimbing');
        $krsBerjalanPath = $request->file('krs_berjalan')->store('usulan_pembimbing');
        $formPersetujuanPath = $request->file('form_persetujuan')->store('usulan_pembimbing');

        // Buat data baru di database
         UsulanPembimbing::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'judul' => $request->judul,
            'rumusan_masalah' => $request->rumusan_masalah,
            'topik1' => $request->topik1,
            'topik2' => $request->topik2,
            'dosen_pembimbing1' => $request->dosen_pembimbing1,
            'dosen_pembimbing2' => $request->dosen_pembimbing2,
            'draf_proposal' => $drafProposalPath,
            'krs_berjalan' => $krsBerjalanPath,
            'form_persetujuan' => $formPersetujuanPath,
            'no_wa' => $request->no_wa,
        ]);

        return redirect()->route('beranda_mahasiswa');
    }
}
