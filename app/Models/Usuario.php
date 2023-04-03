<?php

namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // protected $table = 'usuarios';

    public $fillable = [
        'nombreUsuario',
        'apellidoUsuario',
        'fechaNacimiento',
        'direccionUsuario',
        'contrasena',
        'correoUsuario',
        'remember_token'
    ];
}

