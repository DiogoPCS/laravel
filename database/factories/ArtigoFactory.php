<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artigo>
 */
class ArtigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = rtrim(fake()->sentence(6), '.');

        return [
            'titulo' => $titulo,
            'subtitulo' => fake()->sentence(10),
            'slug' => Str::slug($titulo).'-'.fake()->unique()->numberBetween(1, 100000),
            'resumo' => fake()->sentence(20),
            'conteudo' => implode("\n\n", fake()->paragraphs(6)),
            'thumbnail' => null,
            'autor_id' => null,
            'publicado' => true,
            'publicado_em' => now(),
        ];
    }
}
