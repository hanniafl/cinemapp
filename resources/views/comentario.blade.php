@extends('layouts.temp')
@section('contenido')
<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary">
                    <h4 class="card-title">Exportar a PDF </h4>
                    <p class="card-category">Exportar </p>
                  </div>
                  
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="text-primary">
                        <tr>
                          <th>ID</th>
                          <th>Texto</th>
                          <th>Fecha de publicacion</th>
                          <th>PeliculaId</th>
                          <th>UsuarioID</th>
                        </tr>
                        </thead>
                        <tbody>
                             @foreach ($comentarios as $comentario)
                             <tr>
                             <td>{{ $comentario->id}}</td>
                             <td>{{ $comentario->texto}}</td>
                             <td>{{ $comentario->fecha_publicacion}}</td>
                             <td>{{ $comentario->peliculaId}}</td>
                             <td>{{ $comentario->usuarioID}}</td>
                             </tr>
                             @endforeach
                        </tbody>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection 