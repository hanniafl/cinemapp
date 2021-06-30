@extends('layouts.main', ['activePage' => 'peliculas', 'titlePage' => 'Detalles de la pelicula'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <div class="card-title">Peliculas</div>
            <p class="card-category">Vista detallada {{ $pelicula->titulo }}</p>
          </div>
          <!--body-->
          <div class="card-body">
            @if (session('success'))
            <div class="alert alert-success" role="success">
              {{ session('success') }}
            </div>
            @endif
            <div class="row">
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#">
                          <img src="" alt="image" class="avatar">
                          <h5 class="title mt-3">{{ $pelicula->titulo }}</h5>
                        </a>
                        <p class="description">
                        {{ $pelicula->id}} <br>
                        {{ $pelicula->director }} <br>
                        {{ $pelicula->valoracion }} <br>
                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                    <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-sm btn-primary">Editar</i></a>
                    </div>
                  </div>
                </div>
              </div><!--end card user-->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <a href="#" class="d-flex">
                          <img src="{{ asset('/img/default-avatar.png') }}" alt="image" class="avatar">
                          <h5 class="title mx-3">{{ $pelicula->titulo }}</h5>
                        </a>
                        <p class="description">
                        {{ $pelicula->id}} <br>
                        {{ $pelicula->director }} <br>
                        {{ $pelicula->valoracion }} 
                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('peliculas.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-sm btn-primary">Editar</i></a>
                    </div>
                  </div>
                </div>
              </div><!--end card user 2-->

              <!--Start third-->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <table class="table table-bordered table-striped">
                      <tbody>
                        <tr>
                          <th>ID</th>
                          <td>{{ $pelicula->id }}
                          </td>
                        </tr>
                        <tr>
                          <th>Titulo</th>
                          <td>{{ $pelicula->titulo }}</td>
                        </tr>
                        <tr>
                          <th>Valoracion</th>
                          <td>{{ $pelicula->valoracion}}</td>
                        </tr>
                        <tr>
                          <th>Resena</th>
                          <td>{{ $pelicula->resena }}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('peliculas.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-sm btn-primary">Editar</i></a>
                    </div>
                  </div>
                </div>
              </div>
              <!--end third-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection