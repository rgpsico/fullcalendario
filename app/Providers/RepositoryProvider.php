<?php

namespace App\Providers;


use App\Repositories\Contracts\ActivityRepositoryInterface;
use App\Repositories\Core\Eloquent\ActivityRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            ActivityRepositoryInterface::class,
            ActivityRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
