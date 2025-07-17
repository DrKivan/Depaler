<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PropiedadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'direccion' => $this->faker->address(),
            'precio_mensual' => $this->faker->numberBetween(50, 500),
            'precio_dia' => $this->faker->numberBetween(10, 100),
            'num_habitaciones' => $this->faker->numberBetween(1, 5),
            'num_banos' => $this->faker->numberBetween(1, 3),
            'estado' => $this->faker->randomElement(['disponible', 'no disponible']),
            'aprobada' => false, // Asumiendo que es un booleano para
            // indicar si la propiedad ha sido aprobada por un moderador
            'usuario_id' => \App\Models\Usuarios::factory(), // Relación con el usuario propietario
        ];
    }
}
