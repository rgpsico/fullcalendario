<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailConfig extends Model
{

    protected $table = 'config_email_agenda';
    protected $fillable = [
        'servidor',
        'porta',
        'timeout',
        'permissao_ssl',
        'login_user', 
        'password', 
        'nome_remetente',
        'email_remetente', 
    ];
    //protected $guarded = ['id']; 

}
