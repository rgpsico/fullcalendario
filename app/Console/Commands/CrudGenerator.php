<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Str;
class CrudGenerator extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crud:generator 
    {name : Class (singular) por exemplo User}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Criar operações CRUD';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    protected function getStub($type)
    {
        return file_get_contents(resource_path("stubs/$type.stub"));
    }


    protected function model($name)
    {
        $modelTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Model')
        );

        file_put_contents(app_path("Models/{$name}.php"), $modelTemplate);
    }

    protected function controller($name)
    {
        $controllerTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower( Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Controller')
        );

        file_put_contents(app_path("/Http/Controllers/Api/{$name}Controller.php"), $controllerTemplate);
    }

    

    protected function request($name)
    {
        $requestTemplate = str_replace(
            ['{{modelName}}'],
            [$name],
            $this->getStub('Request')
        );

        if (!file_exists($path = app_path('/Http/Requests')))
            mkdir($path, 0777, true);

        file_put_contents(app_path("/Http/Requests/{$name}FormRequest.php"), $requestTemplate);
    }


    protected function repository($name)
    {
        $repositoryTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower( Str::plural($name)),
                strtolower($name)
            ],
            $this->getStub('Repository')
        );

        file_put_contents(app_path("/Repositories/Core/Eloquent/{$name}Repository.php"), $repositoryTemplate);
    }


    protected function interfaceRepository($name)
    {
        $interfaceTemplate = str_replace(
            [
                '{{modelName}}',
                '{{modelNamePluralLowerCase}}',
                '{{modelNameSingularLowerCase}}'
            ],
            [
                $name,
                strtolower( Str::plural($name)),
                strtolower($name)
            ],

            $this->getStub('RepositoryInterface')
        );

        file_put_contents(app_path("/Repositories/Contracts/{$name}RepositoryInterface.php"), $interfaceTemplate);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');
    
        $this->controller($name);
         $this->model($name);
         $this->request($name);
         $this->repository($name);
         $this->interfaceRepository($name);
       
        @File::append(base_path('routes/api.php'), 
        'Route::resource(\'' . Str::plural(strtolower($name)) .
         "', '{$name}Controller');");
    }
}
