<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Aula extends Model
{
    use HasFactory;

    protected $fillable = [
        'curso_id',
        'titulo',
        'descricao',
        'thumbnail',
        'duracao_minutos',
        'ordem',
        'video_url',
    ];

    public function curso(): BelongsTo
    {
        return $this->belongsTo(Curso::class);
    }

    public function thumbnailUrl(): ?string
    {
        return $this->thumbnail ? Storage::disk('public')->url($this->thumbnail) : null;
    }

    public function videoUrl(): ?string
    {
        return $this->video_url ? Storage::disk('public')->url($this->video_url) : null;
    }
}
