<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;


    protected $table = ['Usuarios'];
    protected $fillable = [
    'id',
    'created_at', 
    'uptated_at',
    'nome',
    'email',
    'foto',
    'senha',
    'status',
    'ativo'
    
    ];
    
}
