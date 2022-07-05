<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\ProfessorFormRequest; 
use App\Repositories\Contracts\ProfessorRepositoryInterface;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller 
{ 

    protected $repository;
    
    public function __construct(ProfessorRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $professor =  $this->repository->all(); 
        return response()->json($professor); 
    } 

    public function store(ProfessorFormRequest $request) 
    { 
        $professor = $this->repository->store($request->all()); 

        return response()->json($professor, 201); 
    } 

     public function show($id) 
    {
        $professor = $this->repository->findById($id); 

        return response()->json($professor); 
    } 

    public function update(ProfessorFormRequest $request, $id) 
    { 
        $professor = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}