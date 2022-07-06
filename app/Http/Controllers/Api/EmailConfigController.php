<?php 

namespace App\Http\Controllers\Api;

use App\Http\Requests\EmailConfigFormRequest; 
use App\Repositories\Contracts\EmailConfigRepositoryInterface;
use App\Http\Controllers\Controller;

class EmailConfigController extends Controller 
{ 

    protected $repository;
    
    public function __construct(EmailConfigRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index() 
    {         
        $emailconfig =  $this->repository->all(); 
        return response()->json($emailconfig); 
    } 

    public function store(EmailConfigFormRequest $request) 
    { 
        $emailconfig = $this->repository->store($request->all()); 

        return response()->json($emailconfig, 201); 
    } 

     public function show($id) 
    {
        $emailconfig = $this->repository->findById($id); 

        return response()->json($emailconfig); 
    } 

    public function update(EmailConfigFormRequest $request, $id) 
    { 
        $emailconfig = $this->repository->findById($id); 
         $result = $this->repository->update($request->all(), $id); 

        return response()->json($result, 200); 
    } 

    public function destroy($id) 
    { 
        $this->repository->destroy($id);

        return response()->json(null, 204); 
    }

    
}