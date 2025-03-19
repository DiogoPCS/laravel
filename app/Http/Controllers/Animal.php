<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Animal extends Controller
{
    function animal(){
        return view('animal');
    }
}
