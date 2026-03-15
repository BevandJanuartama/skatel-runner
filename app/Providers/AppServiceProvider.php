<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Paksa semua URL ke HTTPS jika di production (Vercel)
        if (config('app.env') === 'production' || $this->app->environment('production')) {
            URL::forceScheme('https');
        }
    }
}
