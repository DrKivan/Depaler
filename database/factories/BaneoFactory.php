<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Baneos>
 */
class BaneoFactory extends Factory
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
            'fecha_baneo' => $this->faker->dateTime(),
            'estado' => $this->faker->randomElement(['activo', 'revertido']),
            'usuario_id' => \App\Models\Usuario::factory(), // Relación con el
        ];
    }
}
