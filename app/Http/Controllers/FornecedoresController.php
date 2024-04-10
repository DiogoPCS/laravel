<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores(){
        return View('site.fornecedores', ['pagina' => 'Página de']);
    }
}
