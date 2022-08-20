@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card">
        <h5 class="card-header">CRUD Productos</h5>
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
          <h5 class="card-title text-center">Lista de Productos</h5>
          <p>
            @if(Auth::user()->tipo_usuario == 1)
              <a href="{{ route('productos.create') }}" class="btn btn-primary"><span class="bi bi-bag-plus-fill"></span> Agregar Producto</a>
            @endif()
            </p>
          <hr>
          <p class="card-text">
              <div class="table table-responsive">
                  <table class="table table-sm table-bordered">
                      <thead class="text-center">
                          <th>Nombre</th>
                          <th>Precio</th>
                          <th>Descripcion</th>
                          <th>Categoria</th>
                          @if(Auth::user()->tipo_usuario == 1) 
                          <th>Editar</th>
                          <th>Eliminar</th>
                          @endif
                      </thead>
                      <tbody>
                          @foreach ($datosp as $item)
                          <tr>
                              <td>{{ $item->name }}</td>
                              <td>{{ $item->precio }}</td>
                              <td>{{ $item->descripcion }}</td>
                              <td>{{ $item->categoria->name }}</td>

                              @if(Auth::user()->tipo_usuario == 1)  
                                    <td class="text-center">
                                        <form action="{{ route('productos.edit', $item->id) }}" method="GET">
                                            <button class="btn btn-warning btn-sm">
                                                <span class="bi bi-pencil-square">
            
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('productos.show', $item->id) }}" method="GET">
                                            <button class="btn btn-danger btn-sm">
                                                <span class="bi bi-bag-x-fill">
                                                    
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                              @endif
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
