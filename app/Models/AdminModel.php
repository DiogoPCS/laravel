<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    use HasFactory;
    protected $table = 'admin';
    protected $fillable = ['nome','telefone','email', 'cpf', 'usuario', 'senha', 'status'];
}
