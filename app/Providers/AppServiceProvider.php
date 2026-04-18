<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

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
        $host = request()->getHost();
        $isNgrokHost = str_contains($host, 'ngrok-free.dev');
        $isSecureProxy = request()->header('x-forwarded-proto') === 'https';

        if ($isNgrokHost || $isSecureProxy) {
            URL::forceScheme('https');
            URL::forceRootUrl('https://'.$host);
        }

        Vite::prefetch(concurrency: 3);
    }
}
