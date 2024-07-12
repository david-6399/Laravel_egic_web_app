<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class typeFormation extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('type_formations')->insert(
            [
                [ 'name' => 'BTS',
                    'description' => 'BTS' ],
                [
                    'name' => 'Bachelor',
                    'description' => 'Bachelor'
                ],
                [
                    'name' => 'Master',
                    'description' => 'Master'
                ],
                [
                    'name' => 'Calificantes',
                    'description' => 'Calificantes'
                ],
                [
                    'name' => 'Non calificantes',
                    'description' => 'Non calificantes'
                ],
            ]
            
        );
    }
}
