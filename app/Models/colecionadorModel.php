<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colecionadorModel extends Model
{
    use HasFactory;
    protected $table = 'colecionador_database';
    protected $fillable = ['nome'];
}

