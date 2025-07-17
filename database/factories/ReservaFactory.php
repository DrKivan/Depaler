<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ReservaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha_inicio' => fake()->dateTimeBetween('now', '+1 month'), 
            'fecha_fin' => fake()->dateTimeBetween('+1 month', '+2 months'), 
            'estado' => fake()->randomElement(['pendiente', 'confirmada', 'cancelada']), 
            'usuario_id' => \App\Models\Usuario::factory(), 
            'propiedad_id' =>  \App\Models\Propiedad::factory(), 
        ];
    }
}
