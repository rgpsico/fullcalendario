<?php

namespace App\Providers;


use App\Repositories\Contracts\ActivityRepositoryInterface;
use App\Repositories\Contracts\AlertaEmailConfigRepositoryInterface;
use App\Repositories\Contracts\ConfiguracaoAgendaRepositoryInterface;
use App\Repositories\Contracts\EmailConfigRepositoryInterface;
use App\Repositories\Contracts\EventosRepositoryInterface;
use App\Repositories\Contracts\LocalRepositoryInterface;
use App\Repositories\Contracts\OpcoesCadastroAlunoRepositoryInterface;
use App\Repositories\Contracts\OpcoesCadastroFuncionarioRepositoryInterface;
use App\Repositories\Contracts\PermissaoAgendaRepositoryInterface;
use App\Repositories\Contracts\ProfessorRepositoryInterface;
use App\Repositories\Core\Eloquent\ActivityRepository;
use App\Repositories\Core\Eloquent\AlertaEmailConfigRepository;
use App\Repositories\Core\Eloquent\ConfiguracaoAgendaRepository;
use App\Repositories\Core\Eloquent\EmailConfigRepository;
use App\Repositories\Core\Eloquent\EventosRepository;
use App\Repositories\Core\Eloquent\LocalRepository;
use App\Repositories\Core\Eloquent\OpcoesCadastroAlunoRepository;
use App\Repositories\Core\Eloquent\OpcoesCadastroFuncionarioRepository;
use App\Repositories\Core\Eloquent\PermissaoAgendaRepository;
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
            ConfiguracaoAgendaRepositoryInterface::class,
            ConfiguracaoAgendaRepository::class
        );

        $this->app->bind(
            PermissaoAgendaRepositoryInterface::class,
            PermissaoAgendaRepository::class
        );

        $this->app->bind(
            AlertaEmailConfigRepositoryInterface::class,
            AlertaEmailConfigRepository::class
        );

        $this->app->bind(
            EmailConfigRepositoryInterface::class,
            EmailConfigRepository::class
        );

        $this->app->bind(
            OpcoesCadastroAlunoRepositoryInterface::class,
            OpcoesCadastroAlunoRepository::class
        );

        $this->app->bind(
            OpcoesCadastroFuncionarioRepositoryInterface::class,
            OpcoesCadastroFuncionarioRepository::class
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
