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
        Schema::create('linea_ventas', function (Blueprint $table) {
            $table->bigIncrements('idLineaVenta');
            $table->integer('cantidad');
            $table->double('monto');
            $table->bigInteger('idProducto')->unsigned();            
            $table->foreign('idProducto')->references('idProducto')->on('productos');
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
        Schema::dropIfExists('linea_ventas');
    }
};
