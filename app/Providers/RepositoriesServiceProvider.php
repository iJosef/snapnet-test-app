<?php

namespace App\Providers;

use App\Repositories\CitizenRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\CitizenRepositoryInterface;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CitizenRepositoryInterface::class, CitizenRepository::class);
    }
}
