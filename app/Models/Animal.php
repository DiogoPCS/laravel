<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $table = 'animal';
    protected $fillable = ['nome','cor', 'peso', 'idade','raca','especie'];
}
