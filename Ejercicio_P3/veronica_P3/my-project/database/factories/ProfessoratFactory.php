<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\professorat>
 */
class ProfessoratFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(30),
            'surname' => fake()->text(30),
            'email' => fake()->text(30),
            'password' => fake()->numberBetween(100,999),
            'active' => fake()->randomElement([true, false])
        ];
    }
}
