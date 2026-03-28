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
            // Check if we are running on the server (public_html exists at root level)
            if (is_dir(base_path('../public_html'))) {
                return base_path('../public_html');
            }
            // Fallback to local 'public' folder
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
