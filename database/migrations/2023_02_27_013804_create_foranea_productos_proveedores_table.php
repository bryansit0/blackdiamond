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
    public function up(): void
    {
        Schema::table('productos', function (Blueprint $table) {

            $table->foreign('proveedor_id')->references('id')->on('proveedores');
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table){

        $table->dropForeign('productos_proveedor_id_foreign');

    });
}
};