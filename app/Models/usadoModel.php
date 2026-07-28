<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usadoModel extends Model
{
    use HasFactory;
    protected $table = 'jogos';

    protected $fillable = ['nome'];


    public function jogos()
    {
        return $this->hasMany(Jogo::class, 'id_estado');
    }

}
