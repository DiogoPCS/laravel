<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teste>
 */
class ContatoModelFactory extends Factory
{
    /**
    * Define the model's default state.
    *
    * @return array<string, mixed>
    */
    public function definition(): array
    {
        return [
            "nome" => $this->faker->name,
            "email" => $this->faker->unique()->safeEmail
        ];
    }
}
