<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plataformaModel extends Model
{
    use HasFactory;
    protected $table = 'plataforma_database';
    protected $fillable = ['nome'];
}

