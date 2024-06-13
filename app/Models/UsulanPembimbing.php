<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsulanPembimbing extends Model
{
    use HasFactory;
     // Nama tabel yang digunakan oleh model ini
    protected $table = 'usulan_pembimbings';

    // Kolom-kolom yang bisa diisi secara massal
    protected $fillable = [
        'nim',
        'nama',
        'judul',
        'rumusan_masalah',
        'topik1',
        'topik2',
        'dosen_pembimbing1',
        'dosen_pembimbing2',
        'draf_proposal',
        'krs_berjalan',
        'form_persetujuan',
        'no_wa',
    ];
}
