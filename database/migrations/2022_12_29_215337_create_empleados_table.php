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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id('codEmpleado');
            $table->string('nombre');
            $table->string('apellidos');
            $table->float('salario');
            $table->unsignedBigInteger('codOficina');
            $table->date('fecha');
            $table->timestamps();

            //Llaves Foraneas
            $table->foreign('codOficina')->on('oficinas')->references('codOficina');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
