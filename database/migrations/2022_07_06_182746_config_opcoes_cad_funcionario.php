<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ConfigOpcoesCadFuncionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opcoes_cad_funcionario', function (Blueprint $table) {
            $table->id();
            $table->integer('cpf');
            $table->integer('tel_resi');
            $table->integer('celular');
            $table->integer('endereco');   
            $table->integer('tipo_sanguineo');
            $table->integer('val_atestado_medico');
            $table->integer('estado_civil');
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
        Schema::dropIfExists('opcoes_cad_funcionario');
    }
}
