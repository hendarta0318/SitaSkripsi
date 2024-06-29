@extends('app_adminkit_mahasiswa')
<!-- mahasiswa -->
@section('content-agenda_seminar_proposal')
<div class="main-content">
    <div class="">
        <div class="col-12 col-md-11">
            <h1 class="h3 mb-3 mt-4"><b>Agenda Seminar Proposal</b></h1>
            <div class="col-12">
                <div class="card card-clickable" data-url="your-link-here">
                    <div class="card-body bg-white">
                        <h6 class="card-title mb-0 text-primary">Tgl</h6>
                        <h4 class="card-title mb-0 text-dark">Nama</h4>
                        <h6 class="card-title mb-0 text-dark">Judul Skripsi</h6>
                    </div>
                </div>
                <div class="card card-clickable" data-url="your-link-here">
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

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.card-clickable').forEach(function(card) {
            card.addEventListener('click', function() {
                window.location.href = card.getAttribute('data-url');
            });
        });
    });
</script>
@endsection
