@extends('app_adminkit_operator')
<!-- operator -->
@section('content-agenda_sidang_skripsi_operator')
<div class="main-content">
    <div class="">
        <div class="col-12 col-md-11">
            <div class="row">
                <div class="col-lg-9 col-sm-5 d-flex">
                    <h1 class="h3 mb-3 mt-4"><b>Agenda Sidang Skripsi Operator</b></h1>
                </div>

                <div class="col-lg-3 col-sm-7 d-flex align-items-center justify-content-end">
                    <a href="{{ route('menambahkan_agenda_sidang_skripsi_operator') }}" class="btn btn-info mt-2">
                    Add <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus" style="width: 25px; height: 25px; margin-bottom: 1px; margin-left: 3px"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                    <a href="{{ route('beranda_operator') }}" class="btn btn-secondary mt-2">Kembali</a>
                </div>
            </div>
            <div class="col-12 mt-4">
               <div class="container">
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
                                <a href="{{ route('menambahkan_agenda_sidang_skripsi.show', $agendasidangskripsi->id) }}" class="btn btn-primary primary-action" style="padding-left: 40px; padding-right: 40px;">
                                    Lihat Detail Informasi
                                </a>

                                <div class="secondary-actions">
                                    <!-- edit -->
                                    <a href="{{ route('menambahkan_agenda_sidang_skripsi.edit', $agendasidangskripsi->id) }}" class="btn btn-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3" style="width: 15px; height: 15px;"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg>
                                    </a>

                                    <!-- delete -->
                                    <form onsubmit="return confirm('Apakah anda yakin ingin menghapusnya')" action="{{ route('menambahkan_agenda_sidang_skripsi.destroy', $agendasidangskripsi->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2" style="width: 15px; height: 15px;">
                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
