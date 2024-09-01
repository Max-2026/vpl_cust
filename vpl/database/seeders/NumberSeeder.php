<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Number;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Number::create([
            'country_id' => 1,
            'current_user_id' => 1,
            'number' => '14521403343',
            'is_active' => 1,
            'setup_charges' => 1,
            'monthly_charges' => 6,
            'annual_charges' => 6,
            'per_mintue_charges' => 0.01,
            'per_sms_charges' => 0,
            'talktime_qouta' => 0,
            'sms_qouta' => 0,
            'legal_requirements' => "legal text",
            'voice_inbound_capable' => 0,
        ]);

        Number::create([
            'country_id' => 6,
            'current_user_id' => 1,
            'number' => '16356326333',
            'is_active' => 1,
            'setup_charges' => 1,
            'monthly_charges' => 6,
            'annual_charges' => 6,
            'per_mintue_charges' => 0.01,
            'per_sms_charges' => 0,
            'talktime_qouta' => 0,
            'sms_qouta' => 0,
            'legal_requirements' => "legal text",
            'voice_inbound_capable' => 0,
        ]);
    }
}
