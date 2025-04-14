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
        Mail::raw("Sua solicitação de voto para {$request->chapa} está aguardando. Para que o voto seja efetivado, acesse o link:", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Confirmação de voto – Grêmio Estudantil');
        });
        
        return redirect()->route('votar.form')->with('success', 'Intenção de voto registrada! Verifique seu e-mail para confirmação. Lembre-se ainda, de verificar a caixa de spam.');
    }

    public function confirmar(string $code) {
        dd($code);
        return view('confirmar');
    }
}
