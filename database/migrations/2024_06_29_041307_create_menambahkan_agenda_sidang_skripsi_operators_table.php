<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('menambahkan_agenda_sidang_skripsi_operators', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->date('tanggal');
            $table->time('waktu');
            $table->string('tempat');
            $table->string('linkzoom');
            $table->string('judul');
            $table->string('dosen_pembimbing1');
            $table->string('dosen_pembimbing2');
            $table->string('penguji1');
            $table->string('penguji2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('menambahkan_agenda_sidang_skripsi_operators');
    }

};
