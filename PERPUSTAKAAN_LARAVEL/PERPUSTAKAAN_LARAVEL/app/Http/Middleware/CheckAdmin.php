<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('is_admin')) {
            return redirect()->route('login')->with('error', 'Anda harus login sebagai admin!');
        }

        return $next($request);
    }
}
