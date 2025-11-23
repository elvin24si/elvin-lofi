<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PelangganFactory extends Factory
{
    protected $model = \App\Models\Pelanggan::class;

    public function definition()
    {
        $faker = \Faker\Factory::create('id_ID');

        return [
            'first_name' => $faker->firstName(),
            'last_name'  => $faker->lastName(),
            'birthday'   => $faker->date(),
            'gender'     => $faker->randomElement(['Male', 'Female']),
            'email'      => $faker->unique()->safeEmail(),
            'phone'      => $faker->phoneNumber(),
        ];
    }
}
