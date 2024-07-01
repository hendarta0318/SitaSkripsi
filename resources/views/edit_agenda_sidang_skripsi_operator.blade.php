@extends('app_adminkit_operator')

@section('content-menambahkan_agenda_sidang_skripsi_operator')
<div class="">
    <div class="row">
        <div class="col-12">
            <div class="">
                <div class="col-12 col-md-12">
                    <h1 class="h3 mb-3 mt-4"><b>Mengedit Jadwal Agenda Sidang Skripsi Operator</b></h1>

                    <form action="{{ route('menambahkan_agenda_sidang_skripsi.update', $agendasidangskripsi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value="{{ $agendasidangskripsi->nama }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tanggal" class="col-sm-2 col-form-label">Tanggal:</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $agendasidangskripsi->tanggal }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="waktu" class="col-sm-2 col-form-label">Waktu:</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="waktu" name="waktu" value="{{ $agendasidangskripsi->waktu }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tempat" class="col-sm-2 col-form-label">Tempat:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tempat" name="tempat" value="{{ $agendasidangskripsi->tempat }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="linkzoom" class="col-sm-2 col-form-label">Link Zoom:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="linkzoom" name="linkzoom" value="{{ $agendasidangskripsi->linkzoom }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" value="{{ $agendasidangskripsi->judul }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="dosen_pembimbing1" class="col-sm-2 col-form-label">Dosen Pembimbing 1:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dosen_pembimbing1" name="dosen_pembimbing1" value="{{ $agendasidangskripsi->dosen_pembimbing1 }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="dosen_pembimbing2" class="col-sm-2 col-form-label">Dosen Pembimbing 2:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="dosen_pembimbing2" name="dosen_pembimbing2" value="{{ $agendasidangskripsi->dosen_pembimbing2 }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="penguji1" class="col-sm-2 col-form-label">Penguji 1:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penguji1" name="penguji1" value="{{ $agendasidangskripsi->penguji1 }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="penguji2" class="col-sm-2 col-form-label">Penguji 2:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penguji2" name="penguji2" value="{{ $agendasidangskripsi->penguji2 }}">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Update</button>
                                <a href="{{ route('agenda_seminar_proposal_operator') }}" class="btn btn-secondary">Kembali</a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
