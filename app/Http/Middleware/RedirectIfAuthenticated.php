<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('dashboard_mahasiswa');
        }
        elseif (Auth::guard($guard)->check()) {
            return redirect('dashboard_dosen');
        }
        elseif (Auth::guard($guard)->check()) {
            return redirect('beranda_operator');
        }

        return $next($request);
    }
}
