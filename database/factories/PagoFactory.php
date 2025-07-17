<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PagoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'monto'=>fake()->randomFloat(2, 10, 1000), 
            'estado'=>fake()->randomElement(['pendiente', 'completado']),
            'reserva_id'=> \App\Models\Reservas::factory(), 
            'fecha_pago'=>fake()->dateTimeBetween('now', '+1 month'),
        ];
    }
}
