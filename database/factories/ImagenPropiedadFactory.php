<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ImagenPropiedadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ruta' => $this->faker->imageUrl(640, 480, 'property', true, 'Faker'),
            'propiedad_id' => \App\Models\Propiedad::factory(), // Relación
        ];
    }
}
