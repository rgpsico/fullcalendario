<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\AtividadesRepositoryInterface;
use App\Models\Atividades; 

class AtividadesRepository implements AtividadesRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $Atividades = Atividades::all();
    } 

    public function store($request) 
    { 
        $atividades = Atividades::create($request); 
        return response()->json($atividades, 201); 
    } 

    public function findById($AtividadesId) 
    {
         return $Atividades =  Atividades::where('id', $AtividadesId)->get(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$Atividades = Atividades::find($id)) {
            return redirect()->back();
        }

        $Atividades->update($request);
        return response()->json($Atividades, 200); 
    } 

    public function destroy($AtividadesId) 
    { 
        $atividades = Atividades::where('id', $AtividadesId)->delete();
    }

    
}