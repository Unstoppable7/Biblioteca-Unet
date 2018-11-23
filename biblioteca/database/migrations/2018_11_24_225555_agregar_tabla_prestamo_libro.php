<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AgregarTablaPrestamoLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamosLibros', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('libro_id');
            $table->unsignedInteger('estudiante_id');
            $table->unsignedInteger('empleado_id');
            $table->foreign('libro_id')->references('id')->on('libros');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->date('fecha_prestamo');
            $table->date('fecha_entrega');
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
        Schema::dropIfExists('prestamosLibros');
    }
}
