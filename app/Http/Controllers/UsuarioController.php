<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   
    function registrar(Request $dados) {
        return $dados;`
        // Usuario::create($dados->all());
    }

    function login(Request $dados) { }

    function logout(Request $dados) { }

    function fotoUpload(Request $dados) { }
    
    function desativarConta(Request $dados) { }
    
    function perfil(Request $dados) { }
    
    function editar(Request $dados) { }
}
