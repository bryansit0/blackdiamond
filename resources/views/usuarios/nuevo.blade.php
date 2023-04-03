@extends('layout')
@section('content')

<div class="col-md-12 mt-3">
        <div class="card text-bg-dark mb-3">
            <div class="card-header mt-1 fs-4">
                Nuevo Usuario
            </div>
            <div class="card-body">
                <form action="{{ route('usuarios.store') }}" method="post">
                  
                    @csrf
                  

      <div class="form-group col-md-6">
        <label for="nombreUsuario">Nombre Usuario</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="nombreUsuario">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="apellidoUsuario">Apellido Usuario</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="apellidoUsuario">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="fechaNacimiento">Fecha Nacimiento</label>
        <input type="date" class="form-control bg-dark text-white mt-2" name="fechaNacimiento"></input>
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="direccionUsuario">Dirección Usuario</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="direccionUsuario">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="correoUsuario">Correo Usuario</label>
        <input type="email" class="form-control bg-dark text-white mt-2" name="correoUsuario">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="contrasena">Contraseña. No la compartiremos con NADIE ;)</label>
        <input type="password" class="form-control bg-dark text-white mt-2" name="contrasena">
      </div>


      <input type="submit" class="btn btn-outline-primary" value="Enviar">
      <a href="{{ route('usuarios.index') }}" class="btn btn-outline-danger">Cancelar</a>

   
@stop()






