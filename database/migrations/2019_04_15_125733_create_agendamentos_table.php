<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('posto_id')->nullable();
            $table->foreign('posto_id')->references('id')->on('postos');
            $table->integer('doacao_id')->nullable();
            $table->foreign('doacao_id')->references('id')->on('doacoes');
            $table->string('tipo');
            $table->dateTime('data');
            $table->longText('observacoes')->nullable();
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
        Schema::dropIfExists('agendamentos');
    }
}
