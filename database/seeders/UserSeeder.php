<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; 

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([ 
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Administrative',
            'groupId' => NULL,
        ]); 

        DB::table('user')->insert([ 
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Teacher',
            'groupId' => NULL,
        ]); 

        DB::table('user')->insert([ 
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022'),
            'role' => 'Student',
            'groupId' => NULL,
        ]); 
    }
}
