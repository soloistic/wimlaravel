<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('path.public', function () {
            // Priority 1: Check if a custom path is defined in .env (e.g., /home/user/public_html)
            if ($customPath = env('LARAVEL_PUBLIC_PATH')) {
                return $customPath;
            }

            // Priority 2: Standard project public folder
            return base_path('public');
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
