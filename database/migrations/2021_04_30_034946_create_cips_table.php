<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cips', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('area');
            $table->string('producto');
            $table->string('formato');
            $table->string('categoria');
            $table->string('cantidad');
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
        Schema::dropIfExists('cips');
    }
}
