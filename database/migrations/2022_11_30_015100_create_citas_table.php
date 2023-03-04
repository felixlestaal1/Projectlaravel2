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
        Schema::create('citas', function (Blueprint $table) {
            $table->id(); //ID autoincrementable
            $table->string('enfermedad');
            $table->text('Description')->nullable();
            $table->date('fecha_cita');
            //Llave foranea de usuarios
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();

            //Conexion entre llaves
            $table->foreign('id_usuario')->on('usuarios')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citas');
    }
};
