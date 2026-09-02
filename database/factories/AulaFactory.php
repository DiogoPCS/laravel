<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Aula>
 */
class AulaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'curso_id' => Curso::factory(),
            'titulo' => rtrim(fake()->sentence(4), '.'),
            'descricao' => fake()->sentence(12),
            'duracao_minutos' => fake()->numberBetween(5, 45),
            'ordem' => 0,
            'video_url' => null,
        ];
    }
}
