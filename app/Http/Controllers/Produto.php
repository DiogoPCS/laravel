<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Produto extends Controller
{
    function visualizar() {
    return view('produtos-cadastrados');
    }
    function cadastrar() {
        echo 'cadastrar';
    }
}
