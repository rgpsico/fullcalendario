<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\OpcoesCadastroAlunoFormRequest; 
use App\Repositories\Contracts\OpcoesCadastroAlunoRepositoryInterface;
use App\Http\Controllers\Controller;

class OpcoesCadastroAlunoController extends Controller 
{ 

    protected $repository;
    
    public function __construct(OpcoesCadastroAlunoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $opcoescadastroaluno =  $this->repository->all(); 
        return response()->json($opcoescadastroaluno); 
    } 

    public function store(OpcoesCadastroAlunoFormRequest $request) 
    { 
        $opcoescadastroaluno = $this->repository->store($request->all()); 

        return response()->json($opcoescadastroaluno, 201); 
    } 

     public function show($id) 
    {
        $opcoescadastroaluno = $this->repository->findById($id); 

        return response()->json($opcoescadastroaluno); 
    } 

    public function update(OpcoesCadastroAlunoFormRequest $request, $id) 
    { 
        $opcoescadastroaluno = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}