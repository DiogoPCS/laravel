<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function produtos(){
        return View('site.produtos');
    }
}
