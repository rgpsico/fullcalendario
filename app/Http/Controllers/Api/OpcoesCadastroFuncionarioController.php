<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\OpcoesCadastroFuncionarioFormRequest; 
use App\Repositories\Contracts\OpcoesCadastroFuncionarioRepositoryInterface;
use App\Http\Controllers\Controller;

class OpcoesCadastroFuncionarioController extends Controller 
{ 

    protected $repository;
    
    public function __construct(OpcoesCadastroFuncionarioRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $opcoescadastrofuncionario =  $this->repository->all(); 
        return response()->json($opcoescadastrofuncionario); 
    } 

    public function store(OpcoesCadastroFuncionarioFormRequest $request) 
    { 
        $opcoescadastrofuncionario = $this->repository->store($request->all()); 

        return response()->json($opcoescadastrofuncionario, 201); 
    } 

     public function show($id) 
    {
        $opcoescadastrofuncionario = $this->repository->findById($id); 

        return response()->json($opcoescadastrofuncionario); 
    } 

    public function update(OpcoesCadastroFuncionarioFormRequest $request, $id) 
    { 
        $opcoescadastrofuncionario = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}