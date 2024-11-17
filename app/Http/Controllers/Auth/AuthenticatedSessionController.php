<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();

        // Redirige según el rol del usuario
        if (Auth::user()->role == 1) {
            // Usuario con rol 1 (admin), redirige al back office
            return redirect()->route('back.backHome');
        } else {
            // Usuario con rol 2 (usuario regular), redirige al front office
            return redirect()->route('front.index');
        }
    }

    protected function authenticated(Request $request, $user)
    {
        // Verificar el rol del usuario y redirigir en consecuencia
        if ($user->role == 1) {
            return redirect('/admin'); // Redirige al back office
        }

        // Si el rol es 2, redirige al front office
        return redirect('/home');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
