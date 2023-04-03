<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.slim.js" integrity="sha256-tXm+sa1uzsbFnbXt8GJqsgi2Tw+m4BLGDof6eUPjbtk=" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="../../resources/css/starability-all.css"/>
    @yield("css")
    <title>BlackDiamond</title>
</head>
<body style="background-color: black;">
<div class="container mt-3" >
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand text-light mr-nuevo" href="{{ url('home') }}">
    <!-- <img src="../resources/img/blackdiamond.png" alt="BlackDiamond" width="30" height="24" class="d-inline-block align-text-top"> -->
    BlackDiamond 
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ url('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" href="{{ url('productos') }}">Products</a>
        </li>    
        <li class="nav-item">
          <a class="nav-link active text-light" href="{{ url('usuarios') }}">Users</a>
        </li>  
      
    </div>
  </div>
</nav>
<!-- 
    <div class="container mt-3" >
        <a href=" {{ url('home') }} " class="btn btn-outline-light mt-3">Home</a>
        <a href=" {{ url('productos') }} " class="btn btn-outline-light mt-3">Productos</a> -->
        @yield('content')
    </div>
</body>
    @yield("js")
</html>