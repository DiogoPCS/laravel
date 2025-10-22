<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdutoCadastrarController extends Controller
{
    public function index() {
        // A função view() carrega o arquivo da pasta resources/views
    return view('produtos-cadastrados');
    }
}
