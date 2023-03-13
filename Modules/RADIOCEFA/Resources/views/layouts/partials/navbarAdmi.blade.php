<!-- Navbar -->
  <nav class="navbar navbar-expand bg-light" style="height: 4rem; margin-left: 4px; margin-right: 4px;">
    <img src="{{asset('radi__cefa/logover.png') }}" alt="Logo" width="80" height="50" class="d-inline-block align-text-start">
    <!-- Left navbar links -->
    <ul class="navbar-nav m-3">
      <li class="nav-item">
        <a href="index3.html" class="nav-link text-success">Home</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">Contact</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">Cronograma</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">Sobre Nosotros</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link text-success">Unete</a>
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
  </nav>
  <!-- /.navbar -->