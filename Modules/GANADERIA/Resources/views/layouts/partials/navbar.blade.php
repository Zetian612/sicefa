<nav class="main-header navbar navbar-expand navbar-dark navbar-success ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block {{ ! Route::is('*home.*') ?: 'active' }}">
        <a href="{{ route('cefa.ganaderia.home.index') }}" class="nav-link">Inicio</a>
      

@guest
@else
@if(Auth::user()->roles[0]->slug=='ganaderia.admin')
<li class="nav-item d-none d-sm-inline-block {{ ! Route::is('*admin.*') ?: 'active'}}">
  <a href="{{ route ('ganaderia.admin.dashboard') }}" class="nav-link">{{ trans('Administrador') }}</a>
  </li>
  

  @elseif(Auth::user()->roles[0]->slug=='ganaderia.veterinario')
<li class="nav-item d-none d-sm-inline-block {{ ! Route::is('*veterinary.*') ?: 'active'}}">
  <a href="{{ route ('ganaderia.admin.veterinary.home') }}" class="nav-link">{{ trans('Veterinario')}}
    
  
  </li>
  </a>

  @elseif(Auth::user()->roles[0]->slug=='ganaderia.aprendiz_lider')
<li class="nav-item d-none d-sm-inline-block {{ ! Route::is('*veterinary.*') ?: 'active'}}">
  <a href="{{ route ('ganaderia.admin.apprentice_leader.home2') }}" class="nav-link">{{ trans('aprendiz_lider')}}
    
  
  </li>
  </a>

  @endif  
@endguest


  </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!-- languaje Dropdown Menu-->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          {{ session('lang') }} <i class="fas fa-globe"></i>
        </a>
        <div class="dropdown-menu p-0">
          <a href="{{ url('lang',['es']) }}" class="dropdown-item">Español</a>
          <a href="{{ url('lang',['en']) }}" class="dropdown-item">English</a>
        </div> 
        
      </li>

    </ul>
  </nav>