@extends('layouts.app')

@section('tituloPagina', 'Crear un nueva categoria')

@section('content')

<div class="container">
<div class="card">
    <h5 class="card-header">Eliminar un categoria</h5>
    <div class="card-body">
      
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¡¡ Estas seguro que desea eliminar esta categoria !!
            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>descripcion</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $categorias->name }}</td>
                        <td>{{ $categorias->descripcion }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{ route("categorias.destroy", $categorias->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route("categorias.index") }}" class="btn btn-info"><span class="bi bi-arrow-counterclockwise"></span> Regresar</a>
                <button class="btn btn-danger"><span class="bi bi-clipboard2-x-fill"></span> Eliminar</button>
            </form>
        </div>
      </p>
      
    </div>
  </div>
</div>
@endsection