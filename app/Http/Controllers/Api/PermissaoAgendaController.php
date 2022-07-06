<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\PermissaoAgendaFormRequest; 
use App\Repositories\Contracts\PermissaoAgendaRepositoryInterface;
use App\Http\Controllers\Controller;

class PermissaoAgendaController extends Controller 
{ 

    protected $repository;
    
    public function __construct(PermissaoAgendaRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $permissaoagenda =  $this->repository->all(); 
        return response()->json($permissaoagenda); 
    } 

    public function store(PermissaoAgendaFormRequest $request) 
    { 
        $permissaoagenda = $this->repository->store($request->all()); 

        return response()->json($permissaoagenda, 201); 
    } 

     public function show($id) 
    {
        $permissaoagenda = $this->repository->findById($id); 

        return response()->json($permissaoagenda); 
    } 

    public function update(PermissaoAgendaFormRequest $request, $id) 
    { 
        $permissaoagenda = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}