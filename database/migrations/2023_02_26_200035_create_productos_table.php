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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string("modelo", 45);
            $table->float("precio");
            $table->string("descripcion", 45);
            $table->string("nombreProducto", 45);
            $table->integer("cantidadProducto");
            $table->integer("numeroCompras");
            $table->float("estrellas");
            $table->integer("numeroVotos");
            $table->unsignedBigInteger("talla_id")->nullable();
            $table->unsignedBigInteger("categoria_id")->nullable();
            $table->unsignedBigInteger("genero_id")->nullable();
            $table->unsignedBigInteger("marca_id")->nullable();
            $table->unsignedBigInteger("color_id")->nullable();
            $table->unsignedBigInteger("proveedor_id")->nullable();
            $table->unsignedBigInteger("bodega_id")->nullable();
            $table->unsignedBigInteger("comentario_id")->nullable();
            $table->timestamps();
            $table->foreign("talla_id")->references("id")->on("tallas");
            $table->foreign("categoria_id")->references("id")->on("categorias");
            $table->foreign("genero_id")->references("id")->on("generos");
            $table->foreign("marca_id")->references("id")->on("marcas");
            $table->foreign("color_id")->references("id")->on("colores");
            
            $table->foreign("bodega_id")->references("id")->on("bodegas");
            $table->foreign("comentario_id")->references("id")->on("comentarios");
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
};
