<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\ConfiguracaoAgendaFormRequest; 
use App\Repositories\Contracts\ConfiguracaoAgendaRepositoryInterface;
use App\Http\Controllers\Controller;

class ConfiguracaoAgendaController extends Controller 
{ 

    protected $repository;
    
    public function __construct(ConfiguracaoAgendaRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $configuracaoagenda =  $this->repository->all(); 
        return response()->json($configuracaoagenda); 
    } 

    public function store(ConfiguracaoAgendaFormRequest $request) 
    { 
        $configuracaoagenda = $this->repository->store($request->all()); 

        return response()->json($configuracaoagenda, 201); 
    } 

     public function show($id) 
    {
        $configuracaoagenda = $this->repository->findById($id); 

        return response()->json($configuracaoagenda); 
    } 

    public function update(ConfiguracaoAgendaFormRequest $request, $id) 
    { 
        $configuracaoagenda = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}