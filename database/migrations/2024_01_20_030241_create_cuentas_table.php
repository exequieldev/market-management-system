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
        Schema::create('cuentas', function (Blueprint $table) {
            $table->bigIncrements('idCuenta');
            $table->date('fecha');
            $table->bigInteger('idVenta')->unsigned();            
            $table->foreign('idVenta')->references('idVenta')->on('ventas');
            $table->bigInteger('idPersona')->unsigned();            
            $table->foreign('idPersona')->references('idPersona')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cuentas');
    }
};
