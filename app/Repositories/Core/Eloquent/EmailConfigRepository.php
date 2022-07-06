<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\EmailConfigRepositoryInterface;
use App\Models\EmailConfig; 

class EmailConfigRepository implements EmailConfigRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $EmailConfig = EmailConfig::all();
    } 

    public function store($request) 
    { 
        $emailconfig = EmailConfig::create($request); 
        return response()->json($emailconfig, 201); 
    } 

    public function findById($EmailConfigId) 
    {
         return $EmailConfig =  EmailConfig::where('id', $EmailConfigId)->get(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$EmailConfig = EmailConfig::find($id)) {
            return redirect()->back();
        }

        $EmailConfig->update($request);
        return response()->json($EmailConfig, 200); 
    } 

    public function destroy($EmailConfigId) 
    { 
        $emailconfig = EmailConfig::where('id', $EmailConfigId)->delete();
    }

    
}