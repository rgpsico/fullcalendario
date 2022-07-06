<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\AtividadesFormRequest; 
use App\Repositories\Contracts\AtividadesRepositoryInterface;
use App\Http\Controllers\Controller;

class AtividadesController extends Controller 
{ 

    protected $repository;
    
    public function __construct(AtividadesRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $atividades =  $this->repository->all(); 
        return response()->json($atividades); 
    } 

    public function store(AtividadesFormRequest $request) 
    { 
        $atividades = $this->repository->store($request->all()); 

        return response()->json($atividades, 201); 
    } 

     public function show($id) 
    {
        $atividades = $this->repository->findById($id); 

        return response()->json($atividades); 
    } 

    public function update(AtividadesFormRequest $request, $id) 
    { 
        $atividades = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}