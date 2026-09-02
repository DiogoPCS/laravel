<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Curso extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'slug',
        'descricao',
        'imagem',
        'nivel',
        'carga_horaria',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function aulas(): HasMany
    {
        return $this->hasMany(Aula::class)->orderBy('ordem');
    }

    public function alunos(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'curso_user')
            ->withPivot('matriculado_em')
            ->withTimestamps();
    }
}
