<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class corModel extends Model
{
    use HasFactory;
    protected $table = 'cor_database';
    protected $fillable = ['nome'];
}

