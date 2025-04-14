<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votos extends Model
{
    use HasFactory;
    protected $table = 'Votos';
    protected $fillable = ['email', 'chapa', 'code', 'confirmed'];
}
