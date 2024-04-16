<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Department;
use View;

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
        View::composer('*', function ($view) {
            $view->with('department', Department::where('status', 1)->get());
        });
    }
}
