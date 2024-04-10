<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function fornecedores(){
        $fornecedor = ['Fornecedor 1'];
        return View('site.fornecedores', compact($fornecedor));
    }
}
