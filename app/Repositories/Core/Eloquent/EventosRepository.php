<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\EventosRepositoryInterface;
use App\Models\Eventos; 

class EventosRepository implements EventosRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $Eventos = Eventos::all();
    } 

    public function store($request) 
    { 
        $eventos = Eventos::create($request); 
        return response()->json($eventos, 201); 
    } 

    public function findById($EventosId) 
    {
         return $Eventos =  Eventos::where('id', $EventosId)->get(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$Eventos = Eventos::find($id)) {
            return redirect()->back();
        }

        $Eventos->update($request);
        return response()->json($Eventos, 200); 
    } 

    public function destroy($EventosId) 
    { 
        $eventos = Eventos::where('id', $EventosId)->delete();
    }

    
}