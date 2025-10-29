<?php

namespace App\Models; // <- Note o namespace correto

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model // <- Note que "extends Model"
{
    use HasFactory;

    /**
     * Os atributos que podem ser atribuídos em massa.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'preco',
        'estoque',
        'categoria',
        'descricao',
        'foto_1',
        'foto_2',
        'foto_3',
        // 'descricao' NÃO está aqui porque não existe na sua migration
    ];
}