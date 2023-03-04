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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('codReserva');
            $table->unsignedBigInteger('codVehiculo');
            $table->date('fecha');
            $table->text('destino');
            $table->float('kilometros');
            $table->unsignedBigInteger('codEmpleado');
            $table->timestamps();

            //Llaves foraneas
            $table->foreign('codVehiculo')->on('autos')->references('codVehiculo'); //FK_Reservas_Vehiculos
            $table->foreign('codEmpleado')->on('empleados')->references('codEmpleado'); //FK_Reservas_Empleados
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
};
