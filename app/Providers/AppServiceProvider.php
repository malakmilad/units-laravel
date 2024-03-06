<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Type;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        // $types=Type::all();
        View::share('types',Type::all());
        View::share('settings',Setting::get(['key','value']));
        Paginator::useBootstrap();
    }
}
