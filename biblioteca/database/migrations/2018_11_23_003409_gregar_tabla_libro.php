<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GregarTablaLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('editorial');
            $table->year('anio');
            $table->string('ubicacionBiblioteca');
            $table->string('autor');

            $table->unsignedInteger('tipo_id');
            $table->foreign('tipo_id')->
            references('id')->on('tipos')->onDelete('cascade');

            $table->string('areaConocimiento');
            $table->integer('diasPrestamo');
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
        Schema::dropIfExists('libros');
    }
}
