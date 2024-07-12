<?php

namespace Database\Factories;

use App\Models\user_niv_etud;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user_niv_etud>
 */
class user_niv_etudFactory extends Factory
{
   protected $model = user_niv_etud::class;

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
            'user_id' => $combination['user_id'],
            'niv_etud_id' => $combination['niv_etud_id'],
        ];
    }

    protected function generateCombinations()
    {
        // Generate all possible combinations
        for ($i = 1; $i <= 10; $i++) { // Adjust the range according to your formations count
            for ($j = 1; $j <= 5; $j++) { // Adjust the range according to your débouchés count
                static::$combinations[] = ['user_id' => $i, 'niv_etud_id' => $j];
            }
        }
        // Shuffle the combinations
        shuffle(static::$combinations);
    }
}
