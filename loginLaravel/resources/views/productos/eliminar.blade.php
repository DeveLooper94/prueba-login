@extends('layouts.app')

@section('tituloPagina', 'Eliminar un producto')

@section('content')
<div class="container">
<div class="card">
    <h5 class="card-header">Eliminar un Producto</h5>
    <div class="card-body">
      
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            ¡¡ Estas seguro que desea eliminar esta categoria !!
            <table class="table table-sm table-hover">
                <thead>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Categoria</th>
                    <th>descripcion</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $productos->name }}</td>
                        <td>{{ $productos->precio }}</td>
                        <td>{{ $productos->categoria->name }}</td>
                        <td>{{ $productos->descripcion }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{ route("productos.destroy", $productos->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <a href="{{ route("productos.index") }}" class="btn btn-info"><span class="bi bi-arrow-counterclockwise"></span> Regresar</a>
                <button class="btn btn-danger"><span class="bi bi-bag-x-fill"></span> Eliminar</button>
            </form>
        </div>
      </p>
      
    </div>
  </div>
</div>
@endsection