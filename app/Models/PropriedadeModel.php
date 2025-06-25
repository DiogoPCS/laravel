<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropriedadeModel extends Model
{
    use HasFactory;
    protected $table = 'propriedade';
    protected $fillable = ['id', 'nome', 'cpf', 'telefone', 'email'];
}
