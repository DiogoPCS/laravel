<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExibirProdutoController extends Controller
{
    public function index()
    {
        // The view file is located at resources/views/exibir-produto/exibir-produto.blade.php
        return view('exibir-produto');
    }

}


