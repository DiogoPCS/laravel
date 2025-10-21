<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class LoginController extends Controller
{
    /**
     * Exibe o formulário de login.
     */
    public function index() {
        return view('login');
    }

    /**
     * Processa a tentativa de login do usuário.
     */
    public function store(Request $request)
    {
        // 1. Validação (Impede dados nulos ou errados)
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => [
                'required',
                Password::min(8)->letters()->numbers()
            ],
        ]);

        // 2. Tentativa de Autenticação
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // SUCESSO: Redireciona para a página 'home'
            return redirect()->intended('/home');
        }

        // 3. FALHA: Volta para a página anterior (login)
        return back()->withErrors([
            'email' => 'O e-mail ou a senha estão incorretos.',
        ])->onlyInput('email'); // <-- Esta linha faz a mágica!
    }
}