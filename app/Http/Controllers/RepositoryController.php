<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function showRepositoryForm()
    {
        return view('repository');
    }
    public function showRepositoryDosenForm()
    {
        return view('repository_dosen');
    }
    public function showRepositoryOperatorForm()
    {
        return view('repository_operator');
    }
}
