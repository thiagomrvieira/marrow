<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doacao', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->bigIncrements('doador_id');
            $table->char('doador_id');
            $table->foreign('doador_id')->references('id')->on('users');
            $table->dateTime('dataDoacao');
            $table->string('tipoDoacao');
            $table->longText('observacao');
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
        Schema::dropIfExists('doacao');
    }
}
