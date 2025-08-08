<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class UsuarioController extends Controller
{
    public function registrar(Request $request)
    {

        
        $request->validate([
            'nome' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:usuarios',
            'senha' => 'required|string|min:8',
        ]);
        
        
        $usuario = Usuario::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
            'foto' => 'https://cdn0.iconfinder.com/data/icons/user-pictures/100/unknown2-1024.png',
            'status' => 'ativo',
            'ativado' => true,
        ]);
        
        // Criar token de acesso
        $token = $usuario->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'Usuário registrado com sucesso',
            'access_token' => $token,
            'token_type' => 'Bearer',
            'usuario' => $usuario
        ], 201);
    }

    function login(Request $dados) { }

    function logout(Request $dados) { }

    function desativarConta(Request $dados) { }

    function fotoUpload(Request $dados) { }

    function editar(Request $dados) { }

    function perfil(Request $dados) { }

}
