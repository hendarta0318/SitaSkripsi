@extends('app_adminkit_mahasiswa')

@section('content-usulan_pembimbing')
<div class="">
    <h1 class="h3 mb-3 mt-4"><b>Usulan Pembimbing</b></h1>

    <form action="{{ route('usulan-pembimbing.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 row">
            <label for="inputNIM" class="col-sm-2 col-form-label">NIM</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNIM" name="nim"autocomplete="off">
                @error('nim')
                    <small>{{$message}}</small>
                @enderror
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNama" name="nama"autocomplete="off">
                @error('nama')
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
            <label for="floatingTextarea" class="col-sm-2 col-form-label">Rumusan Masalah *</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="floatingTextarea" name="rumusan_masalah" autocomplete="off" style="height: 100px"></textarea>
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
                    <optgroup label="Artificial Intelligence">
                        <option value="Natural Language Processing">Natural Language Processing</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Metaheuristics">Metaheuristics</option>
                        <option value="Robotics">Robotics</option>
                        <option value="Expert System">Expert System</option>
                    </optgroup>
                    <optgroup label="Data Science &amp; Business Intelligence">
                        <option value="Data Mining">Data Mining</option>
                        <option value="Text Mining">Text Mining</option>
                        <option value="Computer Vision">Computer Vision</option>
                        <option value="Sound Processing">Sound Processing</option>
                        <option value="Signal Processing">Signal Processing</option>
                    </optgroup>
                    <optgroup label="Embedded System">
                        <option value="Standalone Embedded System">Standalone Embedded System</option>
                        <option value="Networked Embedded System">Networked Embedded System</option>
                    </optgroup>
                    <optgroup label="Enterprise System">
                        <option value="Business Process Management">Business Process Management</option>
                        <option value="Data and Knowledge Management">Data and Knowledge Management</option>
                        <option value="Enterprise Management System">Enterprise Management System</option>
                        <option value="Enterprise Architecture">Enterprise Architecture</option>
                    </optgroup>
                    <optgroup label="Game">
                        <option value="Game Intelligence">Game Intelligence</option>
                        <option value="Game Design & Development">Game Design &amp; Development</option>
                    </optgroup>
                    <optgroup label="Human Computer Interaction">
                        <option value="AR / VR">AR / VR</option>
                        <option value="UI / UX">UI / UX</option>
                    </optgroup>
                    <optgroup label="Information System Management">
                        <option value="IS / IT Strategy">IS / IT Strategy</option>
                        <option value="IS / IT Adoption">IS / IT Adoption</option>
                        <option value="IS / IT Evaluation">IS / IT Evaluation</option>
                        <option value="IT Risk Management">IT Risk Management</option>
                    </optgroup>
                    <optgroup label="IT Infrastructure &amp; Networks">
                        <option value="Information Security">Information Security</option>
                        <option value="Network Security">Network Security</option>
                        <option value="Network Management">Network Management</option>
                        <option value="IT Infrastructure">IT Infrastructure</option>
                        <option value="Cloud Computing">Cloud Computing</option>
                    </optgroup>
                    <optgroup label="Software Engineering">
                        <option value="Software Requirement">Software Requirement</option>
                        <option value="Software Design">Software Design</option>
                        <option value="Software Testing">Software Testing</option>
                        <option value="Optimization in SE">Optimization in SE</option>
                    </optgroup>
                    <optgroup label="Theoritical Foundation">
                        <option value="Coding Theory">Coding Theory</option>
                        <option value="Teori Bahasa dan Automata">Teori Bahasa dan Automata</option>
                        <option value="Graph Theory">Graph Theory</option>
                    </optgroup>
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
                    <optgroup label="Artificial Intelligence">
                        <option value="Natural Language Processing">Natural Language Processing</option>
                        <option value="Machine Learning">Machine Learning</option>
                        <option value="Metaheuristics">Metaheuristics</option>
                        <option value="Robotics">Robotics</option>
                        <option value="Expert System">Expert System</option>
                    </optgroup>
                    <optgroup label="Data Science &amp; Business Intelligence">
                        <option value="Data Mining">Data Mining</option>
                        <option value="Text Mining">Text Mining</option>
                        <option value="Computer Vision">Computer Vision</option>
                        <option value="Sound Processing">Sound Processing</option>
                        <option value="Signal Processing">Signal Processing</option>
                    </optgroup>
                    <optgroup label="Embedded System">
                        <option value="Standalone Embedded System">Standalone Embedded System</option>
                        <option value="Networked Embedded System">Networked Embedded System</option>
                    </optgroup>
                    <optgroup label="Enterprise System">
                        <option value="Business Process Management">Business Process Management</option>
                        <option value="Data and Knowledge Management">Data and Knowledge Management</option>
                        <option value="Enterprise Management System">Enterprise Management System</option>
                        <option value="Enterprise Architecture">Enterprise Architecture</option>
                    </optgroup>
                    <optgroup label="Game">
                        <option value="Game Intelligence">Game Intelligence</option>
                        <option value="Game Design & Development">Game Design &amp; Development</option>
                    </optgroup>
                    <optgroup label="Human Computer Interaction">
                        <option value="AR / VR">AR / VR</option>
                        <option value="UI / UX">UI / UX</option>
                    </optgroup>
                    <optgroup label="Information System Management">
                        <option value="IS / IT Strategy">IS / IT Strategy</option>
                        <option value="IS / IT Adoption">IS / IT Adoption</option>
                        <option value="IS / IT Evaluation">IS / IT Evaluation</option>
                        <option value="IT Risk Management">IT Risk Management</option>
                    </optgroup>
                    <optgroup label="IT Infrastructure &amp; Networks">
                        <option value="Information Security">Information Security</option>
                        <option value="Network Security">Network Security</option>
                        <option value="Network Management">Network Management</option>
                        <option value="IT Infrastructure">IT Infrastructure</option>
                        <option value="Cloud Computing">Cloud Computing</option>
                    </optgroup>
                    <optgroup label="Software Engineering">
                        <option value="Software Requirement">Software Requirement</option>
                        <option value="Software Design">Software Design</option>
                        <option value="Software Testing">Software Testing</option>
                        <option value="Optimization in SE">Optimization in SE</option>
                    </optgroup>
                    <optgroup label="Theoritical Foundation">
                        <option value="Coding Theory">Coding Theory</option>
                        <option value="Teori Bahasa dan Automata">Teori Bahasa dan Automata</option>
                        <option value="Graph Theory">Graph Theory</option>
                    </optgroup>
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
                    <small>{{$message}}</small>
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
            <label for="drafProposal" class="col-sm-2 col-form-label">Draf Proposal *</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="drafProposal" name="draf_proposal">
                @error('draf_proposal')
                    <small>{{$message}}</small>
                @enderror
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="krsBerjalan" class="col-sm-2 col-form-label">KRS Berjalan *</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="krsBerjalan" name="krs_berjalan">
                @error('krs_berjalan')
                    <small>{{$message}}</small>
                @enderror
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="formPersetujuan" class="col-sm-2 col-form-label">Form Persetujuan Calon Dosen Pembimbing *</label>
            <div class="col-sm-10">
                <input class="form-control" type="file" id="formPersetujuan" name="form_persetujuan">
                @error('form_persetujuan')
                    <small>{{$message}}</small>
                @enderror
                <div id="fileHelp" class="form-text">*Format PDF, ukuran maksimal 2MB.</div>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="inputNoWA" class="col-sm-2 col-form-label">No. WA Aktif *</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputNoWA" name="no_wa"autocomplete="off">
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
