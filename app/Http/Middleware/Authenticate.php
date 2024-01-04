<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
{
    if ($request->expectsJson()) {
        return null; // Tangani permintaan JSON sesuai kebutuhan aplikasi Anda
    }

    // Tambahkan logika untuk menangani redireksi berdasarkan role
    if (auth()->check()) {
        $role = auth()->user()->role;

        switch ($role) {
            case 'admin':
                return route('dashboard.index');
                break;
            case 'user':
                return route('home.berita');
                break;
            default:
                return route('halaman.login');
        }
    }

    return route('halaman.login');
}

}
