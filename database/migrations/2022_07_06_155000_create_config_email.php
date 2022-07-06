<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigEmail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('config_email_agenda', function (Blueprint $table) {
            $table->id();
            $table->string('servidor',50);
            $table->integer('porta');
            $table->integer('timeout');
            $table->integer('permissao_ssl');
            $table->string('login_user',50);
            $table->string('password',50);
            $table->string('nome_remetente',50);
            $table->string('email_remetente',50);
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
        Schema::dropIfExists('config_email_agenda');
    }
}
