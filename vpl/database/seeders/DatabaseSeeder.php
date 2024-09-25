<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CountrySeeder::class,
        ]);

        $users = \App\Models\User::factory(6)->create();
        $users[] = \App\Models\User::factory()->create([
            'name' => 'Erdum Adnan',
            'email' => 'erdumadnan@gmail.com',
        ]);
        $users->each(function ($user) {
            \App\Models\UserAddress::factory()->create(
                ['user_id' => $user->id]
            );
            \App\Models\UserDocument::factory()->create(
                ['user_id' => $user->id]
            );
        });

        $numbers = \App\Models\Number::factory(7)->create();
    }
}
