<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class PermissaoAgenda extends Model 
{ 

    protected $table ='permissao_agenda';
     protected $fillable = ['devolucao_credito',
     'comunicacao_email',
     'agendar_horario_passado',
     'horario_inicial_divisivel_funcionarios',
     'horario_inicial_divisivel_alunos',
     'comunicado_por_email']; 
    protected $guarded = ['id']; 

}