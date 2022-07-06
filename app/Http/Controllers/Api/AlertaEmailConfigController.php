<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\AlertaEmailConfigFormRequest; 
use App\Repositories\Contracts\AlertaEmailConfigRepositoryInterface;
use App\Http\Controllers\Controller;

class AlertaEmailConfigController extends Controller 
{ 

    protected $repository;
    
    public function __construct(AlertaEmailConfigRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $alertaemailconfig =  $this->repository->all(); 
        return response()->json($alertaemailconfig); 
    } 

    public function store(AlertaEmailConfigFormRequest $request) 
    { 
        $alertaemailconfig = $this->repository->store($request->all()); 

        return response()->json($alertaemailconfig, 201); 
    } 

     public function show($id) 
    {
        $alertaemailconfig = $this->repository->findById($id); 

        return response()->json($alertaemailconfig); 
    } 

    public function update(AlertaEmailConfigFormRequest $request, $id) 
    { 
        $alertaemailconfig = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}