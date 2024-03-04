<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roboticskit')->insert([ 
            'name' => 'Educational Robotics Kit',
        ]); 

        DB::table('roboticskit')->insert([ 
            'name' => 'Kit5',
        ]); 

        DB::table('roboticskit')->insert([ 
            'name' => 'StarterKit',
        ]); 
    }
}
