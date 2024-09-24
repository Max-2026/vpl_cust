<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\InvoiceType::insert([
            [
                'name' => 'Balance Added',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Balance Refunded',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Talktime Added',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Talktime Refunded',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Purchased',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Bought',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Monthly Subscription Charges',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Annually Subscription Charges',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Monthly Subscription Payment',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Annually Subscription Payment',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Monthly SMS Usage Bill',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Annually SMS Usage Bill',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Monthly SMS Usage Payment',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Number Annually SMS Usage Payment',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}