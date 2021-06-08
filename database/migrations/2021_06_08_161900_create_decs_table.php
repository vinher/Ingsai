<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('decs', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('producto');
            $table->string('formato');
            $table->string('fecha');
            $table->string('cantidadExistencia');
            $table->double('precioUnitario');
            $table->double('valorInventario');
            $table->string('folio');
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
        Schema::dropIfExists('decs');
    }
}
