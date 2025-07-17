<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Denuncias>
 */
class DenunciaFactory extends Factory
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
            'reportado_id' => \App\Models\Usuario::factory(), // Relación con el usuario denunciado
            'reportante_id' => \App\Models\Usuario::factory(), // Relación con el usuario que reporta
        ];
    }
}
