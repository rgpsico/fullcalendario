<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 

class AlertaEmailConfig extends Model 
{ 

    protected $table ='alerta_de_email_agenda';
     protected $fillable = ['mensagem_complementar_email','modelo_do_alerta_sms']; 
    // protected $guarded = ['id']; 

}