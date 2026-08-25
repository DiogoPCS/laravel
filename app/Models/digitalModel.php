<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class digitalModel extends Model
{
    use HasFactory;
    protected $table = 'digital_database';
    protected $fillable = ['nome'];
}

