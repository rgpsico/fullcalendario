<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissaoAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissao_agenda', function (Blueprint $table) {
            $table->id();
            $table->integer('devolucao_credito')->default(0);
            $table->integer('comunicacao_email')->default(0);
            $table->integer('agendar_horario_passado')->default(0);
            $table->integer('horario_inicial_divisivel_funcionarios')->default(0);
            $table->integer('horario_inicial_divisivel_alunos')->default(0);
            $table->integer('comunicado_por_email')->default(0);
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
        Schema::dropIfExists('permissao_agenda');
    }
}
