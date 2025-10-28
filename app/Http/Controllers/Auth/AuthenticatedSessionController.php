<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Validation\ValidationException;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        // Return the project's custom login view (resources/views/login.blade.php)
        return view('login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        // First, try the standard authentication (uses Auth::attempt under the hood)
        try {
            $request->authenticate();

            $request->session()->regenerate();

            return redirect()->intended('/produtos-cadastrados');
        } catch (ValidationException $e) {
            // Fallback: try a direct lookup + Hash::check so we can give clearer diagnostics
            $email = $request->input('email');
            $password = $request->input('password');

            $user = User::where('email', $email)->first();

            if ($user && Hash::check($password, $user->password)) {
                // If the hash matches, log the user in and regenerate session
                Auth::login($user, $request->boolean('remember'));
                $request->session()->regenerate();
                return redirect()->intended('/produtos-cadastrados');
            }

            // Otherwise rethrow the original validation exception so the view shows the standard message
            throw $e;
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
