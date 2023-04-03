@extends('layout')
@section('content')

<div class="col-md-12 mt-3">
        <div class="card text-bg-dark mb-3">
            <div class="card-header mt-1 fs-4">
                Nuevo Producto
            </div>
            <div class="card-body">
                <form action="{{ route('productos.store') }}" method="post">
                  
                    @csrf
                  

      <div class="form-group col-md-6">
        <label for="modelo">Modelo</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="modelo">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="precio">Precio</label>
        <input type="number" class="form-control bg-dark text-white mt-2" name="precio">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="descripcion">Descripción</label>
        <textarea class="form-control bg-dark text-white mt-2" name="descripcion"></textarea>
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="nombreProducto">Nombre del producto</label>
        <input type="text" class="form-control bg-dark text-white mt-2" name="nombreProducto">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="cantidadProducto">Cantidad del producto</label>
        <input type="number" class="form-control bg-dark text-white mt-2" name="cantidadProducto">
      </div>


      <div class="form-group col-md-6 mb-3 mt-3">
        <label for="numeroCompras">Número de compras</label>
        <input type="number" class="form-control bg-dark text-white mt-2" name="numeroCompras">
      </div>


      <div class="form-group col-md-6 mt-3">
        <label for="estrellas">Estrellas</label>
        <fieldset class="starability-fade mt-2">
          <input type="radio" id="no-rate" class="input-no-rate" name="estrellas" value="0" checked aria-label="No rating." />
          <input type="radio" id="first-rate1" name="estrellas" value="1" />
          <label for="first-rate1" title="Horrible">1 star</label>
          <input type="radio" id="first-rate2" name="estrellas" value="2" />
          <label for="first-rate2" title="Malo">2 stars</label>
          <input type="radio" id="first-rate3" name="estrellas" value="3" />
          <label for="first-rate3" title="Maomeno">3 stars</label>
          <input type="radio" id="first-rate4" name="estrellas" value="4" />
          <label for="first-rate4" title="Muy bien!">4 stars</label>
          <input type="radio" id="first-rate5" name="estrellas" value="5" />
          <label for="first-rate5" title="Increible!">5 stars</label>
        </fieldset>
    </div>            
      

      <div class="form-group col-md-6 mb-3">
        <label for="numeroVotos">Número de votos</label>
        <input type="number" class="form-control bg-dark text-white" name="numeroVotos">
      </div>


      <input type="submit" class="btn btn-outline-primary" value="Enviar">
      <a href="{{ route('productos.index') }}" class="btn btn-outline-danger">Cancelar</a>
@stop()




