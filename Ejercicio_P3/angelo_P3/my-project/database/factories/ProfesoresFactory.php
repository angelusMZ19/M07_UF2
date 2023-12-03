<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profesores>
 */
class ProfesoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Define los atributos y valores predeterminados para la creación de instancias de profesores
        return [
            'name' => fake()->text(25),//genera texto de 25 caracteres
            'surname' => fake()->text(25),
            'email' => fake()->text(15),
            'password' => fake()->numberBetween(1,100), //genera numero entre 1 y 100
            'active' => fake()->randomElement([true, false])//random entre 0 y 1
            
        ];
    }
}
