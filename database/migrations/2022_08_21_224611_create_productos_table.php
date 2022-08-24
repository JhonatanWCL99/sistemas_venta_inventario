<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->decimal('precio',8);

            $table->unsignedBigInteger('categoria_id')->nullable();
            $table->unsignedBigInteger('unidad_id')->nullable();
            $table->unsignedBigInteger('archivo_id')->nullable();
            
            $table->foreign("categoria_id")
                ->references("id")
                ->on("categorias")
                ->onDelete("set null")
                ->onUpdate("cascade");

            $table->foreign("unidad_id")
                ->references("id")
                ->on("unidades")
                ->onDelete("set null")
                ->onUpdate("cascade");
            
            $table->foreign("archivo_id")
                ->references("id")
                ->on("archivos")
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
        Schema::dropIfExists('productos');
    }
}
