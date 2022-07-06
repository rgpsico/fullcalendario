<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigOpcoesCadAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcoes_cadastro_aluno', function (Blueprint $table) {
            $table->id();
            $table->integer('cpf');
            $table->integer('tel_resi');
            $table->integer('celular');
            $table->integer('endereco');
            $table->integer('promotor_venda');
            $table->integer('tipo_sanguineo');
            $table->integer('val_atestado_medico');
            $table->integer('estado_civil');
            $table->integer('email_obrigatorio');
            $table->integer('idade_min');
            $table->integer('idade_max');
            $table->integer('per_logar_inativo');
            $table->integer('per_reservar_aula_inativo');
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
        Schema::dropIfExists('opcoes_cadastro_aluno');
    }
}
