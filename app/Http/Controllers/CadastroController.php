<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index()
    {
        return view('cadastra-produto');
    }
}
