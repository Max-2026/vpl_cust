<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NumberFactory extends Factory
{
    public function definition()
    {
        return [
            'country_id' => \App\Models\Country::where(
                'code_a2',
                'US'
            )->first()->id,
            'number' => fake()->e164PhoneNumber(),
            'setup_charges' => fake()->numberBetween(1, 10),
            'monthly_charges' => fake()->numberBetween(0.05, 5),
            'talktime_qouta' => fake()->numberBetween(0, 100),
            'sms_qouta' => fake()->numberBetween(0, 100),
            'legal_requirements' => "Legal text"
        ];
    }
}
