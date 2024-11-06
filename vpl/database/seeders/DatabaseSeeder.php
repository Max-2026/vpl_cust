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
            'id' => '9d647aaf-2685-49b9-acf7-9c397655dd3a',
            'name' => 'Erdum Adnan',
            'email' => 'erdumadnan@gmail.com',
            'balance' => 1000,
        ]);
        $users->each(function ($user) {
            \App\Models\UserAddress::factory()->create(
                ['user_id' => $user->id]
            );
            \App\Models\UserDocument::factory()->create(
                ['user_id' => $user->id]
            );
        });

        $admin_user = $users->last();
        $numbers = \App\Models\Number::factory(7)->create();
        $numbers[] = \App\Models\Number::factory()->create([
            'number' => '+16282323929',
            'current_user_id' => $admin_user->id,
            'country_id' => 231,
        ]);
        $numbers->each(function ($num) use ($admin_user) {
            $history = new \App\Models\NumberHistory;
            $history->number_id = $num->id;
            $history->user_id = $admin_user->id;
            $history->activity = 'purchased';
            $history->setup_charges = $num->setup_charges;
            $history->monthly_charges = $num->monthly_charges;
            $history->billing_type = 'prorated';
            $num->history()->save($history);
            $num->current_user_id = $admin_user->id;
            $num->save();

            $log = new \App\Models\NumberCallLog;
            $log->id = 'asefqrgoiedkvcbaksdjfsn-'.$num->number;
            $log->number_id = $num->id;
            $log->user_id = $admin_user->id;
            $log->from_number = '1234';
            $log->start_time = now();
            $num->logs()->save($log);
        });
    }
}
