<?php 

namespace App\Repositories\Contracts;


interface OpcoesCadastroFuncionarioRepositoryInterface 
{ 
    public function all();  

    public function store($data);

    public function findById($id);
  
    public function update($data, $id); 
   
    public function destroy($id); 
       
}