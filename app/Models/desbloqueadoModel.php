<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class desbloqueadoModel extends Model
{
    use HasFactory;
    protected $table = 'desbloqueado_database';
    protected $fillable = ['nome'];
}

