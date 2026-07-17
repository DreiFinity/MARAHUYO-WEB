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

        // Create a custom token in userlogin table for this session
        $token = \Illuminate\Support\Str::random(60);
        \Illuminate\Support\Facades\DB::table('userlogin')->insert([
            'user_id' => Auth::id(),
            'token' => $token,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $request->session()->put('userlogin_token', $token);

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Remove token from userlogin table
        if ($token = $request->session()->get('userlogin_token')) {
            \Illuminate\Support\Facades\DB::table('userlogin')->where('token', $token)->delete();
        }
        if (Auth::check()) {
            \Illuminate\Support\Facades\DB::table('userlogin')->where('user_id', Auth::id())->delete();
        }

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
