<?php

namespace Database\Factories;

use App\Models\formation;
use App\Models\formation_débouché;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\formation_débouché>
 */
class formation_débouchéFactory extends Factory
{
   protected $model = formation_débouché::class;

    // Static array to hold combinations
    protected static $combinations = [];

    public function definition(): array
    {
        // Initialize combinations if empty
        if (empty(static::$combinations)) {
            $this->generateCombinations();
        }

        // Get a unique combination
        $combination = array_pop(static::$combinations);

        return [
            'formation_id' => $combination['formation_id'],
            'débouché_id' => $combination['débouché_id'],
        ];
    }

    protected function generateCombinations()
    {
        // Generate all possible combinations
        for ($i = 1; $i <= 10; $i++) { // Adjust the range according to your formations count
            for ($j = 1; $j <= 5; $j++) { // Adjust the range according to your débouchés count
                static::$combinations[] = ['formation_id' => $i, 'débouché_id' => $j];
            }
        }
        // Shuffle the combinations
        shuffle(static::$combinations);
    }
}
