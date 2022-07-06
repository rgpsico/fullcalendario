<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\OpcoesCadastroAlunoRepositoryInterface;
use App\Models\OpcoesCadastroAluno; 

class OpcoesCadastroAlunoRepository implements OpcoesCadastroAlunoRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $OpcoesCadastroAluno = OpcoesCadastroAluno::all();
    } 

    public function store($request) 
    { 
        $opcoescadastroaluno = OpcoesCadastroAluno::create($request); 
        return response()->json($opcoescadastroaluno, 201); 
    } 

    public function findById($OpcoesCadastroAlunoId) 
    {
         return $OpcoesCadastroAluno =  OpcoesCadastroAluno::where('id', $OpcoesCadastroAlunoId)->get(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$OpcoesCadastroAluno = OpcoesCadastroAluno::find($id)) {
            return redirect()->back();
        }

        $OpcoesCadastroAluno->update($request);
        return response()->json($OpcoesCadastroAluno, 200); 
    } 

    public function destroy($OpcoesCadastroAlunoId) 
    { 
        $opcoescadastroaluno = OpcoesCadastroAluno::where('id', $OpcoesCadastroAlunoId)->delete();
    }

    
}