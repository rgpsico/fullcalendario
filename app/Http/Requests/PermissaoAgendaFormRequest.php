<?php 

namespace App\Http\Requests; 

use Illuminate\Foundation\Http\FormRequest; 

class PermissaoAgendaFormRequest extends FormRequest 
{ 
    public function authorize() 
    { 
        return true; 
    } 

    public function rules()
    {
        return [
            //'name' => 'required|min:3|max:60',
            //'name' => 'required|email|min:3|max:60|unique:clients',
            //'name' => 'required|min:6|max:15',
        ];
    }
}