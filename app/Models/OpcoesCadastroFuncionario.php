<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class OpcoesCadastroFuncionario extends Model 
{ 

    protected $table ='opcoes_cad_funcionario';
    protected $fillable = [	
        "cpf",
        "tel_resi",
        "celular",
        "endereco",      
        "tipo_sanguineo",
        "val_atestado_medico",
        "estado_civil",
        "email_obrigatorio"     
        ];

}