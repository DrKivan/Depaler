<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Apelaciones>
 */
class ApelacionesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'motivo' => $this->faker->sentence(),
            'fecha_apelacion' => $this->faker->dateTime(),
            'baneo_id' => \App\Models\Baneos::factory(), // Relación con el baneo asociado
        ];
    }
}
