<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\ConfiguracaoAgendaRepositoryInterface;
use App\Models\ConfiguracaoAgenda; 

class ConfiguracaoAgendaRepository implements ConfiguracaoAgendaRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $ConfiguracaoAgenda = ConfiguracaoAgenda::all();
    } 

    public function store($request) 
    { 
        $configuracaoagenda = ConfiguracaoAgenda::create($request); 
        return response()->json($configuracaoagenda, 201); 
    } 

    public function findById($ConfiguracaoAgendaId) 
    {
         return $ConfiguracaoAgenda =  ConfiguracaoAgenda::findOrFail($ConfiguracaoAgendaId); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$ConfiguracaoAgenda = ConfiguracaoAgenda::find($id)) {
            return redirect()->back();
        }

        $ConfiguracaoAgenda->update($request);
        return response()->json($ConfiguracaoAgenda, 200); 
    } 

    public function destroy($ConfiguracaoAgendaId) 
    { 
        $configuracaoagenda = ConfiguracaoAgenda::where('id', $ConfiguracaoAgendaId)->delete();
    }

    
}