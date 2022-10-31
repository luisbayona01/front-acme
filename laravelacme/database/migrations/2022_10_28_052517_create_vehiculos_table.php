<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiculosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('idvehiculos');
            $table->string('placa', 45);
            $table->string('color', 45);
            $table->string('marca', 45);
            $table->integer('tipodevehiculo')->nullable();
            $table->unsignedinteger('idusuariovehiculo')->nullable()->comment("se define  si el usuario es  un  conductor o un propietario ");
            $table->foreign('idusuariovehiculo', 'idusuariovehiculo')->references('idusuario')->on('usuario')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipodevehiculo', 'tipodevehiculo')->references('idtipovehiculo')->on('tipovehiculo')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehiculos');
    }
}
