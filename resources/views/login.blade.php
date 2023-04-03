@extends('layout')
@section('content')
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <title>Log In - BlackDiamond</title>
</head> -->
<!-- <body style="background-color: black;">
<div class="container mt-3">
    <h2>BlackDiamond</h2> -->
        <div class="row">
        <div class="col-md-12 mt-3">
        <div class="card text-bg-dark mb-3">
            <div class="card-header mt-1 fs-4">
                Log In
            </div>
            <div class="card-body">
                <form action="check" method="post">
                  
                    @csrf
                  

      <div class="form-group col-md-6">
        <label for="correoUsuario">Email</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="correoUsuario">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="contrasena">Password</label>
        <input type="password" class="form-control bg-dark text-white mt-2" name="contrasena">
      </div>

      <input type="submit" class="btn btn-outline-primary" value="Entrar">
      <a href="{{ url('home') }}" class="btn btn-outline-danger">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
</body>
@stop
</html>