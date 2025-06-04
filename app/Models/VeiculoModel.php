<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VeiculoModel extends Model
{
    use HasFactory;
    protected $table = 'veiculo';
    protected $filabe = ['marca', 'modelo', 'ano', 'placa', 'cor'];
}
