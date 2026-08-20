<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usadoModel extends Model
{
    use HasFactory;
    protected $table = 'usado_database';
    protected $fillable = ['nome'];
}


