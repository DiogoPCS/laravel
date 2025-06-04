<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropietarioModel extends Model
{
    use HasFactory;
    protected $table = 'veiculo';
    protected $fillabel = ['marca', 'modelo', 'ano', 'placa', 'cor'];
}
