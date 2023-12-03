<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define los atributos y valores predeterminados para la creación de instancias de Alumnos.
        return [
            'name' => fake()->text(25),
            'surname' => fake()->text(25),
            'email' => fake()->text(15),
            'password' => fake()->numberBetween(1,100),
            'active' => fake()->randomElement([true, false])
        ];
    }
}
