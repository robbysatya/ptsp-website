<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function authenticate(Login $auth, array $data): ?LoginResponse
    {
        $user = \App\Models\User::where('email', $data['email'])->first();

        if (!$user || !\Illuminate\Support\Facades\Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'data.email' => __('filament-panels::pages/auth/login.messages.failed'),
            ]);
        }

        // Check if user is active
        if ($user->status === false) {
            throw ValidationException::withMessages([
                'data.email' => 'Your account is disabled. Please contact administrator.',
            ]);
        }

        \Illuminate\Support\Facades\Auth::login($user, $auth->hasRemember());
        
        return app(LoginResponse::class);
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
