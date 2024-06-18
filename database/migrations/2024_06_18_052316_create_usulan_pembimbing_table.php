<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usulan_pembimbing', function (Blueprint $table) {
            $table->id();
            $table->string('nim');
            $table->string('nama');
            $table->string('judul');
            $table->text('rumusan_masalah');
            $table->string('topik1');
            $table->string('topik2');
            $table->string('dosen_pembimbing1');
            $table->string('dosen_pembimbing2');
            $table->string('draf_proposal');
            $table->string('krs_berjalan');
            $table->string('form_persetujuan');
            $table->string('no_wa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usulan_pembimbing');
    }
};