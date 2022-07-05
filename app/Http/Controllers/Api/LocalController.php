<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\LocalFormRequest; 
use App\Repositories\Contracts\LocalRepositoryInterface;
use App\Http\Controllers\Controller;

class LocalController extends Controller 
{ 

    protected $repository;
    
    public function __construct(LocalRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $local =  $this->repository->all(); 
        return response()->json($local); 
    } 

    public function store(LocalFormRequest $request) 
    { 
        $local = $this->repository->store($request->all()); 

        return response()->json($local, 201); 
    } 

     public function show($id) 
    {
        $local = $this->repository->findById($id); 

        return response()->json($local); 
    } 

    public function update(LocalFormRequest $request, $id) 
    { 
        $local = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}