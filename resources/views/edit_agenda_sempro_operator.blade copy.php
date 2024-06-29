@extends('app_adminkit_operator')

@section('content-edit_agenda_sempro_operator')
<div class="">
	<div class="row">
		<div class="col-12">
			<div class="">
				<div class="col-12 col-md-12">
					<h1 class="h3 mb-3 mt-4"><b>Edit Jadwal Agenda Seminar Proposal</b></h1>

                    <!-- <form action="{{ route('menambahkan_agenda_seminar_proposal.update', $agendasempro->nama) }}" method="POST">
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
                                <input type="date" class="form-control" id="inputTanggal" name="tanggal"autocomplete="off">
                                @error('tanggal')
                                    <small>{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="inputWaktu" class="col-sm-2 col-form-label">Waktu *</label>
                            <div class="col-sm-10">
                                <input type="time" class="form-control" id="inputWaktu" name="waktu"autocomplete="off">
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
                                    <option value="Achmad Maududie ST, M.Sc.">Achmad Maududie ST, M.Sc.</option>
                                    <option value="Anang Andrianto ST.,MT">Anang Andrianto ST.,MT</option>
                                    <option value="Beny Prasetyo S.Kom., M.Kom">Beny Prasetyo S.Kom., M.Kom</option>
                                    <option value="Diah Ayu Retnani Wulandari S.T.,M.Eng">Diah Ayu Retnani Wulandari S.T.,M.Eng</option>
                                    <option value="Diksy Media Firmansyah S.Kom., M.Kom">Diksy Media Firmansyah S.Kom., M.Kom</option>
                                    <option value="Dr Dwiretno Istiyadi Swasono ST.,M.Kom.">Dr Dwiretno Istiyadi Swasono ST.,M.Kom.</option>
                                    <option value="Dwi Wijonarko S.Kom., M.Kom.">Dwi Wijonarko S.Kom., M.Kom.</option>
                                    <option value="Fahrobby Adnan S.Kom., M.MSI">Fahrobby Adnan S.Kom., M.MSI</option>
                                    <option value="Fajrin Nurman Arifin S.T., M.Eng.">Fajrin Nurman Arifin S.T., M.Eng.</option>
                                    <option value="GAMA WISNU FAJARIANTO S.Kom., M.Kom.">GAMA WISNU FAJARIANTO S.Kom., M.Kom.</option>
                                    <option value="Gayatri Dwi Santika S.SI., M.Kom">Gayatri Dwi Santika S.SI., M.Kom</option>
                                    <option value="Harry Soepandi S.Kom., M.Kom.">Harry Soepandi S.Kom., M.Kom.</option>
                                    <option value="Januar Adi Putra S.Kom., M.Kom">Januar Adi Putra S.Kom., M.Kom</option>
                                    <option value="Karina Nine Amalia, S.Kom., M.Kom.">Karina Nine Amalia, S.Kom., M.Kom.</option>
                                    <option value="Maliatul Fitriyasari M.Sc.">Maliatul Fitriyasari M.Sc.</option>
                                    <option value="Mohammad Zarkasi, S.Kom., M.Kom.">Mohammad Zarkasi, S.Kom., M.Kom.</option>
                                    <option value="Muhamad Arief Hidayat S.Kom,.M.Kom.">Muhamad Arief Hidayat S.Kom,.M.Kom.</option>
                                    <option value="Muhammad `Ariful Furqon, S.Pd., M.Kom.">Muhammad `Ariful Furqon, S.Pd., M.Kom.</option>
                                    <option value="Nelly Oktavia Adiwijaya S.Si.,MT.">Nelly Oktavia Adiwijaya S.Si.,MT.</option>
                                    <option value="Nova El Maidah S.Si., M.Cs.">Nova El Maidah S.Si., M.Cs.</option>
                                    <option value="Oktalia Juwita S.Kom., M.MT">Oktalia Juwita S.Kom., M.MT</option>
                                    <option value="Priza Pandunata S.Kom., M.Sc.">Priza Pandunata S.Kom., M.Sc.</option>
                                    <option value="Prof. Dr. Saiful Bukhori ST., M.Kom">Prof. Dr. Saiful Bukhori ST., M.Kom</option>
                                    <option value="Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.">Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.</option>
                                    <option value="Prof. Drs. Slamin, M.Comp.Sc., Ph.D.">Prof. Drs. Slamin, M.Comp.Sc., Ph.D.</option>
                                    <option value="Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.">Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.</option>
                                    <option value="Tio Dharmawan S.Kom., M.Kom">Tio Dharmawan S.Kom., M.Kom</option>
                                    <option value="Tri Agustina Nugrahani, S.Kom., M.Kom.">Tri Agustina Nugrahani, S.Kom., M.Kom.</option>
                                    <option value="Windi Eka Yulia Retnani S.Kom.,MT.">Windi Eka Yulia Retnani S.Kom.,MT.</option>
                                    <option value="Yanuar Nurdiansyah, ST,.M.Cs.">Yanuar Nurdiansyah, ST,.M.Cs.</option>
                                    <option value="Yudha Alif Auliya S.Kom., M.Kom.">Yudha Alif Auliya S.Kom., M.Kom.</option>
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
                                    <option value="Achmad Maududie ST, M.Sc.">Achmad Maududie ST, M.Sc.</option>
                                    <option value="Anang Andrianto ST.,MT">Anang Andrianto ST.,MT</option>
                                    <option value="Beny Prasetyo S.Kom., M.Kom">Beny Prasetyo S.Kom., M.Kom</option>
                                    <option value="Diah Ayu Retnani Wulandari S.T.,M.Eng">Diah Ayu Retnani Wulandari S.T.,M.Eng</option>
                                    <option value="Diksy Media Firmansyah S.Kom., M.Kom">Diksy Media Firmansyah S.Kom., M.Kom</option>
                                    <option value="Dr Dwiretno Istiyadi Swasono ST.,M.Kom.">Dr Dwiretno Istiyadi Swasono ST.,M.Kom.</option>
                                    <option value="Dwi Wijonarko S.Kom., M.Kom.">Dwi Wijonarko S.Kom., M.Kom.</option>
                                    <option value="Fahrobby Adnan S.Kom., M.MSI">Fahrobby Adnan S.Kom., M.MSI</option>
                                    <option value="Fajrin Nurman Arifin S.T., M.Eng.">Fajrin Nurman Arifin S.T., M.Eng.</option>
                                    <option value="GAMA WISNU FAJARIANTO S.Kom., M.Kom.">GAMA WISNU FAJARIANTO S.Kom., M.Kom.</option>
                                    <option value="Gayatri Dwi Santika S.SI., M.Kom">Gayatri Dwi Santika S.SI., M.Kom</option>
                                    <option value="Harry Soepandi S.Kom., M.Kom.">Harry Soepandi S.Kom., M.Kom.</option>
                                    <option value="Januar Adi Putra S.Kom., M.Kom">Januar Adi Putra S.Kom., M.Kom</option>
                                    <option value="Karina Nine Amalia, S.Kom., M.Kom.">Karina Nine Amalia, S.Kom., M.Kom.</option>
                                    <option value="Maliatul Fitriyasari M.Sc.">Maliatul Fitriyasari M.Sc.</option>
                                    <option value="Mohammad Zarkasi, S.Kom., M.Kom.">Mohammad Zarkasi, S.Kom., M.Kom.</option>
                                    <option value="Muhamad Arief Hidayat S.Kom,.M.Kom.">Muhamad Arief Hidayat S.Kom,.M.Kom.</option>
                                    <option value="Muhammad `Ariful Furqon, S.Pd., M.Kom.">Muhammad `Ariful Furqon, S.Pd., M.Kom.</option>
                                    <option value="Nelly Oktavia Adiwijaya S.Si.,MT.">Nelly Oktavia Adiwijaya S.Si.,MT.</option>
                                    <option value="Nova El Maidah S.Si., M.Cs.">Nova El Maidah S.Si., M.Cs.</option>
                                    <option value="Oktalia Juwita S.Kom., M.MT">Oktalia Juwita S.Kom., M.MT</option>
                                    <option value="Priza Pandunata S.Kom., M.Sc.">Priza Pandunata S.Kom., M.Sc.</option>
                                    <option value="Prof. Dr. Saiful Bukhori ST., M.Kom">Prof. Dr. Saiful Bukhori ST., M.Kom</option>
                                    <option value="Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.">Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.</option>
                                    <option value="Prof. Drs. Slamin, M.Comp.Sc., Ph.D.">Prof. Drs. Slamin, M.Comp.Sc., Ph.D.</option>
                                    <option value="Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.">Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.</option>
                                    <option value="Tio Dharmawan S.Kom., M.Kom">Tio Dharmawan S.Kom., M.Kom</option>
                                    <option value="Tri Agustina Nugrahani, S.Kom., M.Kom.">Tri Agustina Nugrahani, S.Kom., M.Kom.</option>
                                    <option value="Windi Eka Yulia Retnani S.Kom.,MT.">Windi Eka Yulia Retnani S.Kom.,MT.</option>
                                    <option value="Yanuar Nurdiansyah, ST,.M.Cs.">Yanuar Nurdiansyah, ST,.M.Cs.</option>
                                    <option value="Yudha Alif Auliya S.Kom., M.Kom.">Yudha Alif Auliya S.Kom., M.Kom.</option>
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
                                    <option value="Achmad Maududie ST, M.Sc.">Achmad Maududie ST, M.Sc.</option>
                                    <option value="Anang Andrianto ST.,MT">Anang Andrianto ST.,MT</option>
                                    <option value="Beny Prasetyo S.Kom., M.Kom">Beny Prasetyo S.Kom., M.Kom</option>
                                    <option value="Diah Ayu Retnani Wulandari S.T.,M.Eng">Diah Ayu Retnani Wulandari S.T.,M.Eng</option>
                                    <option value="Diksy Media Firmansyah S.Kom., M.Kom">Diksy Media Firmansyah S.Kom., M.Kom</option>
                                    <option value="Dr Dwiretno Istiyadi Swasono ST.,M.Kom.">Dr Dwiretno Istiyadi Swasono ST.,M.Kom.</option>
                                    <option value="Dwi Wijonarko S.Kom., M.Kom.">Dwi Wijonarko S.Kom., M.Kom.</option>
                                    <option value="Fahrobby Adnan S.Kom., M.MSI">Fahrobby Adnan S.Kom., M.MSI</option>
                                    <option value="Fajrin Nurman Arifin S.T., M.Eng.">Fajrin Nurman Arifin S.T., M.Eng.</option>
                                    <option value="GAMA WISNU FAJARIANTO S.Kom., M.Kom.">GAMA WISNU FAJARIANTO S.Kom., M.Kom.</option>
                                    <option value="Gayatri Dwi Santika S.SI., M.Kom">Gayatri Dwi Santika S.SI., M.Kom</option>
                                    <option value="Harry Soepandi S.Kom., M.Kom.">Harry Soepandi S.Kom., M.Kom.</option>
                                    <option value="Januar Adi Putra S.Kom., M.Kom">Januar Adi Putra S.Kom., M.Kom</option>
                                    <option value="Karina Nine Amalia, S.Kom., M.Kom.">Karina Nine Amalia, S.Kom., M.Kom.</option>
                                    <option value="Maliatul Fitriyasari M.Sc.">Maliatul Fitriyasari M.Sc.</option>
                                    <option value="Mohammad Zarkasi, S.Kom., M.Kom.">Mohammad Zarkasi, S.Kom., M.Kom.</option>
                                    <option value="Muhamad Arief Hidayat S.Kom,.M.Kom.">Muhamad Arief Hidayat S.Kom,.M.Kom.</option>
                                    <option value="Muhammad `Ariful Furqon, S.Pd., M.Kom.">Muhammad `Ariful Furqon, S.Pd., M.Kom.</option>
                                    <option value="Nelly Oktavia Adiwijaya S.Si.,MT.">Nelly Oktavia Adiwijaya S.Si.,MT.</option>
                                    <option value="Nova El Maidah S.Si., M.Cs.">Nova El Maidah S.Si., M.Cs.</option>
                                    <option value="Oktalia Juwita S.Kom., M.MT">Oktalia Juwita S.Kom., M.MT</option>
                                    <option value="Priza Pandunata S.Kom., M.Sc.">Priza Pandunata S.Kom., M.Sc.</option>
                                    <option value="Prof. Dr. Saiful Bukhori ST., M.Kom">Prof. Dr. Saiful Bukhori ST., M.Kom</option>
                                    <option value="Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.">Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.</option>
                                    <option value="Prof. Drs. Slamin, M.Comp.Sc., Ph.D.">Prof. Drs. Slamin, M.Comp.Sc., Ph.D.</option>
                                    <option value="Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.">Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.</option>
                                    <option value="Tio Dharmawan S.Kom., M.Kom">Tio Dharmawan S.Kom., M.Kom</option>
                                    <option value="Tri Agustina Nugrahani, S.Kom., M.Kom.">Tri Agustina Nugrahani, S.Kom., M.Kom.</option>
                                    <option value="Windi Eka Yulia Retnani S.Kom.,MT.">Windi Eka Yulia Retnani S.Kom.,MT.</option>
                                    <option value="Yanuar Nurdiansyah, ST,.M.Cs.">Yanuar Nurdiansyah, ST,.M.Cs.</option>
                                    <option value="Yudha Alif Auliya S.Kom., M.Kom.">Yudha Alif Auliya S.Kom., M.Kom.</option>
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
                                    <option value="Achmad Maududie ST, M.Sc.">Achmad Maududie ST, M.Sc.</option>
                                    <option value="Anang Andrianto ST.,MT">Anang Andrianto ST.,MT</option>
                                    <option value="Beny Prasetyo S.Kom., M.Kom">Beny Prasetyo S.Kom., M.Kom</option>
                                    <option value="Diah Ayu Retnani Wulandari S.T.,M.Eng">Diah Ayu Retnani Wulandari S.T.,M.Eng</option>
                                    <option value="Diksy Media Firmansyah S.Kom., M.Kom">Diksy Media Firmansyah S.Kom., M.Kom</option>
                                    <option value="Dr Dwiretno Istiyadi Swasono ST.,M.Kom.">Dr Dwiretno Istiyadi Swasono ST.,M.Kom.</option>
                                    <option value="Dwi Wijonarko S.Kom., M.Kom.">Dwi Wijonarko S.Kom., M.Kom.</option>
                                    <option value="Fahrobby Adnan S.Kom., M.MSI">Fahrobby Adnan S.Kom., M.MSI</option>
                                    <option value="Fajrin Nurman Arifin S.T., M.Eng.">Fajrin Nurman Arifin S.T., M.Eng.</option>
                                    <option value="GAMA WISNU FAJARIANTO S.Kom., M.Kom.">GAMA WISNU FAJARIANTO S.Kom., M.Kom.</option>
                                    <option value="Gayatri Dwi Santika S.SI., M.Kom">Gayatri Dwi Santika S.SI., M.Kom</option>
                                    <option value="Harry Soepandi S.Kom., M.Kom.">Harry Soepandi S.Kom., M.Kom.</option>
                                    <option value="Januar Adi Putra S.Kom., M.Kom">Januar Adi Putra S.Kom., M.Kom</option>
                                    <option value="Karina Nine Amalia, S.Kom., M.Kom.">Karina Nine Amalia, S.Kom., M.Kom.</option>
                                    <option value="Maliatul Fitriyasari M.Sc.">Maliatul Fitriyasari M.Sc.</option>
                                    <option value="Mohammad Zarkasi, S.Kom., M.Kom.">Mohammad Zarkasi, S.Kom., M.Kom.</option>
                                    <option value="Muhamad Arief Hidayat S.Kom,.M.Kom.">Muhamad Arief Hidayat S.Kom,.M.Kom.</option>
                                    <option value="Muhammad `Ariful Furqon, S.Pd., M.Kom.">Muhammad `Ariful Furqon, S.Pd., M.Kom.</option>
                                    <option value="Nelly Oktavia Adiwijaya S.Si.,MT.">Nelly Oktavia Adiwijaya S.Si.,MT.</option>
                                    <option value="Nova El Maidah S.Si., M.Cs.">Nova El Maidah S.Si., M.Cs.</option>
                                    <option value="Oktalia Juwita S.Kom., M.MT">Oktalia Juwita S.Kom., M.MT</option>
                                    <option value="Priza Pandunata S.Kom., M.Sc.">Priza Pandunata S.Kom., M.Sc.</option>
                                    <option value="Prof. Dr. Saiful Bukhori ST., M.Kom">Prof. Dr. Saiful Bukhori ST., M.Kom</option>
                                    <option value="Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.">Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc., Ph.D.</option>
                                    <option value="Prof. Drs. Slamin, M.Comp.Sc., Ph.D.">Prof. Drs. Slamin, M.Comp.Sc., Ph.D.</option>
                                    <option value="Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.">Qurrota A'yuni Ar Ruhimat S.Pd., M.Sc.</option>
                                    <option value="Tio Dharmawan S.Kom., M.Kom">Tio Dharmawan S.Kom., M.Kom</option>
                                    <option value="Tri Agustina Nugrahani, S.Kom., M.Kom.">Tri Agustina Nugrahani, S.Kom., M.Kom.</option>
                                    <option value="Windi Eka Yulia Retnani S.Kom.,MT.">Windi Eka Yulia Retnani S.Kom.,MT.</option>
                                    <option value="Yanuar Nurdiansyah, ST,.M.Cs.">Yanuar Nurdiansyah, ST,.M.Cs.</option>
                                    <option value="Yudha Alif Auliya S.Kom., M.Kom.">Yudha Alif Auliya S.Kom., M.Kom.</option>
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
                    </form> -->
				</div>
			</div>
		</div>
	</div>
</div>

@endsection