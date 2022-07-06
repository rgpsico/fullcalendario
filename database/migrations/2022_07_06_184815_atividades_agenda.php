<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AtividadesAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atividades_agenda', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->integer('id_local');
            $table->integer('tipo_uso');
            $table->integer('duracao');   
            $table->integer('tipo_atividade');
            $table->integer('cor');
            $table->integer('limite_agendamento_dia');
            $table->integer('email_obrigatorio');          
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
        Schema::dropIfExists('atividades_agenda');
    }
}
