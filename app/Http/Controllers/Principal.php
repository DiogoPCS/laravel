<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function principal(){
        return View('principal');
    }
    function teste(){
        echo 'Pausão';
    }
}


