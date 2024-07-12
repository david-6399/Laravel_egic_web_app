<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contenu'=> $this->faker->text(200),
            'user_id' =>$this->faker->numberBetween(1,10),
            'formation_id' =>$this->faker->numberBetween(1,10),
            // 'event_id' =>$this->faker->unique()->numberBetween(1,10),
        ];
    }
}
