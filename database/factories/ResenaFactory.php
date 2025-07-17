<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Resena>
 */
class ResenaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comentario' => fake()->text(200), 
            'calificacion' => fake()->numberBetween(1, 5), 
            'usuario_id' => \App\Models\Usuario::factory(), 
            'propiedad_id' => \App\Models\Propiedad::factory(), 
        ];
    }
}
