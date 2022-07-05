<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\LocalRepositoryInterface;
use App\Models\Local; 

class LocalRepository implements LocalRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $Local = Local::all();
    } 

    public function store($request) 
    { 
        $local = Local::create($request); 
        return response()->json($local, 201); 
    } 

    public function findById($LocalId) 
    {
         return $Local =  Local::findOrFail($LocalId)->first(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$Local = Local::find($id)) {
            return redirect()->back();
        }

        $Local->update($request);
        return response()->json($Local, 200); 
    } 

    public function destroy($LocalId) 
    { 
        $local = Local::where('id', $LocalId)->delete();
    }

    
}