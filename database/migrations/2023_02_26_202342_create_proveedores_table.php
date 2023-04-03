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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string("nombreProveedor", 45);
            $table->string("correoProveedor", 45);
            $table->string("direccionProveedor", 45);
            $table->string("contactoPersonal", 45);
            $table->string("telefonoProveedor", 45);
            $table->string("num_CuentaProveedor", 45);
            $table->unsignedBigInteger("pais_id");
            $table->unsignedBigInteger("municipio_id");
            $table->unsignedBigInteger("producto_id");
            $table->timestamps();
            $table->foreign("municipio_id")->references("id")->on("municipios");
            $table->foreign("pais_id")->references("id")->on("pais");
            $table->foreign("producto_id")->references("id")->on("productos");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proveedores');
    }
};
