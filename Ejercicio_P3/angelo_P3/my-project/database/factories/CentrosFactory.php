<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\centros>
 */
class CentrosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define los atributos y valores predeterminados para la creación de instancias de Centros.
        return [
            'name' => fake()->text(25),//genera texto hasta de 25 caracteres
            'address' => fake()->text(30),
            'CP' => fake()->numberBetween(8010,8090),//genera numero entre 8010 y 8090
            'City' => fake()->text(30)
        ];
    }
}
