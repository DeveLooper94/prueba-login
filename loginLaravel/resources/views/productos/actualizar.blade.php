@extends('layouts.app')

@section('tituloPagina', 'Actualizar Producto')

@section('content')

<div class="container">
<div class="card">
    <h5 class="card-header">Actualizar Productos</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{ route('productos.update', $productos->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" required value="{{ $productos->name }}">
            <label for="">Precio</label>
            <input type="text" name="precio" class="form-control" required value="{{ $productos->precio }}">
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" required value="{{ $productos->descripcion }}">
            
            <br>
            <a href="{{ route("productos.index") }}" class="btn btn-info"><span class="bi bi-arrow-counterclockwise"></span> Regresar</a>
            <button class="btn btn-warning"><span class="bi bi-pencil-square"></span> Actualizar</button>
        </form>
      </p>
      
    </div>
  </div>
</div>
@endsection