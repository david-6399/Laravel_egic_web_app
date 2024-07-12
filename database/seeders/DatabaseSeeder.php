<?php

namespace Database\Seeders;

use App\Models\User;
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
        $this->call(typeFormation::class);
        $this->call(niv_etudiant::class);
        $this->call(débouché::class);
        $this->call(module::class);
        $this->call(userAdmin::class);
        
        \App\Models\User::factory(10)->create();
        \App\Models\formation::factory(10)->create();
        \App\Models\program::factory(10)->create();
        \App\Models\Event::factory(10)->create();
        \App\Models\support_cours::factory(10)->create();
        \App\Models\comment::factory(10)->create();
        \App\Models\formation_débouché::factory(10)->create();
        \App\Models\formation_niv_etud::factory(10)->create();
        \App\Models\program_modul::factory(10)->create();
        \App\Models\user_formation::factory(10)->create();
        \App\Models\user_niv_etud::factory(10)->create();
        \App\Models\user_event::factory(10)->create();
    }
}
