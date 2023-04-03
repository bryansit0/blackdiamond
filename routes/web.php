<?php

use Illuminate\Support\Facades\Route;
use App\Models\Producto;
use App\Http\Controllers\ProductoController;
use App\Models\Usuario;
use App\Http\Controllers\UsuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view("login");
});

Route::get("home", function(){
    return view("index");
});

Route::resource('productos',ProductoController::class);
Route::resource('usuarios', UsuarioController::class);

Route::post('check', [UsuarioController::class,'check']);
/*Route::get("productos", function(){
    $datos = Producto::all();
    //dump and die
    //dd($datos);
    return view("productos.index", compact("datos"));
})->name("productos.index");*/