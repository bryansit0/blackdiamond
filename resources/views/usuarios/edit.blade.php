@extends('layout')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="../../../resources/css/starability-all.css"/>
</head>

<div class="col-md-12 mt-3">
        <div class="card text-bg-dark mb-3">
            <div class="card-header mt-1 fs-4">
                Editar Usuario
            </div>
            <div class="card-body">
                <form action="{{ route('usuarios.update', $usuario->id) }}" method="post">
                
                @method('PUT')
                @csrf

      <div class="form-group col-md-6">
        <label for="nombre">Nombre Usuario</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="nombre" value="{{ $usuario->nombreUsuario }}">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="apellido">Apellido Usuario</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="apellido" value="{{ $usuario->apellidoUsuario }}">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="fecha">Fecha Nacimiento</label>
        <input type="date" class="form-control bg-dark text-white mt-2" name="fecha" value="{{ $usuario->fechaNacimiento }}">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="direccionUsuario">Dirección Usuario</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="direccionUsuario" value="{{ $usuario->direccionUsuario }}">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="correoUsuario">Correo Usuario</label>
        <input type="email" class="form-control bg-dark text-white mt-2" name="correoUsuario" value="{{ $usuario->correoUsuario }}">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="contrasena">Contraseña. No la compartiremos con NADIE ;)</label>
        <input type="password" class="form-control bg-dark text-white mt-2" name="contrasena">
      </div>


      <input type="submit" class="btn btn-outline-primary" value="Enviar">
      <a href="{{ route('usuarios.index') }}" class="btn btn-outline-danger">Cancelar</a>







@stop()