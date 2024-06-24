@extends('app_adminkit_mahasiswa')

@section('content-agenda_seminar_proposal')
<div class="main-content">
    <div class="">
        <div class="col-12 col-md-9">
            <h1 class="h3 mb-3 mt-4"><b>Agenda Sidang Skripsi</b></h1>
            <div class="col-12">
                <div class="card">
                    <div class="card-body bg-white">
                        <h6 class="card-title mb-0 text-primary">Tgl</h6>
                        <h4 class="card-title mb-0 text-dark">Nama</h4>
                        <h6 class="card-title mb-0 text-dark">Judul Skripsi</h6>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body bg-white">
                        <h6 class="card-title mb-0 text-primary">Tgl</h6>
                        <h4 class="card-title mb-0 text-dark">Nama</h4>
                        <h6 class="card-title mb-0 text-dark">Judul Skripsi</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .main-content {
        padding-top: 10px;
        padding-left: 10px;
    }

    @media (max-width: 768px) {
        .main-content {
            margin-left: 0;
        }
    }
</style>
@endsection
