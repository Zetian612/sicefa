<!-- Navbar -->
  <nav class="navbar navbar-expand bg-light border-dark" style="height: 4rem; margin-left: 10px; margin-right: 6px;">
    <img src="{{asset('radi__cefa/logover.png') }}" alt="Logo" width="80" height="50" class="d-inline-block align-text-start">
    <!-- Left navbar links -->
    <ul class="navbar-nav m-3">
      <li class="nav-item">
        <a href="{{ route('inicioRadio') }}" class="nav-link text-success">Inicio</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">Cronograma</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('peticiones') }}" class="nav-link text-success">Peticiones de musica</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">Sobre Nosotros</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">Unete</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">PQRS</a>
      </li>

      <li class="dropdown text-success">
              @auth
                 <a href="{{ route('cefa.home') }}">{{ Auth::user()->nickname }}</a>
                <ul>
                  <li><a href="#">Cambiar contraseña</a></li>
                  <li>
                    
                <a href="{{ route('logout') }}" class="d-block" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Salir</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                </form>

                  </li>
                </ul>              
              @else
                  <a href="{{ route('login') }}" class="text-success" >Log in</a>
              @endauth            

          </li>
          
          
          
    </ul>

    <!-- Right navbar links -->
    {{-- <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul> --}}
  </nav>
  <!-- /.navbar -->