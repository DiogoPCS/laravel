<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fornecedor extends Model
{
    use SoftDeletes;
    
    protected $table = 'fornecedores';
    protected $fillable = ['nome', 'site', 'uf', 'email'];
    use HasFactory;
}
