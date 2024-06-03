<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\program;
use App\Models\type_formation;
use Illuminate\Validation\Rules\Unique;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formation>
 */
class FormationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nome_forma'=>$this->faker->title,
            'duree_forma'=>$this->faker->numberBetween(1,20),
            'tarif_forma'=>$this->faker->numberBetween(10000,999999),
            'cod_typeformation'=> type_formation::inRandomOrder()->first()->id,
            'cod_program'=> program::inRandomOrder()->first()->id,

        ];
    }
}
