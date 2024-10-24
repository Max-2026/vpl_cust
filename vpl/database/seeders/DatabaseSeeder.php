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
        $numbers->each(function ($num) {
            $history = new \App\Models\NumberHistory;
            $history->number_id = $num->id;
            $history->user_id = 7;
            $history->activity = 'purchased';
            $history->setup_charges = $num->setup_charges;
            $history->monthly_charges = $num->monthly_charges;
            $history->billing_type = 'prorated';
            $num->history()->save($history);
            $num->current_user_id = 7;
            $num->save();

            $log = new \App\Models\NumberCallLog;
            $log->id = 'asefqrgoiedkvcbaksdjfsn-' . $num->number;
            $log->number_id = $num->id;
            $log->user_id = 7;
            $log->from_number = '1234';
            $log->start_time = now();
            $num->logs()->save($log);
        });
    }
}
