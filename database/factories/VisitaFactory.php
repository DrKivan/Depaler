<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VisitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_hora' => fake()->dateTimeBetween('now', '+1 month'), 
            'usuario_id' => \App\Models\Usuario::factory(), 
            'propiedad_id' => \App\Models\Propiedad::factory(), 
            'estado' => fake()->randomElement(['pendiente', 'confirmada', 'cancelada']), 
        ];
    }
}
