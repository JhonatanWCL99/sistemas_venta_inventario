<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateControlAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('control_asistencias', function (Blueprint $table) {
            $table->id();
            $table->time('hora_llegada');

            $table->unsignedBigInteger('id_asistencia');
            
            $table->foreign("id_asistencia")
                ->references("id")
                ->on("asistencias")
                ->onDelete("cascade")
                ->onUpdate("cascade");

            $table->unsignedBigInteger('id_usuario');
            
                $table->foreign("id_usuario")
                    ->references("id")
                    ->on("users")
                    ->onDelete("cascade")
                    ->onUpdate("cascade");

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
        Schema::dropIfExists('control_asistencias');
    }
}
