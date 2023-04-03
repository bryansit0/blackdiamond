<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Productos</title>
</head>
<body>-->
    @extends('layout')
    @section("content")
    <div class="row">
    <div class="text-center text-light">
        <h2>Lista de Productos</h2>
    </div>
        <div class="row align-items-start">
                            
            <div class="col-md-12 mt-3">
                <div class="card text-bg-dark">
                    <div class="card-header fw-bold fs-4 mt-1">
                        Productos
                        <a href="{{ route('productos.create') }}" class="btn btn-outline-success float-end">Nuevo</a>
                    </div>
                <div class="card-body card-dark">

                    <!-- @if(session('type'))
                    <div class="alert alert-{{ session('type') }} alert-dimissible fade show" role="alert">

                        {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    </div>
                    @endif -->
                    <table class="table table-hover table-stripped table-dark">
                        <thead>
                            <th>ID Producto</th>
                            <th>Marca Producto</th>
                            <th>Nombre Producto</th>
                            <th>Precio Producto</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </thead>
                        <tbody>
                        @foreach($datos as $producto)
                        
                            <tr>

                                <td>
                                {{ $producto -> id }}
                                </td>

                                <td>
                                    {{ $producto -> modelo }}
                                </td>

                                <td>
                                    {{ $producto -> nombreProducto }}
                                </td>

                                <td>
                                {{ $producto -> precio }}
                                </td>

                                <td>
                                    <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-light btn-sm">
                                        <img src="{{ url('../resources/img/edit.png') }}" alt="Edit">
                                    </a>
                                
                                </td>

                                <td>                                
                                    <form action="{{route('productos.destroy', $producto->id) }}" method="post" id="borrar" name="delete-{{$producto->id}}">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-danger"><img src="{{ url('../resources/img/delete.png') }}" alt="Delete"></button>
                                    </form>
                                    </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>

        
    @if(session('type'))
        <script>
        //Mensaje
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{session('message')}}',
            showConfirmButton: false,
            timer: 1500
        });
        </script>
    @endif

        <script>
        //Confirmación
        document.getElementById('borrar').addEventListener('submit', (event) => {
        event.preventDefault(); 

        
        Swal.fire({
            title: 'Are you sure?',
            text: "You'll cannot revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Confirm.'
        }).then((result) => {
            if (result.isConfirmed) {
                
                event.target.submit();
            }
        });
    });
    </script>
   

    @stop()
            
            <!--</div>-->
            
<!--</body>
</html>-->