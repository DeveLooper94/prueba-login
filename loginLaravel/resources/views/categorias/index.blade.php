@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <h5 class="card-header">CRUD categorias</h5>
        <div class="card-body">
          <div class="row">
              <div class="col-sm-12">
      
                  @if($mensaje = Session::get('success'))
                      <div class="alert alert-success" role="alert">
                          {{ $mensaje }}
                      </div>
                  @endif
                  
              </div>
          </div>
          <h5 class="card-title text-center">Lista de Categorias</h5>
          <p>
              <a href="{{ route('categorias.create') }}" class="btn btn-primary"><span class="bi bi-clipboard2-plus-fill"></span> Agregar Categoria</a>
          </p>
          <hr>
          <p class="card-text">
              <div class="table table-responsive">
                  <table class="table table-sm table-bordered">
                      <thead class="text-center">
                          <th>Nombre</th>
                          <th>Descripcion</th>
                          <th>Editar</th>
                          <th>Eliminar</th>
                      </thead>
                      <tbody>
                          @foreach ($datosc as $item)
                          <tr>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->descripcion }}</td>
                              
                              <td class="text-center">
                                  <form action="{{ route('categorias.edit', $item->id) }}" method="GET">
                                      <button class="btn btn-warning btn-sm">
                                          <span class="bi bi-pencil-square">
      
                                          </span>
                                      </button>
                                  </form>
                              </td>
                              <td class="text-center">
                                  <form action="{{ route('categorias.show', $item->id) }}" method="GET">
                                      <button class="btn btn-danger btn-sm">
                                          <span class="bi bi-clipboard2-x-fill">
      
                                          </span>
                                      </button>
                                  </form>
                              </td>
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
                  <hr>
                  
              </div>
          </p>
        </div>
      </div>
</div>

@endsection


