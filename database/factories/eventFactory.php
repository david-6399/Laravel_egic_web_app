<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\event>
 */
class eventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titre' => $this->faker->realTextBetween(10,50),
            'description' => $this->faker->text(200),
            'event_start' => $this->faker->dateTimeBetween('2024/01/01','now'),
            'event_end' => $this->faker->dateTimeBetween('now','2024/12/30'),
            'abonnement' => rand(1,20),
            'image_path' => $this->faker->imageUrl()
        ];
    }
}
