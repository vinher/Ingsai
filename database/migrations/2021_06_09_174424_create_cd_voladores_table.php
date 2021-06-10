<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdVoladoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cd_voladores', function (Blueprint $table) {
            
            $table->id();
            $table->string('codigo');
            $table->string('area');
            $table->string('producto');
            $table->string('formato');
            $table->string('cantidadExistencia');
            $table->string('precioUnitario');
            $table->string('valorInventario');
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
        Schema::dropIfExists('cd_voladores');
    }
}
