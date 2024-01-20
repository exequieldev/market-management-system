<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->bigIncrements('idPagos');
            $table->double('monto');
            $table->bigInteger('idMedioPago')->unsigned();            
            $table->foreign('idMedioPago')->references('idMedioPago')->on('medio_pagos');
            $table->bigInteger('idVenta')->unsigned();            
            $table->foreign('idVenta')->references('idVenta')->on('ventas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
};
