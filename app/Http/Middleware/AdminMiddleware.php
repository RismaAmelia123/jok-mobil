<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah admin sudah login
        if (!session()->has('admin_id')) {
            return redirect()->route('admin.login')
                ->withErrors([
                    'email' => 'Silakan login terlebih dahulu.'
                ]);
        }

        return $next($request);
    }
}