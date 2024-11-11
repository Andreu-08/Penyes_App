<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleRedirect
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role == 1) {
                // Redirigir al back office si el rol es 1
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 2) {
                // Redirigir al front office si el rol es 2
                return redirect()->route('front.home');
            }
        }

        return $next($request);
    }
}
