<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a class="simple-text logo-normal">
      {{ __('CINEMA') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
      <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">people</i>
            <p>Usuarios</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'Pelicula' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('peliculas.index') }}">
          <i class="material-icons">movie</i>
            <p>{{ __('Peliculas') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('comentario.index')}}">
          <i class="material-icons">note</i>
          <p>{{ __('Comentarios') }}</p>
        </a>
      </li>
      
    </ul>
  </div>
</div>
