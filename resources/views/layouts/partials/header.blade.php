<!-- ======= Header ======= -->
<header id="header" class="fixed-top" style="background-color: rgb(249, 89, 40, 0.7); ">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="{{ route('cefa.welcome') }}">SICEFA</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="#hero">{{ trans('menu.Home') }}</a></li>
        <li><a class="nav-link scrollto" href="#ptoventa">{{ trans('menu.Point of sale') }}</a></li>
        <li><a class="nav-link scrollto" href="#modules">{{ trans('menu.Aplications') }}</a></li>
        <li><a class="nav-link scrollto" href="#cefa">{{ trans('menu.Map') }}</a></li>
        <li><a class="nav-link scrollto" href="#why-us">SENA-Empresa</a></li>
        <li><a class="nav-link scrollto" href="#about">{{ trans('menu.About us') }}</a></li>
        <li><a class="nav-link scrollto" href="#contact">PQRS</a></li>
        <li class="dropdown">
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
        </li>
        @else
        
        <li><div><a class="nav-link" href="{{ route('login') }}">Log in</a></div></li>
        
        @endauth


        <!-- languaje Dropdown Menu-->
        <li class="dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            {{ session('lang') }} <i class="fas fa-globe"></i>
          </a>
          <ul>
            <li><a href="{{ url('lang',['es']) }}" class="dropdown-item">Español</a></li>
            <li><a href="{{ url('lang',['en']) }}" class="dropdown-item">English</a></li>
          </ul>
        </li>

      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>

</header><!-- End Header -->