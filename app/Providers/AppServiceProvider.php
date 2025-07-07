<?php

namespace App\Providers;

use App\Providers\AuthServiceProvider;

    use Filament\Panel;
use Filament\Support\PanelProvider;
use Filament\Widgets;
use Filament\Pages;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::withoutDoubleEncoding();
        Paginator::useBootstrap();
    }
}
