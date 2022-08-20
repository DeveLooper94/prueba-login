@extends('layouts.app')

@section('tituloPagina', 'Crear nuevo Producto')

@section('content')

<div class="container">
<div class="card">
    <h5 class="card-header">Agregar nuevo Producto</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{ route('productos.store') }}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" required>
            <label for="">Precio</label>
            <input type="text" name="precio" class="form-control" required>
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" required>
            <br>
            <select name="categoria_id" id="categoria_id" class="form-control" required>
              <option value=""> Seleccione una categoria</option>
              @foreach ( $categorias as $categoria )
                <option value="{{ $categoria->id }}">{{ $categoria->name }}</option>
              @endforeach
            </select>
            <br>
            <a href="{{ route("productos.index") }}" class="btn btn-info"><span class="bi bi-arrow-counterclockwise"></span> Regresar</a>
            <button class="btn btn-primary"><span class="bi bi-bag-plus-fill"></span> Agregar</button>
        </form>
      </p>
      
    </div>
  </div>
</div>
@endsection