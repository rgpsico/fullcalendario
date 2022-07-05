<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\ProfessorRepositoryInterface;
use App\Models\Professor; 

class ProfessorRepository implements ProfessorRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $Professor = Professor::all();
    } 

    public function store($request) 
    { 
        $professor = Professor::create($request); 
        return response()->json($professor, 201); 
    } 

    public function findById($ProfessorId) 
    {
         return $Professor =  Professor::findOrFail($ProfessorId)->first(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$Professor = Professor::find($id)) {
            return redirect()->back();
        }

        $Professor->update($request);
        return response()->json($Professor, 200); 
    } 

    public function destroy($ProfessorId) 
    { 
        $professor = Professor::where('id', $ProfessorId)->delete();
    }

    
}