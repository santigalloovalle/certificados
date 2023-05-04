<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Document;
use App\Models\Role;
use App\Models\Contract;
use App\Models\User;

class PeopleFactory extends Factory
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
            'name' => $faker->name(),
            'id_documents' => $faker->randomElement([Document::all()->pluck('id')->first()]),
            'doc' => $faker->numberBetween(10000,99999),
            'id_roles' => $faker->randomElement([Role::all()->pluck('id')->first()]),
            'salary' => $faker->numberBetween(10000,99999),
            'pay_per_hour' => $faker->numberBetween(10000,99999),
            'id_contracts' => $faker->randomElement([Contract::all()->pluck('id')->first()]),
            'id_users' => $faker->randomElement([User::all()->pluck('id')->first()]),
            'name' => $faker->name(),
        ];
    }
}
