@extends('layouts.app')

@section('tituloPagina', 'Actualizar categoria')

@section('content')

<div class="container">
<div class="card">
    <h5 class="card-header">Actualizar categoria</h5>
    <div class="card-body">
      
      <p class="card-text">
        <form action="{{ route('categorias.update', $categorias->id) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="">Nombre</label>
            <input type="text" name="name" class="form-control" required value="{{ $categorias->name }}">
            <label for="">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" required value="{{ $categorias->descripcion }}">
            
            <br>
            <a href="{{ route("categorias.index") }}" class="btn btn-info"><span class="bi bi-arrow-counterclockwise"></span> Regresar</a>
            <button class="btn btn-warning"><span class="bi bi-pencil-square"></span> Actualizar</button>
        </form>
      </p>
      
    </div>
  </div>
</div>
@endsection