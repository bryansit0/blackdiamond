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
            $table->id();
            $table->string("nombreUsuario", 45);
            $table->string("apellidoUsuario", 45);
            $table->date("fechaNacimiento");
            $table->varchar("direccionUsuario", 45);
            $table->varchar("contrasena", 255);
            $table->varchar("correoUsuario", 45);
            $table->unsignedBigInteger("pais_id")->nullable();
            $table->unsignedBigInteger("municipio_id")->nullable();
            $table->unsignedBigInteger("tipoUsuario_id")->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->foreign("municipio_id")->references("id")->on("municipios");
            $table->foreign("pais_id")->references("id")->on("pais");
            $table->foreign("tipoUsuario_id")->references("id")->on("tipo_usuarios");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};
