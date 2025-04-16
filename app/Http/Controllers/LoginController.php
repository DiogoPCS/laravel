<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class LoginController extends Controller
{
    public function login(Request $request){

        $erro = '';

        if ($request->get('erro') == 1) {
            $erro = 'Usuário e/ou senha não existe(m)';
        }

        return View('site.login', ['pagina' => 'Página de ', 'erro' => $erro]); // PASSANDO O ERRO COMO PARÃMETRO PARA VIEW
    }

    public function autenticar(Request $request) {
        // return 'Chegamos até aqui!';

        //REALIZANDO A VALIDAÇÃO
        $regras = [
            'email' => 'email',
            'password' => 'required'
        ];

        $feedback = [
            'email.email' => 'O campo usuário (e-mail) é obrigatório',
            'password.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($regras, $feedback);


        // RECUPERANDO DADOS DO FORMULÁRIO
        $email = $request->get('email');
        $password = $request->get('password');

        echo "E-mail: $email <br>";
        echo "Senha: $password <br>";

        // print_r($request->all());        

        //RECUPERANDO DO BANCO DE DADOS
        $user = new User();

        $usuario = $user->where('email', $email)
                        ->where('password', $password)
                        ->get()
                        ->first();

        if(isset($usuario->name)){
            // echo "Usuário encontrado";
            session_start();
            $_SESSION['name'] = $usuario->name;
            $_SESSION['email'] = $usuario->email;
            
            dd($_SESSION);
        } else {
            // echo "Usuário não encontrado";
            return redirect()->route('site.login', ['erro' => 1]);
        }

    }
}
