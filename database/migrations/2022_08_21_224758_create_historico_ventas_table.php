<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoricoVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historico_ventas', function (Blueprint $table) {
            
            $table->id();
            $table->integer('cantidad');
            $table->date('fecha');

            $table->unsignedBigInteger('id_usuario')->nullable();
            $table->unsignedBigInteger('id_producto')->nullable();

            $table->foreign("id_producto")
                ->references("id")
                ->on("productos")
                ->onDelete("set null")
                ->onUpdate("cascade");
            
            $table->foreign("id_usuario")
                ->references("id")
                ->on("users")
                ->onDelete("set null")
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
        Schema::dropIfExists('historico_ventas');
    }
}
