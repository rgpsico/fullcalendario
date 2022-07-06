<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\OpcoesCadastroFuncionarioRepositoryInterface;
use App\Models\OpcoesCadastroFuncionario; 

class OpcoesCadastroFuncionarioRepository implements OpcoesCadastroFuncionarioRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $OpcoesCadastroFuncionario = OpcoesCadastroFuncionario::all();
    } 

    public function store($request) 
    { 
        $opcoescadastrofuncionario = OpcoesCadastroFuncionario::create($request); 
        return response()->json($opcoescadastrofuncionario, 201); 
    } 

    public function findById($OpcoesCadastroFuncionarioId) 
    {
         return $OpcoesCadastroFuncionario =  OpcoesCadastroFuncionario::where('id', $OpcoesCadastroFuncionarioId)->get(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$OpcoesCadastroFuncionario = OpcoesCadastroFuncionario::find($id)) {
            return redirect()->back();
        }

        $OpcoesCadastroFuncionario->update($request);
        return response()->json($OpcoesCadastroFuncionario, 200); 
    } 

    public function destroy($OpcoesCadastroFuncionarioId) 
    { 
        $opcoescadastrofuncionario = OpcoesCadastroFuncionario::where('id', $OpcoesCadastroFuncionarioId)->delete();
    }

    
}