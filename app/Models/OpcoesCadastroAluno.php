<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class OpcoesCadastroAluno extends Model 
{ 

    protected $table ='opcoes_cadastro_aluno';
     protected $fillable = [	
     "cpf",
     "tel_resi",
     "celular",
     "endereco",
     "promotor_venda",
     "tipo_sanguineo",
     "val_atestado_medico",
     "estado_civil",
     "email_obrigatorio",
     "idade_min",
     "idade_max",
     "per_logar_inativo",
     "per_reservar_aula_inativo"
     ];
 

}