<?php

namespace App\Providers;

use App\Repositories\EloquentLicenseRepository;
use App\Repositories\EloquentProductRepository;
use App\Repositories\EloquentUserRepository;
use App\Repositories\EloquentVersionRepository;
use App\Repositories\LicenseRepository;
use App\Repositories\ProductRepository;
use App\Repositories\UserRepository;
use App\Repositories\VersionRepository;
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
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	    $this->app->bind(UserRepository::class, EloquentUserRepository::class);
    }
}
