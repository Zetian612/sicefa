  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('cefamaps/images/logo.png') }}" alt="AdminLTE Logo" class="brand-image elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CEFAMAPS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <div class="row col-md-12">
        <div class="image mt-2 mb-2">
          @if(isset(Auth::user()->person->avatar))
          <img src="{{ asset('storage/'.Auth::user()->person->avatar) }}" class="img-circle elevation-2" alt="User Image">
          @else
          <img src="{{ asset('sica/images/blanco.png') }}" class="img-circle elevation-2" alt="User Image">
          @endif
        </div>
        @guest
          <div class="col info info-user">
            <div>{{ trans('menu.Welcome') }}</div>             
            <div><a href="{{ route('login') }}" class="d-block">{{ trans('Auth.Login') }}</a></div>

          </div>
          <div class="col info float-right mt-2" data-toggle="tooltip" data-placement="right" title="{{ trans('Auth.Login') }}"><a href="{{ route('login') }}" class="d-block" ><i class="fas fa-sign-in-alt"></i></a>
          </div>  
        @else
          <div class="col info info-user">
            <div data-toggle="tooltip" data-placement="top" title="{{ Auth::user()->person->first_name }} {{ Auth::user()->person->first_last_name }} {{ Auth::user()->person->second_last_name }}">{{ Auth::user()->nickname }}</div>
            <div class="small"><em> {{ Auth::user()->roles[0]->name }}</em></div>
          </div>
          <div class="col info float-right mt-2" data-toggle="tooltip" data-placement="right" title="{{ trans('Auth.Logout') }}"><a href="{{ route('logout') }}" class="d-block" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i></a>
          </div>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
          </form>
        @endguest
        </div>
      </div>

      <div class="user-panel mt-1 pb-1 mb-1 d-flex">
        <nav class="">
          <ul class="nav nav-pills nav-sidebar flex-column">
            <li class="nav-item">
              <a href="{{ route('cefa.welcome') }}" class="nav-link {{ ! Route::is('cefa.contact.maps') ?: 'active' }}">
                <i class="fas fa-puzzle-piece"></i>
                <p>
                  {{ trans('sica::menu.Back to') }} {{ env('APP_NAME') }}
                </p>
              </a>
            </li>  
          </ul>
        </nav>      
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        @if(!Route::is('*.sst.*'))
          <li class="nav-item">
            <a href="{{ route('cefa.cefamaps.index') }}" class="nav-link {{ ! Route::is('cefa.cefamaps.index') ?: 'active' }}">
              <i class="nav-icon fas fa-solid fa-map"></i>
              <p>
                Mapa General
              </p>
            </a>
          </li>
          @if (Route::is('*admin.*'))
            @guest
              @else
                @if(Auth::user()->havePermission('cefamaps.admin.setting.index'))
                <li class="nav-item">
                  <a href="{{ route('cefamaps.admin.environment.config') }}" class="nav-link {{ ! Route::is('cefamaps.admin.environment.config*') ?: 'active' }}">
                  <i class="nav-icon fa-solid fa-gears"></i>
                    <p>{{ trans('cefamaps::environment.Setting') }}</p>
                  </a>
                </li>
                @endif
            @endguest
          @endif
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Unidades Productivas
              </p>
            </a>
          </li>
          <!-- MENU PARA ENVIRONMENT -->
          <li class="nav-item {{ ! Route::is('cefamaps.admin.environment.views*') ?: 'menu-is-opening menu-open' }}">
            <a href="#" class="nav-link {{ ! Route::is('cefamaps.admin.environment.views.*') ?: 'active' }}">
              <i class="nav-icon fa-solid fa-school"></i>
              <p>
                {{ trans('cefamaps::environment.Environment') }}
                <i class="right fa-solid fa-map-pin"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                  
            </ul>
          </li>
          <!-- CIERRA MENU PARA ENVIRONMENT -->
        @else
          <li class="nav-item">
            <a href="{{ route('cefamaps.sst.evacuation') }}" class="nav-link {{ ! Route::is('cefamaps.sst.evacuation*') ?: 'active' }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Rutas de evacuacion
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Extintores
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Salud
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Videos
              </p>
            </a>
          </li>
        @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>