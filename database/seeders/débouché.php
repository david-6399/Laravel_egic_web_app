<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class débouché extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('débouché')->insert(
            [
                [
                    'name' => 'Backend Developer',
                    'description' => 'Focuses on server-side logic, databases, and application architecture.'
                ],
                [
                    'name' => 'Frontend Developer',
                    'description' => 'Works on the user interface and experience, using HTML, CSS, and JavaScript.'
                ],
                [
                    'name' => 'Data Scientist',
                    'description' => 'Analyzes complex data to derive insights and inform business decisions'
                ],
                [
                    'name' => 'System Administrator',
                    'description' => 'Ensures the smooth operation of computer systems and servers.'
                ],
                [
                    'name' => 'Cloud Engineer',
                    'description' => 'Works with cloud computing technologies to build and manage cloud-based solutions.'
                ]
            ],
            
        );
    }
}
