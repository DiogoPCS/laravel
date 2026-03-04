<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Aluno extends Controller
{
    function boletim(){
        echo 'Sua nota foi:';
    }
    function rematricula(){
        echo 'Pagina de rematricula';
    }
    function enviarEmail(){
        echo 'Seu email Institucional';
    }
    function retirar_documentos(){
        echo 'Peça seus documentos';
    }
    function controle_faltas(){
        echo 'Pagina para controle de faltas';
    }
    function login(){
        echo 'faça seu login';
    }
}


