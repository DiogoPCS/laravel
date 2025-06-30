<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProprietarioModel extends Model
{
    use HasFactory;

    protected $table = 'proprietario'; // Nome da tabela

    protected $fillable = [
        'id',      // Opcional, pode omitir se for autoincremento
        'nome',
        'cpf',
        'telefone',
        'email',
    ];

    public function anuncios()
    {
        return $this->hasMany(AnuncioModel::class, 'id_proprietario');
    }
}
