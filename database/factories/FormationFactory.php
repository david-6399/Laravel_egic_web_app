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
        $array = [1,2,3,4,5,6,7,8,9,10];
        return [
            'nome_forma'=>$this->faker->realTextBetween(10,50),
            'duree_forma'=>$this->faker->numberBetween(1,20),
            'tarif_forma'=>$this->faker->numberBetween(10000,999999),
            'cod_typeformation'=> rand(1,5),
            'image_path' => $this->faker->imageUrl(),
            'cod_program'=> $this->faker->unique()->numberBetween(1,10),
            'favoris'=> rand(1,10),
            'created_at' => $this->faker->dateTimeBetween('2024-01-01','now')
        ];
    }
}
