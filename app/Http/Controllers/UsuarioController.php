<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuarioRequest;
use App\Http\Requests\UpdateUsuarioRequest;

class UsuarioController extends Controller
{
  function Registrar (Request $dados) {
    Usuario::create($dados->all());
  }

  function  Login (Request $dados) {}

  function Logout (Request $dados ) {}

  function  FotoUpload (Request $dados) {}

  function desativarConta (Request $dados ) {}

  function perfil (Request $dados ) {}

  function editar (Request $dados ) {}

  



}
