@extends('app_adminkit_operator')

@section('content-menambahkan_agenda_sidskrip_operator')
<div class="">
	<div class="row">
		<div class="col-12">
			<div class="">
				<div class="col-12 col-md-12">
					<h1 class="h3 mb-3 mt-4"><b>Menambah Jadwal Agenda Sidang Skripsi</b></h1>

                    <form action="{{ route('seminar-proposal.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label for="inputNama" class="col-sm-2 col-form-label">Nama Mahasiswa *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputNama" name="nama"autocomplete="off">
                                @error('nama')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputTanggal" class="col-sm-2 col-form-label">Tanggal *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTanggal" name="tanggal"autocomplete="off">
                                @error('tanggal')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputWaktu" class="col-sm-2 col-form-label">Waktu *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputWaktu" name="waktu"autocomplete="off">
                                @error('waktu')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputTempat" class="col-sm-2 col-form-label">Tempat *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputTempat" name="tempat"autocomplete="off">
                                @error('tempat')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputLinkZoom" class="col-sm-2 col-form-label">Link Zoom *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputLinkZoom" name="linkzoom"autocomplete="off">
                                @error('linkzoom')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputJudul" class="col-sm-2 col-form-label">Judul *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputJudul" name="judul"autocomplete="off">
                                @error('judul')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="dosen_pembimbing1" class="col-sm-2 col-form-label">Dosen Pembimbing #1 *</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" id="dosen_pembimbing1" name="dosen_pembimbing1">
                                    <option selected>-</option>
                                    <option value="Dr. Rico">Dr. Rico</option>
                                    <option value="Prof. Lucky">Prof. Lucky</option>
                                    <option value="Dr. Emely">Dr. Emely</option>
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
                                    <option value="Dr. Rico">Dr. Rico</option>
                                    <option value="Prof. Lucky">Prof. Lucky</option>
                                    <option value="Dr. Emely">Dr. Emely</option>
                                </select>
                                @error('dosen_pembimbing2')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="penguji1" class="col-sm-2 col-form-label">Penguji #1 *</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" id="penguji1" name="penguji1">
                                    <option selected>-</option>
                                    <option value="Dr. Rico">Dr. Rico</option>
                                    <option value="Prof. Lucky">Prof. Lucky</option>
                                    <option value="Dr. Emely">Dr. Emely</option>
                                </select>
                                @error('penguji1')
                                    <small>{{ $message }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="penguji2" class="col-sm-2 col-form-label">Penguji #2 *</label>
                            <div class="col-sm-10">
                                <select class="form-select" aria-label="Default select example" id="penguji2" name="penguji2">
                                    <option selected>-</option>
                                    <option value="Dr. Rico">Dr. Rico</option>
                                    <option value="Prof. Lucky">Prof. Lucky</option>
                                    <option value="Dr. Emely">Dr. Emely</option>
                                </select>
                                @error('penguji2')
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
			</div>
		</div>
	</div>
</div>

@endsection