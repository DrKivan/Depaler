<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuariosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'contrasena' => bcrypt('contrasena'), // Contraseña por defecto
            'telefono' => $this->faker->phoneNumber(),
            'direccion' => $this->faker->address(),
            'fecha_nacimiento' => $this->faker->date(),
            'tipo_usuario' => $this->faker->randomElement(['usuario', 'propietario', 'moderador']),
        ];
    }
}
