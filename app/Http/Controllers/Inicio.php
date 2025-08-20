<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//PascalCase
class Inicio extends Controller
{
    //CamelCase
    function inicio(){
        return view('inicio');
    }
}
