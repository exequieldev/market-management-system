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
        Schema::create('linea_compras', function (Blueprint $table) {
            $table->bigIncrements('lineaCompras');
            $table->integer('cantidad');
            $table->integer('precioUnitario');
            $table->bigInteger('idProducto')->unsigned();            
            $table->foreign('idProducto')->references('idProducto')->on('productos');
            $table->bigInteger('idCompra')->unsigned();            
            $table->foreign('idCompra')->references('idCompra')->on('compras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('linea_compras');
    }
};
