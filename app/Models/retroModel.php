<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class retroModel extends Model
{
    use HasFactory;
    protected $table = 'retro_database';
    protected $fillable = ['nome'];
}

