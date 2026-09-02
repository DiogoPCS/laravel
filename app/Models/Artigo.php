<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Artigo extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'subtitulo',
        'slug',
        'resumo',
        'conteudo',
        'thumbnail',
        'autor_id',
        'publicado',
        'publicado_em',
    ];

    protected $casts = [
        'publicado' => 'boolean',
        'publicado_em' => 'datetime',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function autor(): BelongsTo
    {
        return $this->belongsTo(User::class, 'autor_id');
    }

    public function scopePublicados(Builder $query): Builder
    {
        return $query->where('publicado', true)->orderByDesc('publicado_em');
    }

    public function thumbnailUrl(): ?string
    {
        return $this->thumbnail ? Storage::disk('public')->url($this->thumbnail) : null;
    }
}
