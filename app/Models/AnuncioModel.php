<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnuncioModel extends Model
{
    use HasFactory;

    protected $table = 'anuncio';

    protected $fillable = [
        'id',
        'titulo',
        'descricao',
        'preco',
        'data_publicacao',
        'id_proprietario',
        'id_veiculo',
    ];

    public function proprietario()
    {
        return $this->belongsTo(ProprietarioModel::class, 'id_proprietario');
    }

    public function veiculo()
    {
        return $this->belongsTo(VeiculoModel::class, 'id_veiculo');
    }
}
