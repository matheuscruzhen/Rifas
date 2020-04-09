<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tipousuario_id')->unsigned()->default(0);
            $table->string('cpf');
            $table->string('nome');
            $table->boolean('ativo');
            $table->string('sexo');
            $table->string('email')->unique();
            $table->string('senha');
            $table->rememberToken();

            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('usuarios', function (Blueprint $table) {
            $table->foreign('tipousuario_id')->references('id')->on('tipousuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuarios', function (Blueprint $table) {
            $table->dropForeign(['tipousuario_id']);
        });


        Schema::dropIfExists('usuarios');
    }
}
