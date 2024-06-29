@extends('app_adminkit_mahasiswa')
<!-- mahasiswa -->
@section('content-agenda_seminar_proposal_mahasiswa')
<div class="main-content">
    <div class="">
        <div class="col-12 col-md-11">
            <h1 class="h3 mb-3 mt-4"><b>Agenda Seminar Proposal Mahasiswa</b></h1>
            <div class="col-12">
                @foreach($data as $agendasempro)
                <div class="card card-body">
                    <div class="row">
                        <div class="col-md-9">
                            <p class="tanggal text-primary">{{ $agendasempro->tanggal }}</p>
                            <h5 class="nama text-dark">{{ $agendasempro->nama }}</h5>
                            <p class="judul">{{ $agendasempro->judul }}</p>
                        </div>
                        <div class="col-md-3 actions">
                            <!-- lihat detail informasi -->
                            <a href="{{ route('agenda_seminar_proposal_mahasiswa.show', $agendasempro->id) }}" class="btn btn-primary primary-action mt-4" style="padding-left: 40px; padding-right: 40px;">
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
