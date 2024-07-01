@extends('app_adminkit_operator')

@section('content-menambahkan_agenda_sidang_skripsi_operator')
<div class="main-content">
    <div class="container mt-1">
        <div class="card">
            <div class="card-header">
                <h3>Detail Agenda Sidang Skripsi Operator</h3>
            </div>
            <div class="card-body">
                <p><strong>Nama:</strong> {{ $agendasidangskripsi->nama }}</p>
                <p><strong>Tanggal:</strong> {{ $agendasidangskripsi->tanggal }}</p>
                <p><strong>Waktu:</strong> {{ $agendasidangskripsi->waktu }}</p>
                <p><strong>Tempat:</strong> {{ $agendasidangskripsi->tempat }}</p>
                <p><strong>Link Zoom:</strong> {{ $agendasidangskripsi->linkzoom }}</p>
                <p><strong>Judul:</strong> {{ $agendasidangskripsi->judul }}</p>
                <p><strong>Dosen Pembimbing 1:</strong> {{ $agendasidangskripsi->dosen_pembimbing1 }}</p>
                <p><strong>Dosen Pembimbing 2:</strong> {{ $agendasidangskripsi->dosen_pembimbing2 }}</p>
                <p><strong>Penguji 1:</strong> {{ $agendasidangskripsi->penguji1 }}</p>
                <p><strong>Penguji 2:</strong> {{ $agendasidangskripsi->penguji2 }}</p>
                <a href="{{ route('agenda_sidang_skripsi_operator') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>

<style>
    .main-content {
        padding-top: 10px;
        padding-left: 10px;
    }

    .card {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        border: none;
        border-radius: 8px;
    }

    .card-header {
        background-color: #007bff;
        color: white;
        border-top-left-radius: 8px;
        border-top-right-radius: 8px;
    }

    .card-body {
        font-size: 16px;
    }

    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>
@endsection
