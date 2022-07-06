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
            $table->integer('agen_intervalo');
            $table->integer('agen_altura_linha_em_px')->default(0);
            $table->integer('agen_devolucao_credito');
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
