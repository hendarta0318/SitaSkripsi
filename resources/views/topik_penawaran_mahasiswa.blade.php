@extends('app_adminkit_mahasiswa')

@section('content-topik_penawaran_mahasiswa')
    <div class="">
        <h1 class="h3 mb-3 mt-3"><b>Topik Penawaran</b></h1>
        <div class="col-lg-12">
            <div class="card">
                <table class="table table-bordered">
                    <thead style="background-color: #7239EA;">
                        <tr>
                            <th class="text-light" style="width:5%;">No</th>
                            <th class="text-light"style="width:30%">Bidang Minat</th>
                            <th class="d-none d-md-table-cell text-light" style="width:30%">Topik Skripsi</th>
                            <th class="text-light"style="width:5%;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><b>Data Science & Business Intelligence</b></td>
                            <td class="d-none d-md-table-cell">Data Mining</td>
                            <td class="table-action">
                                <a href="#" 
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                 
                                1.Data Visualization
                                2.Data Science
                                3.Data Mining
                                4.Statistik
                                5.Kecerdasan Komputasional
                                6.Analisis dan Visualisasi Data">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#" 
                                class="modalLink" 
                                data-content="DOSEN / PENELITI

                                1.Priza Pandunata S.Kom, M.Sc
                                2.Nelly Oktavia Adiwijaya S.Si, M.Kom
                                3.Fajrin Nurman Arifin S.T., M.Eng
                                4.Diah Ayu Retnani Wulandari S.T., M.Eng
                                5.Muhamad Arief Hidayat S.Kom, M.Kom
                                6.Gayatri Dwi Santika S.SI, M.Kom
                                7.Qurrota A’yuni Ar Ruhimat S.Pd., M.Sc">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                                <div id="myModal" class="modal">
                                    <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <p id="modalText">Default text</p>
                                    </div>
                                </div>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Text Mining</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Matematika Dasar
                                    2.Statistik
                                    3.Sistem Basis Data
                                    4.Algoritma dan Pemrograman I
                                    5.Algoritma dan Pemrograman II
                                    6.Aljabar Linear
                                    7.Data Mining / Kecerdasan Komputasional
                                    8.Information Retrieval
                                    9.Machine Learning
                                    10.NLP">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI

                                    1. Tio Dharmawan S.Kom, M.Kom
                                    2. Priza Pandunata S.Kom, M.Sc
                                    3. Achmad Maududie ST., M.Kom
                                    4. Muhamad Arief Hidayat S.Kom, M.Kom
                                    5. Harry Soepandi S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                    <div id="myModal" class="modal">
                                        <div class="modal-content">
                                            <span class="close">&times;</span>
                                            <p id="modalText">Default text</p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Computer Vision</td>
                                <td class="table-action">
                                    <a href="#" 
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Algoritma dan Pemrograman / Algoritma dan Pemrograman I / Algoritma dan Pemrograman II
                                    2.Matematika Dasar
                                    3.Aljabar Linear
                                    4.Statistik
                                    5.Pengolahan Citra Digital
                                    6.Pengenalan Pola/Machine Learning
                                    7.Jaringan Syaraf Tiruan
                                    8.Computer Vision
                                    9.Deep Learning (Optional)">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI

                                    1. Tio Dharmawan, S.Kom., M.Kom
                                    2. Achmad Maududie, ST.,M.Sc
                                    3. Nelly Oktavia Adiwijaya, S.Si, M.Kom
                                    4. Dr. Dwiretno Istiyadi Swasono, ST.,M.Kom
                                    5. Muhamad Arief Hidayat, S.Kom., M.Kom
                                    6. Januar Adi Putra, S.Kom., M.Kom
                                    7. Maliatul Fitriyasar M.Sc.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Signal Processing</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG

                                    1.Algoritma dan Pemrograman / Algoritma dan Pemrograman I /
                                    Algoritma dan Pemrograman II
                                    2.Matematika Dasar
                                    3.Aljabar Linear
                                    4.Statistik
                                    5.Jaringan Syaraf Tiruan
                                    6.DataMining/Kecerdasan Komputasional
                                    7.Pengenalan Pola/Machine Learning
                                    8.Deep Learning">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#" 
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Nelly Oktavia Adiwijaya, S.Si., M.T.
                                    2. Muhammad 'Ariful Furqon, S.Pd., M.Kom.
                                    3. Maliatul Fitriyasari M.Sc.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            
                        </tr>

                        <tr>
                            <td>2</td>
                            <td><b>Artificial Intelligence</b></td>
                            <td class="d-none d-md-table-cell">Natural Language Processing</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                
                                1.Data Mining / Kecerdasan Komputasional
                                2.Information Retrieval
                                3.Machine learning
                                4.Pemrosesan Bahasa Alami
                                5.Deep Learning">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#" 
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1. Prof. Dr. Saiful Bukhori, S.T., M.Kom.
                                2. Muhammad 'Ariful Furqon, S.Pd., M.Kom.">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Machine Learning</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Datamining
                                    2.Kecerdasan Komputasional
                                    3.Jaringan Syaraf Tiruan
                                    4.Pengantar Kecerdasan Buatan
                                    5.Kecerdasan Buatan">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Yudha Alif Auliya S.Kom, M.Kom
                                    2. Priza Pandunata S.Kom, M.Sc
                                    3. Achmad Maududie ST., M.Kom
                                    4. Nelly Oktavia Adiwijaya, S.Si., M.T.
                                    5. Prof. Dr. Saiful Bukhori ST., M.Kom
                                    6. Gama Wisnu Fajarianto, S.Kom., M.Kom
                                    7. Dr. Dwiretno Istiyadi Swasono, ST.,M.Kom
                                    8. Nova El Maidah S.Si., M.Cs.
                                    9. Muhammad 'Ariful Furqon, S.Pd., M.Kom.
                                    10. Muhamad Arief Hidayat S.Kom, M.Kom
                                    11. Gayatri Dwi Santika, S.SI.,M.Kom
                                    12. Qurrota A’yuni Ar Ruhimat S.Pd., M.Sc">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Metaheuristics</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Datamining
                                    2.Pengantar Kecerdasan Buatan
                                    3.Kecerdasan Buatan
                                    4.Kecerdasan Komputasional">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Prof. Saiful Bukhori S.T, M.Kom
                                    2. Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc, Ph.D
                                    3. Yudha Alif Auliya S.Kom, M.Kom
                                    4. Gayatri Dwi Santika S.SI, M.Kom">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Robotics</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1. Robotika
                                    2. Robotika dalam Agroindustri
                                    3. Machine Learning
                                    4. Pengantar/Kecerdasan Buatan
                                    5. Embedded System Programming">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Nova El Maidah S.Si., M.Cs.
                                    2. M. Zarkasi S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Expert System</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1. Sistem Pakar
                                    2. Sistem Pendukung Pengambilan Keputusan
                                    3. Pengantar/Kecerdasan Buatan">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Yudha Alif Auliya S.Kom, M.Kom
                                    2. Gama Wisnu Fajarianto, S.Kom., M.Kom
                                    3. Nova El Maidah S.Si., M.Cs.
                                    4. Muhammad 'Ariful Furqon, S.Pd., M.Kom.
                                    5. Yanuar Nurdiansyah, ST,.M.Cs.
                                    6. Prof. Drs. Slamin, M.Comp.Sc., Ph.D
                                    7. Gayatri Dwi Santika, S.SI.,M.Kom">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td><b>Game</b></td>
                            <td class="d-none d-md-table-cell">Game Intelligence</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                
                                1.Game theory
                                2.Kecerdasan buatan
                                3.Game engine destiny and development(optional)
                                4.Augmented Reality">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1. Prof. Dr. Saiful Bukhori, S.T., M.Kom.
                                2. Muhammad 'Ariful Furqon, S.Pd., M.Kom.
                                3. Gama Wisnu Fajarianto, S.Kom., M.Kom.">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Game Design & Development</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1. Game Engine Design and Development
                                    2. Augmented Reality
                                    3. 3D modeling dan animasi">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Muhammad ‘Ariful Furqon, S.Pd., M.Kom.
                                    2. Priza Pandunata, S.Kom. M.Sc.
                                    3. Gama Wisnu Fajarianto, S.Kom. M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>
                        
                        <tr>
                            <td>4</td>
                            <td><b>Human Computer Interaction</b></td>
                            <td class="d-none d-md-table-cell">AR/VR</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                
                                1. Interaksi Manusia dan Komputer
                                2. Grafika Komputer
                                3. UI/UX Desain
                                4. 3D Modelling dan Animasi
                                5. Strategi Pengembangan Media Pembelajaran (Opsional)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1. Yudha Alif Auliya, S.Kom., M.Kom
                                2. Januar Adi Putra, S.Kom., M.Kom">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">UI/UX</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1. Interaksi Manusia dan Komputer
                                    2. Pemrograman Berorientasi Obyek
                                    3. UI/UX Design">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Fahrobby Adnan, S.Kom., M.MSI.
                                    2. Anang Andrianto, ST., MT
                                    3. Tri Agustina Nugrahani, S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>
                            
                        <tr>
                            <td>5</td>
                            <td><b>IT Infrastructure & Networks</b></td>
                            <td class="d-none d-md-table-cell">Information Security</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG

                                1.Matematika Dasar 
                                2.Matematika Diskrit
                                3.Teori Graf
                                4.Statistika
                                5.Manajemen Keamanan Sistem Informasi (SI, If) atau Keamanan Sistem (TI)">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                    
                                    1. Prof. Drs. Antonius Cahya Prihandoko, M,App.Sc, Ph.D
                                    2. Yanuar Nurdiansyah S.T, M.Cs
                                    3. Diksy Media Firmansyah S.Kom, M.Kom">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Network Security</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG

                                    Jaringan Komputer
                                    Sistem Operasi">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Prof. Drs. Antonius Cahya Prihandoko, M.App.Sc, Ph.D
                                    2. Yanuar Nurdiansyah, S.T., M.Cs.
                                    3. M. Zarkasi, S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Network Management</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    Persyaratan wajib :

                                    1. Jaringan komputer
                                    2. routing switching,
                                    3. desain dan management jaringan,
                                    4. keamanan jaringan

                                    Persyaratan khusus :

                                    1. jaringan nirkabel (jika pembahasan terkait management jaringan nirkabel)
                                    2. management keamanan sistem informasi.
                                    3. Kecerdasan buatan (jika analisis untuk otomatisasi pengambilan keputusan dalam management jaringan atau tentang routing, atau peletakan node)
                                    4. Data science (jika analisis pola dan perilaku dalam jaringan)">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Diah Ayu Retnani S.T, M.Eng
                                    2. Anang andrianto S.T, M.T
                                    3. M. Zarkasi S.Kom, M.Kom
                                    4. Yudha Alif A. S.Kom, M.Kom
                                    5. Diksy Media F. S.Kom, M.Kom
                                    6. Dwi Wijonarko S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Cloud Computing</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG

                                    Persyaratan wajib:

                                    1.Jaringan komputer
                                    2.Administrasi sistem

                                    Persyaratan khusus:

                                    1.Cloud computing
                                    2.Keamanan sistem">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Diksi Media F, S.Kom., M.Kom.
                                    2. M Zarkasi, S.Kom., M.Kom.
                                    3. Dwi Wijonarko S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>

                         <tr>
                            <td>6</td>
                            <td><b>Embedded System</b></td>
                            <td class="d-none d-md-table-cell">Standalone Embedded System</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Algoritma dan Pemrograman I
                                    2.Algoritma dan Pemrograman II
                                    3.Arsitektur Komputer
                                    4.Interaksi manusia dan komputer
                                    5.System Device
                                    6.Embedded System Programming">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1. Achmad Maududie, ST, M.Sc
                                2. Dr. Dwiretno Istiyadi Swasono, ST.,M.Kom
                                3. Nova El Maidah, S.Si., M.Cs.
                                4. Maliatul Fitriyasari M.Sc.">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Networked Embedded System</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG

                                    1.Algoritma dan Pemrograman I
                                    2.Algoritma dan Pemrograman II
                                    3.Arsitektur Komputer
                                    4.Interaksi manusia dan komputer
                                    5.Jaringan Komputer
                                    6.Sistem basis data
                                    7.Pemrograman Berbasis Obyek
                                    8.Pemrograman antarmuka aplikasi
                                    9.Pemrograman berbasis Mobile
                                    10.Pemrograman berbasis Web
                                    11.System Device
                                    12Embedded System Programming">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Anang Andrianto, ST., MT
                                    2. Dr. Dwiretno Istiyadi Swasono, ST., M.Kom
                                    3. Achmad Maududie, ST., M.Sc.
                                    4. Mohammad Zarkasi S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>

                        <tr>
                            <td>7</td>
                            <td><b>Enterprise System</b></td>
                            <td class="d-none d-md-table-cell">Business Process Management</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                
                                1.Dasar-dasar Sistem Informasi
                                2.Sistem Enterise
                                3.Rekayasa Proses Bisnis ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1. Oktalia Juwita, S.Kom., M.MT.
                                2. Karina Nine Amalia, S.Kom., M.Kom.
                                3. Diah Ayu Retnani Wulandari, S.T., M.Eng.">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Enterprise Management System</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Dasar-dasar Sistem Informasi
                                    2.Prinsip Organisasi dan Management
                                    3.System Enterprise">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Oktalia Juwita, S.Kom., M.MT.
                                    2. Karina Nine Amalia, S.Kom., M.Kom.
                                    3. Tri Agustina Nugrahani, S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Enterprise Architecture</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Dasar-dasar Sistem Informasi
                                    2.Prinsip Organisasi dan Manajemen
                                    3.Sistem Enterprise
                                    4.Tata Kelola Teknologi Informasi
                                    5.Rekayasa Proses Bisnis
                                    6.Enterprise Architecture">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Oktalia Juwita, S.Kom., M.MT.
                                    2. Fajrin Nurman Arifin, S.T., M.Eng.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>

                        <tr>
                            <td>8</td>
                            <td><b>Information System Management</b></td>
                            <td class="d-none d-md-table-cell">IS/IT Strategy</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                
                                1.Dasar-dasar Sistem Informasi
                                2.Prinsip Organisasi dan Management
                                3.Tata Kelola Sistem Informasi
                                4.Statistika">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1.Oktalia Juwita, S.Kom., M.MT.
                                2.Fajrin Nurman Arifin, S.T., M.Eng.">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">IS/IT Adoption</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Prinsip Organisasi dan Manajemen
                                    2.Dasar-Dasar Sistem Informasi
                                    3.Statistika
                                    4.Pengukuran dan Implementasi">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1.Beny Prasetyo, S.Kom., M.Kom.
                                    2.Fahrobby Adnan, S.Kom., M.MSI.
                                    3.Oktalia Juwita, S.Kom., M.MT.
                                    4.Fajrin Nurman Arifin, S.T., M.Eng.
                                    5.Karina Nine Amalia, S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">IS/IT Evaluation</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Prinsip Organisasi dan Manajemen
                                    2.Dasar-Dasar Sistem Informasi
                                    3.Statistika
                                    4.Tata Kelola Teknologi Sistem Informasi
                                    5.Pengukuran dan Implementasi">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1.Beny Prasetyo, S.Kom., M.Kom.
                                    2.Fahrobby Adnan, S.Kom., M.MSI.
                                    3.Oktalia Juwita, S.Kom., M.MT.
                                    4.Fajrin Nurman Arifin, S.T., M.Eng.
                                    5.Karina Nine Amalia, S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">IT Risk Management</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Prinsip Organisasi dan Manajemen
                                    2.Dasar-Dasar Sistem Informasi
                                    3.Statistika
                                    4.Tata Kelola Teknologi Informasi
                                    5.Manajemen Risiko TI">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Beny Prasetyo, S.Kom., M.Kom.
                                    2. Windi Eka Yulia Retnani, S.Kom., MT.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>

                        <tr>
                            <td>9</td>
                            <td><b>Theoritical Foundation</b></td>
                            <td class="d-none d-md-table-cell">Graph Teory</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                
                                1.Matematika Dasar (Logika Matematika)
                                2.Matematika Diskrit">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1.Prof. Slamin, M.Comp.Sc, Ph.D
                                2.Qurrota A’yuni Ar Ruhimat, S.Pd., M.Sc
                                3.Muhammad Arief Hidayat, S.Kom, M.Kom
                                4.Gama Wisnu Fajariyanto, S.Kom., M.Kom">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td>10</td>
                            <td><b>Software Engineering</b></td>
                            <td class="d-none d-md-table-cell">Software Requirement</td>
                            <td class="table-action">
                                <a href="#"
                                class="modalLink" 
                                data-content="MATAKULIAH PENDUKUNG
                                
                                1.Pengantar Rekayasa Perangkat Lunak
                                2.Analisa dan Perancangan System / OBject Oriented/ Analisa dan Desain Perangkat Lunak
                                3. Sistem Basisdata
                                4. Algoritma dan Pemrograman I/II
                                5. Pemrograman berbasis Object
                                6. Interaksi Manusia dan Komputer
                                7. Rekayasa Proses Bisnis
                                8. Pengembangan Perangkat Lunak berbasis Agroindustri Modern">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                        <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                    </svg>
                                </a>
                                <a href="#"
                                class="modalLink" 
                                data-content="DOSEN / PENELITI
                                
                                1. Windi Eka Yulia Retnani, S.kom.,MT.
                                2. Beny Prasetyo, S.Kom., M.Kom.
                                3. Tri Agustina Nugrahani, S.Kom., M.Kom
                                4. Anang Andrianto, S.T.,MT.
                                5. Karina Nine Amalia, S.Kom., M.Kom.
                                6. Dwi Wijonarko S.Kom., M.Kom.
                                7. Harry Soepandi S.Kom., M.Kom.">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </a>
                            </td>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Software Design</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1.Pengantar Rekayasa Perangkat Lunak
                                    2.Analisa dan Perancangan Sistem / Object Oriented Design / Analisa dan Desain Perangkat Lunak
                                    3. Sistem Basis Data
                                    4. Algoritma dan Pemrograman I/II
                                    5. Pemrograman berbasis Object
                                    6. Rekayasa Proses Bisnis
                                    7. Pengembangan Perangkat Lunak berbasis Agroindustri Modern
                                    8. Arsitektur Perangkat Lunak
                                    9. Design Pattern / Pengenalan Pola
                                    10. Software Design">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1. Anang Andrianto, ST., MT
                                    2. Januar Adi Putra, S.Kom., M.Kom
                                    3. Tri Agustina Nugrahani, S.Kom., M.Kom.
                                    4. Dwi Wijonarko S.Kom., M.Kom.
                                    5. Harry Soepandi S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Software Testing</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1. Pengantar Rekayasa Perangkat Lunak
                                    2. Analisa dan Perancangan System / Object Oriented / Analisa dan Desain Perangkat Lunak
                                    3. Sistem Basisdata
                                    4. Algoritma dan Pemrograman I/II
                                    5. Pemrograman berbasis Object
                                    6. Pemrograman SQL
                                    7. Rekayasa Proses Bisnis
                                    8. Arsitektur Perangkat Lunak
                                    9. Pengembangan Perangkat Lunak berbasis Agroindustri Modern
                                    10. Implementasi dan Pengujian Bidang Minat
                                    11. Software Testing">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1.Windi Eka Yulia Retnani, S.Kom.,MT.
                                    2.Prof. Dr. Saiful Bukhori, ST., M.Kom.
                                    3.Dwi Wijonarko S.Kom., M.Kom.
                                    4.Harry Soepandi S.Kom., M.Kom.">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td></td>
                                <td class="d-none d-md-table-cell">Optimization in SE</td>
                                <td class="table-action">
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="MATAKULIAH PENDUKUNG
                                    
                                    1. Pengantar Rekayasa Perangkat Lunak
                                    2. Analisa dan Perancangan System / Object Oriented/ Analisa dan Desain Perangkat Lunak
                                    3. Sistem Basisdata
                                    4. Algoritma dan Pemrograman I/II
                                    5. Pemrograman berbasis Object
                                    6. Pemrograman SQL
                                    7. Rekayasa Proses Bisnis
                                    8. Arsitektur Perangkat Lunak
                                    9. Pengembangan Perangkat Lunak berbasis Agroindustri Modern
                                    10. Implementasi dan Pengujian Bidang Minat
                                    11. Software Testing
                                    12. Software Quality">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" />
                                        </svg>
                                    </a>
                                    <a href="#"
                                    class="modalLink" 
                                    data-content="DOSEN / PENELITI
                                    
                                    1.Windi Eka Yulia Retnani, S.kom.,MT.
                                    2.Prof. Dr. Saiful Bukhori, ST., M.Kom">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="20" height="20" class="main-grid-item-icon" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection