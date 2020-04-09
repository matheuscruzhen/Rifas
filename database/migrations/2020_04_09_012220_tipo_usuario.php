<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TipoUsuario extends Migration
{
    public function up()
    {
        Schema::create('tipousuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('descricao')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tipousuarios');
    }
}
