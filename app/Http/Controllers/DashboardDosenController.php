<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardDosenController extends Controller
{
    public function showDashboardDosenForm()
    {
        return view('dashboard_dosen');
    }
}
