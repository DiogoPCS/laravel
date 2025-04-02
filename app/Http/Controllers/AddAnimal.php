<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddAnimal extends Controller
{
    function addAnimal(){
        return view('add-animal');
    }
 
}
