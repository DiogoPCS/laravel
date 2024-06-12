<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];
    use HasFactory;
}
