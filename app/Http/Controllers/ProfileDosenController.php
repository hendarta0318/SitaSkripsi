<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileDosenController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile_dosen', compact('user'));
    }
}
