<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();

        $billing_service = app(App\Services\BillingService::class);
        $number_service = app(App\Services\NumberService::class);

        $schedule->call(function () use ($billing_service) {
            $billing_service->generate_daily_invoices();
        })->daily();

        $schedule->call(function () use ($number_service) {
            $number_service->release_upcoming_numbers();
        })->daily();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
