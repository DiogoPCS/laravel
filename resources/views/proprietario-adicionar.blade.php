<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropriedadeController extends Controller
{
    function adicionar(){
			return view('propriedades-adicionar');
    }
}