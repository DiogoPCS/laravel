<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\ClienteModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClienteModel>
 */
class ClienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nome" => $this->faker->name
        ];
    }
}
