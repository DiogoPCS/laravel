<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<<< HEAD:app/Models/Contato.php
class Contato extends Model
========
class LogAcesso extends Model
>>>>>>>> montagem-conteudo:app/Models/LogAcesso.php
{
    use HasFactory;

    protected $fillable = ['log'];
}
