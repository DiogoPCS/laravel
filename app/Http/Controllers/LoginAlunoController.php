<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginAlunoModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginAlunoController extends Controller
{
    public function index() {
        return view('loginaluno.index');
    }

    public function cadastro() {
        return view('loginaluno.cadastro');
    }

    public function adicionar(Request $request) { 
        // Validação dos dados enviados pelo formulário
        $request->validate([
            'nome'            => 'required|string|max:255',
            'email'           => 'required|email|unique:alunos,email',
            'senha'           => 'required|min:6',
            'area_cientifica' => 'required|string' // ADICIONADO: Validação do campo
        ]);

        // Cria o aluno no banco de dados
        $aluno = LoginAlunoModel::create([
            'nome'            => $request->nome,
            'email'           => $request->email,
            'senha'           => Hash::make($request->senha),
            'area_cientifica' => $request->area_cientifica // ADICIONADO: Gravando no banco
        ]);

        // Faz o login automático e salva a sessão (Remember Me)
        Auth::guard('alunos')->login($aluno, true);

        return redirect()->route('dashboard')->with('sucesso', 'Aluno cadastrado e logado!');
    }

    public function logar(Request $request) {
        $credenciais = $request->validate([
            'email' => 'required|email',
            'senha' => 'required'
        ]);

        if (Auth::guard('alunos')->attempt(['email' => $credenciais['email'], 'password' => $credenciais['senha']], true)) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors(['email' => 'E-mail ou senha incorretos.']);
    }

    public function logout(Request $request) {
        Auth::guard('alunos')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginaluno.index');
    }

    public function remover(Request $dados) {  }
    public function atualizar(Request $dados) {  }
    public function consultar() {  }
}
