<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfiguracaoAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuracao_agenda', function (Blueprint $table) {
            $table->id();
            $table->integer('intervalo_agenda_min');
            $table->integer('antecendia_agendar_horas')->default(0);
            $table->integer('antecendia_recp_canc_remar_horas');
            $table->time('hora_inicio', $precision = 0);
            $table->time('hora_fim', $precision = 0); 
            $table->string('assunto_de_alerta_email',100);  
            $table->text('mensagem_de_alerta_email');
            $table->integer('matricula_id');          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuracao_agenda');
    }
}
