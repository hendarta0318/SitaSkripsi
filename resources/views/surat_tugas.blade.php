@extends('app_adminkit_mahasiswa')

@section('content-surat_tugas')
<div class="">
    <h1 class="h3 mb-3 mt-4"><b>Surat Tugas</b></h1>
    
    <form action="{{ route('surat_tugas.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="formFileDospem" class="col-sm-2 col-form-label">Surat Tugas Dosen Pembimbing</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFileDospem" name="surat_tugas_dospem">
                @error('surat_tugas_dospem')
                    <small>{{$message}}</small>
                @enderror
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="formFileSempro" class="col-sm-2 col-form-label">Surat Tugas Seminar Proposal</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFileSempro" name="surat_tugas_sempro">
                @error('surat_tugas_sempro')
                    <small>{{$message}}</small>
                @enderror
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="formFileSidang" class="col-sm-2 col-form-label">Surat Tugas Sidang Skripsi</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formFileSidang" name="surat_tugas_sidang_skripsi">
                @error('surat_tugas_sidang_skripsi')
                    <small>{{$message}}</small>
                @enderror
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
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