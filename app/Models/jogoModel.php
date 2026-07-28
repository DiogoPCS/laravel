<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jogoModel extends Model
{
    use SoftDeletes;

    protected $table = 'jogos';

    protected $fillable = [
        'nome',
        'quantidade',
        'id_plataforma',
        'id_estado',
        'id_retro',
        'id_colecionador'
    ];

    public function plataforma()
    {
        return $this->belongsTo(Plataforma::class, 'id_plataforma');
    }

    public function estado()
    {
        return $this->belongsTo(Usado::class, 'id_estado');
    }

    public function retro()
    {
        return $this->belongsTo(Retro::class, 'id_retro');
    }

    public function colecionador()
    {
        return $this->belongsTo(Colecionador::class, 'id_colecionador');
    }
}
