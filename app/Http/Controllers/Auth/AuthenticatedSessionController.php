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

        if (auth()->user()->status != 'active') {
            auth()->logout();
            return back()->with('error', 'Your account is not active.');
        }

        $request->session()->regenerate();

        if (auth()->user()->role == 'admin') {
            return redirect()->intended(route('admin.dashboard', absolute: false));
        } elseif (auth()->user()->role == 'registrar') {
            return redirect()->intended(route('registrar.dashboard', absolute: false));
        } elseif (auth()->user()->role == 'headregistrar') {
            return redirect()->intended(route('head-registrar.dashboard', absolute: false));
        }
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
