<aside class="main-sidebar sidebar-dark-success elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('cefa.ganaderia.home.index') }}" class="brand-link">
    
    <img src="{{ asset('bovinos/images/logo.jpg') }}" alt="AdminLTE Logo" class="brand-image elevation-3"  style="opacity: .8">
      <span class="brand-text h3">GANADERIA</span>
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
          <img src="{{ asset('bovinos/images/avatar.png') }}" class="img-circle elevation-2" alt="User Image">
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
                      Volver a Laravel
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
          <!-- MENU PARA HOME (DE ACCESO GENERAL) -->
          @if (Route::is('*home.*'))
            <li class="nav-item">
              <a href="{{ route('cefa.ganaderia.home.index') }}" class="nav-link {{ ! Route::is('cefa.ganaderia.home.index') ?: 'active' }}" >
                <i class="fas fa-home"></i>
                <p> Inicio</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cefa.ganaderia.home.contact') }}" class="nav-link {{ ! Route::is('cefa.ganaderia.home.contact') ?: 'active' }}">
                <i class="fas fa-envelope-open-text"></i>
                <p>
                  Contactenos
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cefa.ganaderia.home.developers') }}" class="nav-link {{ ! Route::is('cefa.ganaderia.home.Developers') ?: 'active' }}">
                <i class="fas fa-industry"></i>
                <p>
                  Desarrolladores
                </p>
              </a>
            </li>
          @endif

          <!-- CIERRA MENU PARA HOME (DE ACCESO GENERAL) -->
<!-- MENU PARA ADMINISTRADOR -->
          @if (Route::is('*admin.*'))


            <li class="nav-item">
              <a href="{{ route('ganaderia.admin.dashboard') }}" class="nav-link {{ ! Route::is('ganaderia.admin.dashboard') ?: 'active' }}" >
                <i class="fas fa-tachometer-alt"></i>
                <p>Volver al panel</p>
              </a>
            </li>
            @guest
            @else
<!-- MENU PARA PEOPLE -->
           <li class="nav-item {{ ! Route::is('ganaderia.admin.people.*') ?: 'menu-is-opening menu-open' }}">
              <a href="#" class="nav-link {{ ! Route::is('ganaderia.admin.people.*') ?: 'active' }}">
                <i class="fas fa-users"></i>
                <p>
                  Personal
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->havePermission('home.people.personal_data'))
               
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.people.personal_data') }}" class="nav-link {{ ! Route::is('ganaderia.admin.people.personal_data*') ?: 'active' }}">
                    <i class="fas fa-id-card"></i>
                    <p>Aprendiz</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.people.search_apprentices'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.people.search_apprentices') }}" class="nav-link {{ ! Route::is('ganaderia.admin.people.search_apprentices*') ?: 'active' }}">
                    <i class="fas fa-user-graduate"></i>
                    <p>{{ trans('ganaderia::menu.Apprentices') }}</p>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.people.instructors') }}" class="nav-link {{ ! Route::is('ganaderia.admin.people.instructors*') ?: 'active' }}">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <p>{{ trans('ganaderia::menu.Instructors') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.people.officers') }}" class="nav-link {{ ! Route::is('ganaderia.admin.people.officers*') ?: 'active' }}">
                    <i class="fas fa-id-card"></i>
                    <p>{{ trans('ganaderia::menu.Officers') }}</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.people.contractors') }}" class="nav-link {{ ! Route::is('ganaderia.admin.people.contractors*') ?: 'active' }}">
                    <i class="far fa-id-card"></i>
                    <p>{{ trans('ganaderia::menu.Contractors') }}</p>
                  </a>
                </li>
              </ul>
            </li>
    <!-- CIERRA MENU PARA PEOPLE -->    
    <!-- MENU PARA ACADEMY -->
            <li class="nav-item {{ ! Route::is('ganaderia.admin.academy.*') ?: 'menu-is-opening menu-open' }}">
              <a href="#" class="nav-link {{ ! Route::is('ganaderia.admin.academy.*') ?: 'active' }}">
                <i class="fas fa-school"></i>
                <p>
                  Unidades
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->havePermission('ganaderia.admin.academy.quarters'))
                <li class="nav-item">
                  <a href="{{ route('cefa.ganaderia.home.unidades') }}" class="nav-link {{ ! Route::is('ganaderia.admin.academy.quarters*') ?: 'active' }}">
                    <i class="fas fa-calendar-alt"></i>
                    <p>{{ trans('ganaderia::menu.Quarters') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.academy.curriculums'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.academy.curriculums') }}" class="nav-link {{ ! Route::is('ganaderia.admin.academy.curriculums*') ?: 'active' }}">
                    <i class="fas fa-book"></i>
                    <p>{{ trans('ganaderia::menu.Curriculums') }}</p>
                  </a>
                </li>
                @endif
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.academy.courses') }}" class="nav-link {{ ! Route::is('ganaderia.admin.academy.courses*') ?: 'active' }}">
                    <i class="fas fa-graduation-cap"></i>
                    <p>{{ trans('ganaderia::menu.Courses') }}</p>
                  </a>
                </li>

              </ul>
            </li>
    <!-- CIERRA MENU PARA ACADEMY -->
    <!-- MENU PARA LOCATION -->
            <li class="nav-item {{ ! Route::is('ganaderia.admin.location.*') ?: 'menu-is-opening menu-open' }}">
              <a href="#" class="nav-link {{ ! Route::is('ganaderia.admin.location.*') ?: 'active' }}">
                <i class="fas fa-atlas"></i>
                <p>
                  Historial Clinico
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->havePermission('ganaderia.admin.location.countries'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.location.countries') }}" class="nav-link {{ ! Route::is('ganaderia.admin.location.countries*') ?: 'active' }}">
                    <i class="fas fa-globe-americas"></i></i>
                    <p>{{ trans('ganaderia::menu.Countries') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.location.farms'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.location.farms') }}" class="nav-link {{ ! Route::is('ganaderia.admin.location.farms*') ?: 'active' }}">
                    <i class="fas fa-map-marked-alt"></i>
                    <p>{{ trans('ganaderia::menu.Farms') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.location.environments'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.location.environments') }}" class="nav-link {{ ! Route::is('ganaderia.admin.location.environments*') ?: 'active' }}">
                    <i class="fas fa-street-view"></i>
                    <p>{{ trans('ganaderia::menu.Environments') }}</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>    
    <!-- CIERRA MENU PARA LOCATION -->
    <!-- MENU PARA INVENTORY -->
            <li class="nav-item {{ ! Route::is('ganaderia.admin.inventory.*') ?: 'menu-is-opening menu-open' }}">
              <a href="#" class="nav-link {{ ! Route::is('ganaderia.admin.inventory.*') ?: 'active' }}">
                <i class="fa-solid fa-boxes-stacked"></i>
                <p>
                  Insumos
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->havePermission('ganaderia.admin.inventory.warehouses'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.inventory.warehouses') }}" class="nav-link {{ ! Route::is('ganaderia.admin.inventory.warehouses*') ?: 'active' }}">
                    <i class="fas fa-warehouse"></i>
                    <p>{{ trans('ganaderia::menu.Warehouses') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.inventory.elements'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.inventory.elements') }}" class="nav-link {{ ! Route::is('ganaderia.admin.inventory.elements*') ?: 'active' }}">
                    <i class="fas fa-shapes"></i>
                    <p>{{ trans('ganaderia::menu.Elements') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.inventory.transactions'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.inventory.transactions') }}" class="nav-link {{ ! Route::is('ganaderia.admin.inventory.transactions*') ?: 'active' }}">
                    <i class="fas fa-dolly-flatbed"></i>
                    <p>{{ trans('ganaderia::menu.Transactions') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.inventory.inventory'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.inventory.inventory') }}" class="nav-link {{ ! Route::is('ganaderia.admin.inventory.inventory*') ?: 'active' }}">
                    <i class="fas fa-clipboard-list"></i>
                    <p>{{ trans('ganaderia::menu.Inventory') }}</p>
                  </a>
                </li>
                @endif              
              </ul>
            </li>    
    <!-- CIERRA MENU PARA INVENTORY -->
    <!-- MENU PARA UNITS -->
            <li class="nav-item {{ ! Route::is('ganaderia.admin.units.*') ?: 'menu-is-opening menu-open' }}">
              <a href="#" class="nav-link {{ ! Route::is('ganaderia.admin.units.*') ?: 'active' }}">
                <i class="fas fa-network-wired"></i>
                <p>
                  Poblacion
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->havePermission('ganaderia.admin.units.areas'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.units.areas') }}" class="nav-link {{ ! Route::is('ganaderia.admin.units.areas*') ?: 'active' }}">
                    <i class="fas fa-sign"></i>
                    <p>{{ trans('ganaderia::menu.Areas') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.units.consumption'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.units.consumption') }}" class="nav-link {{ ! Route::is('ganaderia.admin.units.consumption*') ?: 'active' }}">
                    <i class="fas fa-folder-minus"></i>
                    <p>{{ trans('ganaderia::menu.Consumption') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.units.production'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.units.production') }}" class="nav-link {{ ! Route::is('ganaderia.admin.units.production*') ?: 'active' }}">
                    <i class="fas fa-folder-plus"></i>
                    <p>{{ trans('ganaderia::menu.Production') }}</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>    
    <!-- CIERRA MENU PARA UNITS -->
    <!-- MENU PARA SECURITY -->
            <li class="nav-item {{ ! Route::is('ganaderia.admin.security.*') ?: 'menu-is-opening menu-open' }}">
              <a href="#" class="nav-link {{ ! Route::is('ganaderia.admin.security.*') ?: 'active' }}">
                <i class="fas fa-shield-alt"></i>
                <p>
                  R
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                @if(Auth::user()->havePermission('ganaderia.admin.security.apps'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.security.apps') }}" class="nav-link {{ ! Route::is('ganaderia.admin.security.apps*') ?: 'active' }}">
                    <i class="fas fa-th"></i>
                    <p>{{ trans('ganaderia::menu.Apps') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.security.roles'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.security.roles') }}" class="nav-link {{ ! Route::is('ganaderia.admin.security.roles*') ?: 'active' }}">
                    <i class="fas fa-user-tag"></i>
                    <p>{{ trans('ganaderia::menu.Roles') }}</p>
                  </a>
                </li>
                @endif
                @if(Auth::user()->havePermission('ganaderia.admin.security.users'))
                <li class="nav-item">
                  <a href="{{ route('ganaderia.admin.security.users') }}" class="nav-link {{ ! Route::is('ganaderia.admin.security.users*') ?: 'active' }}">
                    <i class="fas fa-user-shield"></i>
                    <p>{{ trans('ganaderia::menu.Users') }}</p>
                  </a>
                </li>
                @endif
              </ul>
            </li>
    <!-- CIERRA MENU PARA SECURITY -->                       
            @endguest
          @endif
<!-- CIERRA MENU PARA ADMINISTRADOR -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>