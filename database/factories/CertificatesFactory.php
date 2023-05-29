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
            'fecha_descarga' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'hora_descarga' => $faker->time($format = 'H:i:s', $max = 'now'),
            'id_roles' => $this->faker->randomElement(DB::table('roles')->pluck('id')),
            'id_users' => $this->faker->randomElement(DB::table('users')->pluck('id')),
        ];
    }
}
