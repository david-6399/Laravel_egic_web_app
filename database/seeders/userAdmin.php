<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userAdmin extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=> 'admin',
            'email'=> 'admintest@gmail.com',
            'address'=>'oran',
            'usertype'=> 1 ,
            'phone'=> '+213797251745',
            
        ]);
    }
}
