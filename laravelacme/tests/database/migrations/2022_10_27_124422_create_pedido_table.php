<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedido', function (Blueprint $table) {
            $table->increments('idpedido');
            $table->unsignedInteger('idcuenta')->nullable();
            $table->string('producto', 45)->nullable();
            $table->string('cantidad', 45)->nullable();
            $table->string('valortotal', 45)->nullable();
            
            $table->foreign('idcuenta', 'id_cuenta_idx')->references('idcuenta')->on('cuenta')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedido');
    }
}
