@extends('app_adminkit_mahasiswa')

@section('content-repository')
<div class="">
    <h1 class="h3 mb-3 mt-4"><b>Repository</b></h1>

    <div class="col-12">
        <div class="card card-clickable" data-url="https://www.youtube.com/watch?v=y2zLFONuk7c">
            <div class="card-body bg-white">
                <h6 class="card-title mb-0 text-dark font-custom">
                    Pemodelan Prioritas Kebutuhan Berdasarkan Hasil Perankingan Fuzzy Moscow Menggunakan Text Mining 
                </h6>
                <p>
                    Software Requirement Engineering merupakan salah satu tahapan penting untuk memberikan gambaran yang jelas dalam menerjemahkan persyaratan yang tidak jelas dan tidak lengkap menjadi spesifikasi yang jelas, lengkap dan lebih... 
                </p>
            </div>
        </div>
        <div class="card card-clickable" data-url="https://www.youtube.com/">
            <div class="card-body bg-white">
                <h6 class="card-title mb-0 text-dark">
                    Optimization of Gender Classification Based on Facial Images Using OD-LBP, Viola Jones, and PCA
                </h6>
                <p>
                    Skripsi ini mempersembahkan tentang penelitian di bidang Computer Vision yang bertujuan untuk menggabungkan dua metode ekstraksi fitur, yaitu Orthogonal Difference Local Binary Pattern dan Viola Jones, dalam upaya meningkatkan klasifi...
                </p>
            </div>
        </div>
        <div class="card card-clickable" data-url="https://www.youtube.com/">
            <div class="card-body bg-white">
                <h6 class="card-title mb-0 text-dark">
                    Analisis Kepuasan Pengguna Aplikasi Mamikos Menggunakan Metode End User Computing Satisfaction dan Importance Performance Analysis
                </h6>
                <p>
                    Perkembangan transaksi digital di era teknologi tinggi menjadi salah satu faktor berkembangnya beragam aplikasi dengan tujuan mempermudah kehidupan manusia. Aplikasi mobile Mamikos merupakan perwujudan dari misi membant...
                </p>
            </div>
        </div>
        <div class="card card-clickable" data-url="https://www.youtube.com/">
            <div class="card-body bg-white">
                <h6 class="card-title mb-0 text-dark">
                    Implementasi Finite State Machine untuk Menentukan Perilaku Non-Playable Character pada Game Simulasi Kepemimpinan
                </h6>
                <p>
                    Skripsi ini mempersembahkan tentang penelitian di bidang Computer Vision yang bertujuan untuk menggabungkan dua metode ekstraksi fitur, yaitu Orthogonal Difference Local Binary Pattern dan Viola Jones, dalam upaya meningkatkan klasifi...
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .card-clickable {
        cursor: pointer;
    }

    .card-clickable:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .font-custom{
        font-family: Arial, sans-serif;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.card-clickable').forEach(function(card) {
            card.addEventListener('click', function() {
                window.location.href = card.getAttribute('data-url');
            });
        });
    });
</script>
@endsection