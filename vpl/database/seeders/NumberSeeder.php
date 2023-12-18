<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Number::create([
            'area_id' => 23,
            'number' => '1452140',
            'setup_charges' => 1,
            'monthly_charges' => 6,
            'per_mintue_charges' => 0.01,
            'per_sms_charges' => 0,
            'forwarding_url' => ''
        ],
        [
            'area_id' => 23,
            'number' => '286436743',
            'setup_charges' => 2,
            'monthly_charges' => 7,
            'per_minute_charges' => 0.01,
            'per_sms_charges' => 0,
            'forwarding_url' => ''
        ]);
    }
}
