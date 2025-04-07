<?php

namespace App\Providers;
use App\Models\Pengunjung;

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
        if(!app()->runningInConsole()){
            Pengunjung::create([
                'ip_address' => request()->ip(),
                'user_agent' => request()->userAgent(),
                'visited_at' => now()
            ]);
        }
    }
}
