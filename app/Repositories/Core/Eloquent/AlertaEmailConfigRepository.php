<?php 

namespace App\Repositories\Core\Eloquent;
use App\Repositories\Contracts\AlertaEmailConfigRepositoryInterface;
use App\Models\AlertaEmailConfig; 

class AlertaEmailConfigRepository implements AlertaEmailConfigRepositoryInterface 
{ 

    
    public function all() 
    { 
          return $AlertaEmailConfig = AlertaEmailConfig::all();
    } 

    public function store($request) 
    { 
        $alertaemailconfig = AlertaEmailConfig::create($request); 
        return response()->json($alertaemailconfig, 201); 
    } 

    public function findById($AlertaEmailConfigId) 
    {
         return $AlertaEmailConfig =  AlertaEmailConfig::where('id', $AlertaEmailConfigId)->get(); 
    }           
         

    public function  update($request, $id)
    { 
         if (!$AlertaEmailConfig = AlertaEmailConfig::find($id)) {
            return redirect()->back();
        }

        $AlertaEmailConfig->update($request);
        return response()->json($AlertaEmailConfig, 200); 
    } 

    public function destroy($AlertaEmailConfigId) 
    { 
        $alertaemailconfig = AlertaEmailConfig::where('id', $AlertaEmailConfigId)->delete();
    }

    
}