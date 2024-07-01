@extends('app_adminkit_mahasiswa')
<!-- mahasiswa -->
@section('content-agenda_sidang_skripsi_mahasiswa')
<div class="main-content">
    <div class="">
        <div class="col-12 col-md-11">
            <div class="row">
                <div class="col-lg-9 col-sm-5 d-flex">
                    <h1 class="h3 mb-3 mt-4"><b>Agenda Sidang Skripsi Mahasiswa</b></h1>
                </div>

                <div class="col-lg-3 col-sm-7 d-flex align-items-center justify-content-end">
                    <a href="{{ route('beranda_mahasiswa') }}" class="btn btn-secondary mt-2">Kembali</a>
                </div>
            </div>
            <div class="col-12 mt-4">
                @foreach($data as $agendasidangskripsi)
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="tanggal text-primary">{{ $agendasidangskripsi->tanggal }}</p>
                            <h5 class="nama text-dark">{{ $agendasidangskripsi->nama }}</h5>
                            <p class="judul">{{ $agendasidangskripsi->judul }}</p>
                        </div>
                        <div class="col-md-3 actions">
                            <!-- lihat detail informasi -->
                            <a href="{{ route('agenda_sidang_skripsi_mahasiswa.show', $agendasidangskripsi->id) }}" class="btn btn-primary primary-action mt-4" style="padding-left: 40px; padding-right: 40px;">
                                Lihat Detail Informasi
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<style>
    .main-content {
        padding-top: 10px;
        padding-left: 10px;
    }
    .card-clickable {
        cursor: pointer;
    }

    .card-clickable:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
        }
    }
</style>
@endsection
