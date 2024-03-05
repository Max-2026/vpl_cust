<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\VendorsAPIService;
use App\VendorsAPI\DIDX;

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
