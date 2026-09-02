<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo = fake()->unique()->sentence(3);

        return [
            'titulo' => rtrim($titulo, '.'),
            'slug' => Str::slug($titulo).'-'.fake()->unique()->numberBetween(1, 100000),
            'descricao' => fake()->paragraph(2),
            'imagem' => null,
            'nivel' => fake()->randomElement(['iniciante', 'intermediario', 'avancado']),
            'carga_horaria' => fake()->numberBetween(8, 60),
        ];
    }
}
