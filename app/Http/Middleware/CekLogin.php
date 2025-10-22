<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CekLogin
{
    public function handle($request, Closure $next)
    {
        // jika belum login
        if (!Auth::check()) {
            return redirect('/admin/login'); // lempar ke login
        }

        return $next($request); // lanjut ke halaman
    }
}
