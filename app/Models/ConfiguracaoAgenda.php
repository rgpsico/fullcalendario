<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class ConfiguracaoAgenda extends Model 
{ 

    protected $table ='configuracao_agenda';
     protected $fillable = ['agen_intervalo', 'agen_altura_linha_em_px', 
     'agen_devolucao_credito','hora_inicio','hora_fim', 'assunto_de_alerta_email', 
     'mensagem_de_alerta_email','matricula_id']; 
    //protected $guarded = ['id']; 

}