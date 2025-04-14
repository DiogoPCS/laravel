<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Votacao extends Model
{
    use HasFactory;
    protected $table = 'Votacao';
    protected $fillable = ['email', 'chapa', 'code', 'confirmed'];
}
