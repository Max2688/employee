<?php

namespace App\Providers;
use App\Company;
use Illuminate\Support\ServiceProvider;
use App\Observers\CompanyObserver;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Company::observe(CompanyObserver::class);
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
