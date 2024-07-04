<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileMahasiswaController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile_mahasiswa', compact('user'));
    }
}
