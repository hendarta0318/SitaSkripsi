@extends('app_adminkit_mahasiswa')

@section('content-seminar_proposal')
<div class="">
    <h1 class="h3 mb-3 mt-4"><b>Seminar Proposal</b></h1>

    <div class="mb-3 row">
        <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNIM">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNama">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputJudul" class="col-sm-2 col-form-label">Judul *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputJudul">
        </div>
    </div>

    <div class="mb-3 row">
        <label for="floatingTextarea" class="col-sm-2 col-form-label">Rumusan Masalah *</label>
        <div class="col-sm-10">
            <textarea class="form-control" id="floatingTextarea" style="height: 100px"></textarea>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="form-selected" class="col-sm-2 col-form-label">Topik #1 *</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="form-selected">
                <option selected>-</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="form-selected" class="col-sm-2 col-form-label">Topik #2 *</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="form-selected">
                <option selected>-</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="form-selected" class="col-sm-2 col-form-label">Dosen Pembimbing #1 *</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="form-selected">
                <option selected>-</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="form-selected" class="col-sm-2 col-form-label">Dosen Pembimbing #2 *</label>
        <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example" id="form-selected">
                <option selected>-</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="formFile" class="col-sm-2 col-form-label">Proposal yang sudah ACC *</label>
        <div class="col-sm-10">
            <input class="form-control" type="file" id="formFile">
            <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
        </div>
    </div>

    <div class="mb-3 row">
        <label for="inputNoWA" class="col-sm-2 col-form-label">No. WA Aktif *</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputNoWA">
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