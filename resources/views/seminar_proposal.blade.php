@extends('app_adminkit_mahasiswa')

@section('content-seminar_proposal')
<div class="">
    <h1 class="h3 mb-3 mt-4"><b>Seminar Proposal</b></h1>

    <form action="{{ route('seminar-proposal.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNIM" name="nim">
                @error('nim')
                    <small>{{$message}}</small>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" name="nama">
                @error('nama')
                    <small>{{$message}}</small>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputJudul" class="col-sm-2 col-form-label">Judul *</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputJudul" name="judul">
                @error('judul')
                    <small>{{$message}}</small>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="floatingTextarea" class="col-sm-2 col-form-label">Rumusan Masalah *</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="floatingTextarea" name="rumusan_masalah" style="height: 100px"></textarea>
                @error('rumusan_masalah')
                    <small>{{$message}}</small>
                @enderror
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
                @error('topik1')
                    <small>{{$message}}</small>
                @enderror
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
                @error('topik2')
                    <small>{{$message}}</small>
                @enderror
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
                @error('dosen_pembimbing1')
                    <small>{{ $message }}</small>
                @enderror
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
                @error('dosen_pembimbing2')
                    <small>{{$message}}</small>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="formFile" class="col-sm-2 col-form-label">Proposal yang sudah ACC *</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFile" name="proposal_acc">
                @error('proposal_acc')
                    <small>{{ $message }}</small>
                @enderror
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNoWA" class="col-sm-2 col-form-label">No. WA Aktif *</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNoWA" name="no_wa">
                @error('no_wa')
                    <small>{{$message}}</small>
                @enderror
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
