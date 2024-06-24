<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SidangSkripsi extends Model
{
    use HasFactory;

    protected $table = 'sidang_skripsi';

    protected $fillable = [
        'nim',
        'nama',
        'judul',
        'rumusan_masalah',
        'topik1',
        'topik2',
        'dosen_pembimbing1',
        'dosen_pembimbing2',
        'proposal_acc_path',
        'no_wa',
    ];
}
