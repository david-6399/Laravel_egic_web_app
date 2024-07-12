<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\support_cours>
 */
class support_coursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->jobTitle(),
            'contenu' => $this->faker->imageUrl(),
            'date' => $this->faker->date('y/m/d','now'),
            'nome_prof' => $this->faker->lastName(),
            'cod_module' => $this->faker->numberBetween(1,5),
        ];
    }
}
