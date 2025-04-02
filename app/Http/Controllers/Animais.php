<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class Animais extends Controller
{
    // camelCase
    function animal(){
        return view('add-animal');
    }
    
    function addAnimal(Request $request){
        // dd($request->all());
        
        $animal = new Animal();
        $animal->create($request->all());

        return view('add-animal');
    }
}
