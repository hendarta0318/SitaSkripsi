<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratTugas extends Model
{
    use HasFactory;

    protected $table = 'surat_tugas';

    protected $fillable = [
        'surat_tugas_dospem',
        'surat_tugas_sempro',
        'surat_tugas_sidang_skripsi',
    ];
}
