<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UserFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->e164PhoneNumber(),
            'email_verified_at' => fake()->dateTimeBetween('-1 month', 'now'),
            'phone_number_verified_at' => fake()->dateTimeBetween(
                '-1 month', 'now'
            ),
            'password' => Hash::make('123456'),
        ];
    }
}
