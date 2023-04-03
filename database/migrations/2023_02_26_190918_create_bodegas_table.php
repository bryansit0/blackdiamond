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
        Schema::create('bodegas', function (Blueprint $table) {
            $table->id();
            $table->string("nombreBodega", 45);
            $table->string("correoBodega", 45);
            $table->string("telefonoBodega", 45);
            $table->string("direccionBodega", 45);
            $table->unsignedBigInteger("municipio_id");
            $table->unsignedBigInteger("pais_id");
            $table->timestamps();
            $table->foreign("municipio_id")->references("id")->on("municipios");
            $table->foreign("pais_id")->references("id")->on("pais");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bodegas');
    }
};
