<?php

namespace App\Providers;

use App\Models\User;
use App\Observers\UserObserver;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Carbon::setLocale('zh');
        User::observe(UserObserver::class);
        Validator::extend('min_pass', function ($attribute, $value, $parameters, $validator) {
            if ($value) {
                return strlen($value) >= $parameters;
            }
            return true;
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
