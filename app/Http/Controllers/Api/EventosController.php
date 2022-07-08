<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\EventosFormRequest; 
use App\Repositories\Contracts\EventosRepositoryInterface;
use App\Http\Controllers\Controller;

class EventosController extends Controller 
{ 

    protected $repository;
    
    public function __construct(EventosRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $eventos =  $this->repository->all(); 
        return response()->json($eventos); 
    } 

    public function store(EventosFormRequest $request) 
    { 
        $eventos = $this->repository->store($request->all()); 

        return response()->json($eventos, 201); 
    } 

     public function show($id) 
    {
        $eventos = $this->repository->findById($id); 

        return response()->json($eventos); 
    } 

    public function update(EventosFormRequest $request, $id) 
    { 
        $eventos = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}