@extends('app_adminkit_mahasiswa')

@section('content-usulan_pembimbing')
<div class="">
    <h1 class="h3 mb-3 mt-4"><b>Usulan Pembimbing</b></h1>

    <form action="{{ route('usulan-pembimbing.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNIM" name="nim">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" name="nama">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul *</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputJudul" name="judul">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="floatingTextarea" class="col-sm-2 col-form-label">Rumusan Masalah *</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="floatingTextarea" name="rumusan_masalah" style="height: 100px"></textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="topik1" class="col-sm-2 col-form-label">Topik #1 *</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="topik1" name="topik1">
                    <option selected>-</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen Proyek">Manajemen Proyek</option>
                    <option value="Analisis Data">Analisis Data</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="topik2" class="col-sm-2 col-form-label">Topik #2 *</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="topik2" name="topik2">
                    <option selected>-</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Manajemen Proyek">Manajemen Proyek</option>
                    <option value="Analisis Data">Analisis Data</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="dosen_pembimbing1" class="col-sm-2 col-form-label">Dosen Pembimbing #1 *</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="dosen_pembimbing1" name="dosen_pembimbing1">
                    <option selected>-</option>
                    <option value="Dr. Jane Smith">Dr. Jane Smith</option>
                    <option value="Prof. John Brown">Prof. John Brown</option>
                    <option value="Dr. Emily White">Dr. Emily White</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="dosen_pembimbing2" class="col-sm-2 col-form-label">Dosen Pembimbing #2 *</label>
            <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example" id="dosen_pembimbing2" name="dosen_pembimbing2">
                    <option selected>-</option>
                    <option value="Dr. Jane Smith">Dr. Jane Smith</option>
                    <option value="Prof. John Brown">Prof. John Brown</option>
                    <option value="Dr. Emily White">Dr. Emily White</option>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="drafProposal" class="col-sm-2 col-form-label">Draf Proposal *</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="drafProposal" name="draf_proposal">
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="krsBerjalan" class="col-sm-2 col-form-label">KRS Berjakan *</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="krsBerjalan" name="krs_berjalan">
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="formPersetujuan" class="col-sm-2 col-form-label">Form Persetujuan Calon Dosen Pembimbing *</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formPersetujuan" name="form_persetujuan">
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNoWA" class="col-sm-2 col-form-label">No. WA Aktif *</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNoWA" name="no_wa">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>
@endsection
