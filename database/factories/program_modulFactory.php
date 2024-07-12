<?php

namespace Database\Factories;

use App\Models\program_modul;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\program_modul>
 */
class program_modulFactory extends Factory
{protected $model = program_modul::class;

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
            'program_id' => $combination['program_id'],
            'module_id' => $combination['module_id'],
        ];
    }

    protected function generateCombinations()
    {
        // Generate all possible combinations
        for ($i = 1; $i <= 10; $i++) { // Adjust the range according to your formations count
            for ($j = 1; $j <= 5; $j++) { // Adjust the range according to your débouchés count
                static::$combinations[] = ['program_id' => $i, 'module_id' => $j];
            }
        }
        // Shuffle the combinations
        shuffle(static::$combinations);
    }
}
