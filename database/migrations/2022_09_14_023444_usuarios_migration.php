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
        Schema::create('usuarios', function (Blueprint $table) {
            //id incremental y PK
            //php artisan migration - se hacen una vez
            //php artisan migrate:fresh - actualizar
            $table->id();
            $table->string("nombre",100);
            $table->string("email",100);
            $table->string("password",100);
            $table->integer("edad");
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
        Schema::dropIfExists('users');
    }
};
