<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'id', 
        'created_at',
        'updated_at',
        'nome',
        'email',
        'senha',
        'foto',
        'status',
        'ativado'
    ];

    
}
