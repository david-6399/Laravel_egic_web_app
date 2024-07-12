<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class module extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('modules')->insert([
            [
                'name'=>'Excel',
                'coefficient'=>'3'
            ],
            [
                'name'=>'Access',
                'coefficient'=>'5'
            ],
            [
                'name'=>'Meris',
                'coefficient'=>'5'
            ],
            [
                'name'=>'SQL',
                'coefficient'=>'4'
            ],
            [
                'name'=>'Statistic',
                'coefficient'=>'2'
            ],
        ]);
    }
}
