<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);

Route::get('dashboard_mahasiswa', function () {
    return view('dashboard_mahasiswa');
})->name('dashboard_mahasiswa');

Route::get('dashboard_dosen', function () {
    return view('dashboard_dosen');
})->name('dashboard_dosen');

Route::get('repository', function () {
    return view('repository');
})->name('repository');

Route::get('repository_dosen', function () {
    return view('repository_dosen');
})->name('repository_dosen');

Route::get('seminar_proposal', function () {
    return view('seminar_proposal');
})->name('seminar_proposal');

Route::get('sidang_skripsi', function () {
    return view('sidang_skripsi');
})->name('sidang_skripsi');

Route::get('surat_tugas', function () {
    return view('surat_tugas');
})->name('surat_tugas');

Route::get('topik_penawaran_dosen', function () {
    return view('topik_penawaran_dosen');
})->name('topik_penawaran_dosen');

Route::get('topik_penawaran_mahasiswa', function () {
    return view('topik_penawaran_mahasiswa');
})->name('topik_penawaran_mahasiswa');

Route::get('usulan_pembimbing', function () {
    return view('usulan_pembimbing');
})->name('usulan_pembimbing');