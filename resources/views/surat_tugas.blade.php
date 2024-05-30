@extends('app_adminkit_mahasiswa')

@section('content-surat_tugas')
<div class="">
    <h1 class="h3 mb-3 mt-4"><b>Surat Tugas</b></h1>
    <div class="mb-3 row">
        <label for="formFile" class="col-sm-2 col-form-label">Surat Tugas Dosen Pembimbing</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile">
            <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="formFile" class="col-sm-2 col-form-label">Surat Tugas Seminar Proposal</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile">
            <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
        </div>
    </div>

     <div class="mb-3 row">
        <label for="formFile" class="col-sm-2 col-form-label">Surat Tugas Sidang Skripsi</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile">
            <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </div>
</div>
@endsection