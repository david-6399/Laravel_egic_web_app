<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // \App\Models\program::factory(10)->create();
        // \App\Models\type_formation::factory(10)->create();
        // \App\Models\niv_etudiant::factory(10)->create();
        // \App\Models\Event::factory(10)->create();
        \App\Models\formation::factory(10)->create();
    }
}
