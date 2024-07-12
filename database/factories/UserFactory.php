<?php

namespace Database\Factories;

use Faker\Extension\CountryExtension;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'address' => $this->faker->city(),
            'usertype' => rand(1,3),
            'phone' => $this->faker->phoneNumber(),
            'password' => $this->faker->password(), // password
            'remember_token' => Str::random(10),
            'created_at' => $this->faker->dateTimeBetween('2024-01-01','now')
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
