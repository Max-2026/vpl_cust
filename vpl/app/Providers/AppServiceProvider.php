<?php

namespace App\Providers;

use App\Services\VendorsAPIService;
use App\VendorsAPI\DIDX;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(VendorsAPIService::class, function ($app) {
            $vendors = [
                $app->make(DIDX::class),
            ];

            return new VendorsAPIService($vendors);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
