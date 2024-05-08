<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores(){
        $fornecedores = [
            0 => ['nome'=> 'Fornecedor 1', 'status' => 'Ativo'],
            1 => ['nome'=> 'Fornecedor 2', 'status' => 'Inativo'],
            2 => ['nome'=> 'Fornecedor 3', 'status' => 'Ativo'],
        ];
        return View('site.fornecedores', compact('fornecedores'));
    }
}
