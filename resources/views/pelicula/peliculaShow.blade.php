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
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                  Usuarios de esta Pelicula
                  </h4>
                  <p class="text-gray-600 dark:text-gray-400">
                    <ul>
                      @foreach ($pelicula->users as $user)
                      <li>{{ $user->nombre }}</li>
                      @endforeach
                    </ul>
                  </p>
                </div>
                <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                  <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
                  Agregar Usuario
                  </h4>
                  <p class="text-gray-600 dark:text-gray-400">
                    <form action="{{ route('pelicula.agregar-user', $pelicula) }}" method="POST">
                      @csrf
                      <label class="block mt-4 text-sm">
                        <span class="text-gray-700 dark:text-gray-400">
                          Seleccione Usuario
                        </span>
                        <select 
                        class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                        multiple
                        name="usuarioID[]">
                          @foreach ($users as $user)
                            <option value="{{ $user->id}}" {{ array_search($user->id, $pelicula->users->pluck('id')->toArray()) !== false ? 'selected' : ''  }}> {{$user->nombre}}</option>
                          @endforeach
                      </label>
                       </select>
                       <button 
                        class="flex items-center justify-between px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none"
                        type="sumbit">
                      <span>Actualizar</span>
                      </button>
                    </form>
                  </p>
                </div>
@endsection