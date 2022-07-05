<?php

namespace App\Providers;


use App\Repositories\Contracts\ActivityRepositoryInterface;
use App\Repositories\Contracts\LocalRepositoryInterface;
use App\Repositories\Contracts\ProfessorRepositoryInterface;
use App\Repositories\Core\Eloquent\ActivityRepository;
use App\Repositories\Core\Eloquent\LocalRepository;
use App\Repositories\Core\Eloquent\ProfessorRepository;
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

        $this->app->bind(
            LocalRepositoryInterface::class,
            LocalRepository::class
        );

        $this->app->bind(
            ProfessorRepositoryInterface::class,
            ProfessorRepository::class
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
