<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('idusuario');
            $table->string('numerodecedula', 45);
            $table->string('primernombre', 45);
            $table->string('segundonombre', 45);
            $table->string('apellidos', 45);
            $table->string('telefono', 45);
            $table->string('ciudad', 45);
            $table->integer('tipousuario')->nullable();
            
//$table->integer('idusuario')->unsigned()->index();
            $table->foreign('tipousuario', 'tipousuario')->references('idtipousuario')->on('tipousuario')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
