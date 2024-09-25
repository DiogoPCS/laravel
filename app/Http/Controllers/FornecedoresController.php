<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index(){
        return View('site.fornecedor.index', ['pagina' => 'Página de']);
    }

    public function listar(){
        return View('site.fornecedor.listar', ['pagina' => 'Página de']);
    }

    public function adicionar(){
        return View('site.fornecedor.adicionar', ['pagina' => 'Página de']);
    }
}
