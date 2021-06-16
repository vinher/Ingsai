<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sums', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('fecha');
            $table->string('cantidad');
            $table->string('articulo');
            $table->string('motivo');
            $table->string('entrego');
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
        Schema::dropIfExists('sums');
    }
}
