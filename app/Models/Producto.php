<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    public $fillable = [
        'modelo',
        'precio',
        'descripcion',
        'nombreProducto',
        'cantidadProducto',
        'numeroCompras',
        'estrellas',
        'numeroVotos'
    ] ;
}
