<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BerandaMahasiswaController;
use App\Http\Controllers\BerandaDosenController;
use App\Http\Controllers\BerandaOperatorController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\UsulanPembimbingController;
use App\Http\Controllers\RepositoryController;
use App\Http\Controllers\SuratTugasController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\SeminarProposalController;
use App\Http\Controllers\SidangSkripsiController;
use App\Http\Controllers\TopikPenawaranMahasiswaController;
use App\Http\Controllers\TopikPenawaranOperatorController;
use App\Http\Controllers\TopikPenawaranDosenController;
use App\Http\Controllers\AgendaSeminarProposalMahasiswaController;
use App\Http\Controllers\AgendaSeminarProposalOperatorController;
use App\Http\Controllers\AgendaSidangSkripsiMahasiswaController;
use App\Http\Controllers\AgendaSidangSkripsiOperatorController;
use App\Http\Controllers\MenambahkanAgendaSemproOperatorController;
use App\Http\Middleware\UserAkses;
use App\Http\Kernel;

Route::middleware(['guest'])-> group(function(){
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login'); // login
    Route::post('/', [LoginController::class, 'login']);
});

Route::middleware(['auth'])-> group(function(){
    Route::get('beranda_mahasiswa', [BerandaMahasiswaController::class, 'showBerandaMhsForm'])->name('beranda_mahasiswa'); //->middleware(['userAkses:mahasiswa']);
    Route::get('beranda_dosen', [BerandaDosenController::class, 'showBerandaDosenForm'])->name('beranda_dosen'); //->middleware(['userAkses:dosen']);
    Route::get('beranda_operator', [BerandaOperatorController::class, 'showBerandaOperatorForm'])->name('beranda_operator'); //->middleware(['userAkses:operator']);
    Route::get('profile',[ProfileController::class, 'showProfile'])->name('profile');
    Route::get('logout',[LoginController::class, 'logout']);

    Route::post('usulan-pembimbing', [UsulanPembimbingController::class, 'store'])->name('usulan-pembimbing.store');
    Route::get('usulan_pembimbing', [UsulanPembimbingController::class, 'showUsulanPembimbingForm'])->name('usulan_pembimbing');
    Route::get('usulan_pembimbing/{id}/{fileType}', [UsulanPembimbingController::class, 'downloadFile'])->name('usulan_pembimbing.download');
    Route::delete('usulan_pembimbing/{id}', [UsulanPembimbingController::class, 'destroy'])->name('usulan_pembimbing.destroy');

    Route::get('repository', [RepositoryController::class, 'showRepositoryForm'])->name('repository');
    Route::get('repository_dosen', [RepositoryController::class, 'showRepositoryDosenForm'])->name('repository_dosen');
    Route::get('repository_operator', [RepositoryController::class, 'showRepositoryOperatorForm'])->name('repository_operator');

    Route::post('seminar_proposal', [SeminarProposalController::class, 'store'])->name('seminar-proposal.store');
    Route::get('seminar_proposal', [SeminarProposalController::class, 'showSeminarProposalForm'])->name('seminar_proposal');

    Route::post('sidang_skripsi', [SidangSkripsiController::class, 'store'])->name('sidang_skripsi.store');
    Route::get('sidang_skripsi', [SidangSkripsiController::class, 'showSidangSkripsiForm'])->name('sidang_skripsi');

    Route::post('surat_tugas', [SuratTugasController::class, 'store'])->name('surat_tugas.store');
    Route::get('surat_tugas', [SuratTugasController::class, 'showSuratTugasForm'])->name('surat_tugas');

    Route::get('penilaian', [PenilaianController::class, 'showPenilaianForm'])->name('penilaian');

    Route::get('topik_penawaran_mahasiswa', [TopikPenawaranMahasiswaController::class, 'showTopikPenawaranMahasiswaForm'])->name('topik_penawaran_mahasiswa');

    Route::get('topik_penawaran_operator', [TopikPenawaranOperatorController::class, 'showTopikPenawaranOperatorForm'])->name('topik_penawaran_operator');

    Route::get('topik_penawaran_dosen', [TopikPenawaranDosenController::class, 'showTopikPenawaranDosenForm'])->name('topik_penawaran_dosen');

    Route::get('agenda_seminar_proposal_mahasiswa', [AgendaSeminarProposalMahasiswaController::class, 'showAgendaSemproForm'])->name('agenda_seminar_proposal_mahasiswa');
    Route::get('agenda_seminar_proposal_mahasiswa/{id}', [AgendaSeminarProposalMahasiswaController::class, 'show'])->name('agenda_seminar_proposal_mahasiswa.show');

    Route::get('agenda_sidang_skripsi_mahasiswa', [AgendaSidangSkripsiMahasiswaController::class, 'showAgendaSidSkripForm'])->name('agenda_sidang_skripsi_mahasiswa');
    Route::get('agenda_sidang_skripsi_mahasiswa/{id}', [AgendaSidangSkripsiMahasiswaController::class, 'show'])->name('agenda_sidang_skripsi_mahasiswa.show');
    
    Route::get('agenda_seminar_proposal_operator', [AgendaSeminarProposalOperatorController::class, 'showAgendaSemproOperatorForm'])->name('agenda_seminar_proposal_operator');
    Route::get('menambahkan_agenda_sempro_operator', [AgendaSeminarProposalOperatorController::class, 'showMenambahSemproOperatorForm'])->name('menambahkan_agenda_sempro_operator');
    Route::post('menambahkan_agenda_sempro_operator', [AgendaSeminarProposalOperatorController::class, 'store'])->name('menambahkan_agenda_seminar_proposal.store');
    Route::get('menambahkan_agenda_seminar_proposal/edit/{id}', [AgendaSeminarProposalOperatorController::class, 'edit'])->name('menambahkan_agenda_seminar_proposal.edit');
    Route::put('menambahkan_agenda_seminar_proposal/update/{id}', [AgendaSeminarProposalOperatorController::class, 'update'])->name('menambahkan_agenda_seminar_proposal.update');
    Route::delete('menambahkan_agenda_seminar_proposal/{id}', [AgendaSeminarProposalOperatorController::class, 'destroy'])->name('menambahkan_agenda_seminar_proposal.destroy');
    Route::get('menambahkan_agenda_seminar_proposal/{id}', [AgendaSeminarProposalOperatorController::class, 'show'])->name('menambahkan_agenda_seminar_proposal.show');

    Route::get('agenda_sidang_skripsi_operator', [AgendaSidangSkripsiOperatorController::class, 'showAgendaSidSkripOperatorForm'])->name('agenda_sidang_skripsi_operator');
    Route::get('menambahkan_agenda_sidang_skripsi_operator', [AgendaSidangSkripsiOperatorController::class, 'showMenambahSidSkripOperatorForm'])->name('menambahkan_agenda_sidang_skripsi_operator');
    Route::post('menambahkan_agenda_sidang_skripsi_operator', [AgendaSidangSkripsiOperatorController::class, 'store'])->name('menambahkan_agenda_sidang_skripsi.store');
    Route::get('menambahkan_agenda_sidang_skripsi_operator/edit/{id}', [AgendaSidangSkripsiOperatorController::class, 'edit'])->name('menambahkan_agenda_sidang_skripsi.edit');
    Route::put('menambahkan_agenda_sidang_skripsi_operator/update/{id}', [AgendaSidangSkripsiOperatorController::class, 'update'])->name('menambahkan_agenda_sidang_skripsi.update');
    Route::delete('menambahkan_agenda_sidang_skripsi_operator/{id}', [AgendaSidangSkripsiOperatorController::class, 'destroy'])->name('menambahkan_agenda_sidang_skripsi.destroy');
    Route::get('menambahkan_agenda_sidang_skripsi_operator/{id}', [AgendaSidangSkripsiOperatorController::class, 'show'])->name('menambahkan_agenda_sidang_skripsi.show');

});

// Route::get('/', function () {
//     return view('welcome');
// });