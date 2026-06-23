<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class LoginAlunoModel extends Authenticatable
{
    use HasFactory;

    protected $table = 'alunos';
    
    // ADICIONADO: 'area_cientifica' liberado para preenchimento
    protected $fillable = ['nome', 'email', 'senha', 'area_cientifica']; 

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
