<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SuratTugas;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SuratTugasController extends Controller
{
    public function showSuratTugasForm()
    {
        return view('surat_tugas');
    }
    public function store(Request $request)
    {  
        $validate = Validator::make ($request->all(),[
            'surat_tugas_dospem' => 'required|file|mimes:pdf|max:2048',
            'surat_tugas_sempro' => 'required|file|mimes:pdf|max:2048',
            'surat_tugas_sidang_skripsi' => 'required|file|mimes:pdf|max:2048',
        ]);

        if($validate->fails()) return redirect()->back()->withInput()->withErrors($validate);

        $dospemPath = $request->file('surat_tugas_dospem')->store('surat_tugas');
        $semproPath = $request->file('surat_tugas_sempro')->store('surat_tugas');
        $sidangSkripsiPath = $request->file('surat_tugas_sidang_skripsi')->store('surat_tugas');

        SuratTugas::create([
            'surat_tugas_dospem' => $dospemPath,
            'surat_tugas_sempro' => $semproPath,
            'surat_tugas_sidang_skripsi' => $sidangSkripsiPath,
        ]);

        return redirect()->route('dashboard_mahasiswa');

    }
}
