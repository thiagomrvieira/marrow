<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->dateTime('data_nasc');
            $table->integer('sangue_id')->unsigned()->nullable();
            $table->foreign('sangue_id')->references('id')->on('sangues');
            $table->string('email')->unique();
            $table->integer('endereco_id');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->longText('sobre')->nullable(); 
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
