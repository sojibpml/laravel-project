<?php

namespace App\Providers;
use Illuminate\Support\ServiceProvider;
use App\Contracts\PaymentInterface;
use App\Services\BkashPayment;
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
    }
}
