@extends('layouts.app')

@section('tituloPagina', 'Crear nueva categoria')

@section('content')

<div class="container">
  <div class="card">
    <h5 class="card-header">Agregar nueva Categoria</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{ route('categorias.store') }}" method="POST">
            @csrf
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" required>
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" required>
            <br>
            <a href="{{ route("categorias.index") }}" class="btn btn-info"><span class="bi bi-arrow-counterclockwise"></span> Regresar</a>
            <button class="btn btn-primary"><span class="bi bi-clipboard2-plus-fill"></span> Agregar</button>
        </form>
      </p>
      
    </div>
  </div>
</div>

@endsection