<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\RedirectResponse::$withInput

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $request-> validate([
            'email'=> 'required',
            'password'=> 'required',
        ],[
            'email.required'=>'Email Wajib Di Isi',
            'password.required'=>'Password Wajib Di Isi',
        ]);

        $infologin = [
             'email' => $request->email,
             'password' => $request->password,
        ];

        if (Auth::attempt($infologin)){
            if(Auth::user()->role == 'mahasiswa'){
                return redirect('beranda_mahasiswa');
            }
            elseif(Auth::user()->role == 'dosen'){
                return redirect('beranda_dosen');
            }
            elseif(Auth::user()->role == 'operator'){
                return redirect('beranda_operator');
            }
        }else{
            return redirect('')->withErrors(
                'Username dan Password yang dimasukkan tidak sesuai'
            )->withInput();
        }
    }

    // Metode logout
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('');
    }
}
