<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenambahkanAgendaSemproOperator extends Model
{
    use HasFactory;

    protected $table = 'menambahkan_agenda_sempro_operators';

    protected $fillable = [
        'nama', 
        'tanggal', 
        'waktu', 
        'tempat', 
        'linkzoom', 
        'judul', 
        'dosen_pembimbing1', 
        'dosen_pembimbing2', 
        'penguji1', 
        'penguji2'
    ];
}
