<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class retroController extends Controller
{
    function index(){ 
        return view('retro.index');
    }

    function add(Request $dados) { 
        $retro = new \App\Models\retroModel();
        $retro::create($dados->all());
    }
}
