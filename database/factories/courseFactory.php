<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker; 

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class courseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realTextBetween($minNbChars = 10, $maxNbChars = 20, $indexSize = 2), 
            'cover' => $this->faker->realTextBetween($minNbChars = 25, $maxNbChars = 30, $indexSize = 2), 
            'content' => $this->faker->text(),
            'key' => "rob{$this->faker->unique()->numberBetween($min = 100, $max = 999)}",
            'roboticsKitId' =>  random_int(\DB::table('roboticskit')->min('id'), \DB::table('roboticskit')->max('id')), 
        ];
    }
}
