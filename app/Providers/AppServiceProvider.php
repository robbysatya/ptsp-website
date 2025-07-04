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

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
        \Filament\Auth\Contracts\AuthProvider::class,
        \App\Providers\FilamentAuthServiceProvider::class
    );
        $this->app->bind(
            \Filament\Auth\Contracts\LoginResponse::class,
            \App\Providers\FilamentLoginResponse::class
        );
        $this->app->bind(
            \Filament\Auth\Contracts\LogoutResponse::class,
            \App\Providers\FilamentLogoutResponse::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::withoutDoubleEncoding();
        Panel::authProvider('user-login', AuthServiceProvider::class);
    }
}
