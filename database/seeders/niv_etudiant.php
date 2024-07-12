<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class niv_etudiant extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('niv_etudiants')->insert(
            [
                ['name' => 'Bac'],
                ['name' => 'Bac + 2'],
                ['name' => 'Lycee'],
                ['name' => 'Cem'],
                ['name' => 'Bac + 1'],
            ],
        );
    }
}
