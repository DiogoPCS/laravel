<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Votos;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;


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

        // Validação do domínio do e-mail
        $dominioPermitido = 'etec.sp.gov.br';
        $emailDominio = explode('@', $request->email)[1] ?? '';
        
        if (strtolower($emailDominio) !== strtolower($dominioPermitido)) {
            return redirect()->route('votar.form')
                            ->withErrors(['email' => 'Apenas e-mails @etec.sp.gov.br são permitidos para votação.'])
                            ->withInput();
        }

        $alreadyVoted = Votos::where('email', '=', $request->email)->first();

        if ($alreadyVoted) {
            return redirect()->route('votar.form')->with('success', 'Seu voto já foi registrado!');
        }

        $code = Str::random(40);

        // Salvar o voto no banco de dados
        $voto = new Votos();
        $voto->email = $request->email;
        $voto->chapa = $request->chapa;
        $voto->code = $code;
        $voto->confirmed = false;
        $voto->save();

        // Enviar e-mail de confirmação
        // Enviar e-mail de confirmação
        // Enviar e-mail de confirmação
        $link = route('votar.confirmar', ['code' => $code]);

        Mail::send('template-email', ['chapa' => $request->chapa, 'link' => $link], function ($message) use ($request) {
            $message->to($request->email)
                    ->subject('Confirmação de voto – Grêmio Estudantil');
        });
        
        return redirect()->route('votar.form')->with('success', 'Intenção de voto registrada! Verifique seu e-mail para confirmação. Lembre-se ainda, de verificar a caixa de spam. Pode-se levar até um minuto para o recebimento.');
    }

    public function confirmar(string $code) {
        Log::info("Link de confirmação acessado", [
            'code' => $code,
            'user_agent' => request()->header('User-Agent'),
            'ip' => request()->ip(),
        ]);
    
        // Votos::where('code', $code)->update(['confirmed' => 1]);
        return view('confirmar', compact('code'));
    }

    public function validar(string $code) {
        Votos::where('code', $code)->update(['confirmed' => 1]);
        return redirect()->route('votar.confirmar', ['code' => $code])->with('success', 'Seu voto foi confirmado com sucesso!');
    }

    public function login() {
        return view('login');
    }

    public function access(Request $request) {
        $email = $request->email;
        $password = $request->password;

        if ($email != 'abc')
            return redirect()->route('login')->with('message', 'Login incorreto!');

        if ($password != '123')
            return redirect()->route('login')->with('message', 'Login incorreto!');

        //facade para o e-mail 
        session(['email' => $email]);
        return redirect()->route('result');
    }

    public function result() {
        
        if (!session('email')) {
            return redirect()->route('login')->with('message', 'Realize o login.');
        }

        $totalVotos = Votos::count();
        $votosConfirmados = Votos::where('confirmed', 1)->count();

        $votos = Votos::orderBy('created_at', 'desc')->paginate(15);

        $votosPorChapa = Votos::select('chapa')
            ->selectRaw('count(*) as total')
            ->groupBy('chapa')
            ->pluck('total', 'chapa')
            ->toArray();

        $votosConfirmadosPorChapa = Votos::where('confirmed', 1)
            ->select('chapa')
            ->selectRaw('count(*) as total')
            ->groupBy('chapa')
            ->pluck('total', 'chapa')
            ->toArray();

            return view('dash', compact(
                'votos',
                'totalVotos',
                'votosConfirmados',
                'votosPorChapa',
                'votosConfirmadosPorChapa'
            ));
    }
}