<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardMahasiswaController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\UsulanPembimbingController;
use App\Http\Controllers\SuratTugasController;

Route::middleware(['guest'])-> group(function(){
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login'); // login
    Route::post('/', [LoginController::class, 'login']);
});

Route::middleware(['auth'])-> group(function(){
    Route::get('dashboard_mahasiswa', [DashboardMahasiswaController::class, 'showDashboardMhsForm'])->name('dashboard_mahasiswa');
    Route::get('dashboard_dosen', [DashboardDosenController::class, 'showDashboardDosenForm'])->name('dashboard_dosen')->middleware('userAkses:dosen');
    Route::get('logout',[LoginController::class, 'logout']);

    Route::post('usulan-pembimbing', [UsulanPembimbingController::class, 'store'])->name('usulan-pembimbing.store');
    Route::get('usulan_pembimbing', [UsulanPembimbingController::class, 'showUsulanPembimbingForm'])->name('usulan_pembimbing');
    
    Route::get('repository', [RepositoryController::class, 'showUsulanPembimbingForm'])->name('repository');
    Route::get('repository_dosen', [RepositoryController::class, 'showUsulanPembimbingForm'])->name('repository_dosen');

    Route::get('seminar_proposal', [SeminarProposalController::class, 'showUsulanPembimbingForm'])->name('seminar_proposal');

    Route::get('sidang_skripsi', [SidangSkripsiController::class, 'showUsulanPembimbingForm'])->name('sidang_skripsi');

    Route::post('surat_tugas', [SuratTugasController::class, 'store'])->name('surat_tugas.store');
    Route::get('surat_tugas', [SuratTugasController::class, 'showSuratTugasForm'])->name('surat_tugas');

    Route::get('topik_penawaran_mahasiswa', [TopikPenawaranMahasiswaController::class, 'showTopikPenawaranMahasiswaForm'])->name('topik_penawaran_mahasiswa');

    Route::get('topik_penawaran_dosen', [TopikPenawaranDosenController::class, 'showTopikPenawaranDosenForm'])->name('topik_penawaran_dosen');
});

// Route::get('/', function () {
//     return view('welcome');
// });

// register
// Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('register', [RegisterController::class, 'register']);
