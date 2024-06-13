<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsulanPembimbing;

class UsulanPembimbingController extends Controller
{
    public function store(Request $request)
    {
        // Validasi inputan user
        $request->validate([
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

        // Simpan file
        $drafProposalPath = $request->file('draf_proposal')->store('proposals');
        $krsBerjalanPath = $request->file('krs_berjalan')->store('krs');
        $formPersetujuanPath = $request->file('form_persetujuan')->store('persetujuan');

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

        // Redirect atau response sesuai kebutuhan
        return redirect()->back()->with('success', 'Usulan pembimbing berhasil disimpan.');
    }
}
