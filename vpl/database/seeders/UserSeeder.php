<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'fahad',
            'last_name' => 'naeem',
            'email' => 'erdumadnan@gmail.com',
            'password' => Hash::make('123'),
            'balance' => 50,
        ]);
    }
}
