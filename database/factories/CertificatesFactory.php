<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class CertificatesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        return [
            'download_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'download_hour' => $faker->time($format = 'H:i:s', $max = 'now'),
            'id_people' => $this->faker->randomElement(DB::table('people')->pluck('id')),
            'id_users' => $this->faker->randomElement(DB::table('users')->pluck('id')),
        ];
    }
}
