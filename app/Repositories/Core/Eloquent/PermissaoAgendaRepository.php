<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\PermissaoAgendaRepositoryInterface;
use App\Models\PermissaoAgenda; 

class PermissaoAgendaRepository implements PermissaoAgendaRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $PermissaoAgenda = PermissaoAgenda::all();
    } 

    public function store($request) 
    { 
        $permissaoagenda = PermissaoAgenda::create($request); 
        return response()->json($permissaoagenda, 201); 
    } 

    public function findById($PermissaoAgendaId) 
    {
         return $PermissaoAgenda =  PermissaoAgenda::where('id', $PermissaoAgendaId)->get(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$PermissaoAgenda = PermissaoAgenda::find($id)) {
            return redirect()->back();
        }

        $PermissaoAgenda->update($request);
        return response()->json($PermissaoAgenda, 200); 
    } 

    public function destroy($PermissaoAgendaId) 
    { 
        $permissaoagenda = PermissaoAgenda::where('id', $PermissaoAgendaId)->delete();
    }

    
}