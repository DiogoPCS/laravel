<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class VotacaoController extends Controller
{
    public function form()
    {
        return view('votacao');
    }

    public function enviarVoto(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'chapa' => 'required',
        ]);

        // Aqui você pode salvar o voto em um banco de dados

        // Enviar e-mail de confirmação
        // Mail::raw("Seu voto para {$request->chapa} foi registrado com sucesso.", function ($message) use ($request) {
        //     $message->to($request->email)
        //             ->subject('Confirmação de voto – Grêmio Estudantil');
        // });
        Mail::raw('Este é um e-mail de teste via Brevo!', function ($message) {
            $message->to('diogo.paulino.santos@hotmail.com')
                    ->subject('Teste Brevo');
        });

        return redirect()->route('votar.form')->with('success', 'Voto enviado com sucesso! Verifique seu e-mail para confirmação.');
    }
}
