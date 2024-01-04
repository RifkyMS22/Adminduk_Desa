<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle($request, Closure $next, ...$roles)
    {
        if (Auth::check()) {
            $user = Auth::user();

            foreach ($roles as $role) {
                if ($user->hasRole($role)) {
                    return $next($request);
                }
            }

            // Jika pengguna tidak memiliki peran yang diizinkan
            return redirect('/')->with('error', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
        }

        // Jika pengguna belum login
        return redirect()->route('halaman.login')->with('error', 'Anda harus login terlebih dahulu.');
    
    }
}
