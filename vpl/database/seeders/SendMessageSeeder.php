<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SendMessage;

class SendMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SendMessage::create([
            'user_id' => 1,
            'number' => 14521403343,
            'received_number' => 435673542356,
            'content' => "Test Message",
            'date_time' => now(),
            'charges' => 5,
        ]);

        SendMessage::create([
            'user_id' => 1,
            'number' => 16356326333,
            'received_number' => 435673542356,
            'content' => "Test Message Again",
            'date_time' => now(),
            'charges' => 2,
        ]);
    }
}
