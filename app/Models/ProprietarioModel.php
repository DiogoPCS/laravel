<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprietarioModel extends Model
{
    use HasFactory;
    protected $table = 'proprietario';
    protected $fillable = ['id', 'marca', 'modelo', 'ano', 'placa', 'cor'];
}
