<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardMahasiswaController extends Controller
{
    public function showDashboardMhsForm()
    {
        return view('dashboard_mahasiswa');
        // return view('app_adminkit_mahasiswa');
    }
}
