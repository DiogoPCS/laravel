<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Votos;
use Illuminate\Support\Str;


class VotoController extends Controller
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
        
        $alreadyVoted = Votos::where('email', '=', $request->email)->first();

        if ($alreadyVoted) {
            return redirect()->route('votar.form')->with('success', 'Seu voto já foi registrado!');
        }

        $code = Str::random(40);

        // Aqui você pode salvar o voto em um banco de dados
        $voto = new Votos();
        $voto->email = $request->email;
        $voto->chapa = $request->chapa;
        $voto->code = $code;
        $voto->confirmed = false;
        $voto->save();

        // Enviar e-mail de confirmação
        Mail::raw("Sua solicitação de voto para {$request->chapa} está aguardando. Para que o voto seja efetivado, acesse o link: <a href='http://127.0.0.1:8000/confirmar/{$code}' target='_blank'>Clique para Confirmar seu Voto<a>", function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Confirmação de voto – Grêmio Estudantil');
        });
        
        return redirect()->route('votar.form')->with('success', 'Intenção de voto registrada! Verifique seu e-mail para confirmação. Lembre-se ainda, de verificar a caixa de spam.');
    }

    public function confirmar(string $code) {
        // $voto = Votos::where('code', '=', $code)->first();
        Votos::whereIn('code', [$code])->update(['confirmed' => 1]);

        // if ($voto) {
        //     echo 'Encontrou';
        // } else {
        //     echo 'Não encontrou';
        // }
        
        
        return view('confirmar');
    }
}
