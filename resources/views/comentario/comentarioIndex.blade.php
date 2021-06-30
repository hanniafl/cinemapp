@extends('layouts.main', ['activePage' => 'comentarios', 'titlePage' => 'Comentarios'])
@section('content')
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Comentarios</h4>
                    <p class="card-category">Lista de comentarios</p>
                  </div>
                  <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="success">
                      {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                      <div class="col-12 text-right">
                        <a href="{{ route('comentario.create') }}" class="btn btn-sm btn-facebook">Añadir comentario</a>
                      </div>
                    </div>
                    <div class="row">
              <div class="col-12 text-right">
                <a href="{{ route('download-pdf') }}" class="btn btn-sm btn-warning">Descargar PDF</a>
              </div>
            </div>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                          <th>Id</th>
                          <th>Texto</th>
                          <th>Fecha publicacion</th>
                          <th>Pelicula ID</th>
                          <th>Usuario ID</th>
                          <th class="text-right">Acciones</th>
                        </thead>
                        <tbody>
                          @foreach ($comentarios as $comentario)
                            <tr>
                              <td>{{ $comentario->id}}</td>
                              <td>{{ $comentario->texto}}</td>
                              <td>{{ $comentario->fecha_publicacion}}</td>
                              <td>{{ $comentario->peliculaId}}</td>
                              <td>{{ $comentario->usuarioID}}</td>
                              <td class="td-actions text-right">
                                <a href="{{ route('comentario.show', $comentario->id) }}" class="btn btn-info"><i class="material-icons">person</i></a>
                                <a href="{{ route('comentario.edit', $comentario->id) }}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                <form action="{{ route('comentario.destroy', $comentario->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Seguro?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit" rel="tooltip">
                                  <i class="material-icons">close</i>
                                </button>
                              </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="card-footer mr-auto">

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection 