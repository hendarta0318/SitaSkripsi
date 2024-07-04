<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileOperatorController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile_operator', compact('user'));
    }
}
