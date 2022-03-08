<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-cyan elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <i class="fas fa-shopping-cart"></i> &nbsp
        <span class="brand-text font-weight-light">Punto de venta</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            @guest
                <div class="image">
                    <img src="{{ asset('/general/images/usuario.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ url('login') }}" class="d-block">{{ __('Welcome') }}</a>
                </div>
            @else
                <div class="image">
                    <img src="{{ asset('/general/images/usuario.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ url('login') }}" class="d-block"> {{ Auth::user()->nickname }} </a>
                </div>
                <div class="info col-md-6">
                    <a href="{{ route('logout') }}" class="d-block" title="Logout" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                 <div class="float-right"><span><i class="fas fa-sign-out-alt"></i></span></div></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                    </form>
                  </div>
            @endguest
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                @if (Route::is('*.puntoventa.*'))
                    <li class="nav-item">
                        <a href="{{ route('cefa.puntoventa.index') }}"
                            class="nav-link {{ !Route::is('cefa.puntoventa.index') ?: 'active' }}">
                            <i class="fas fa-home"></i>
                            <p>
                                {{ trans('puntoventa::menu.Home') }}
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cefa.puntoventa.developers') }}"
                            class="nav-link {{ !Route::is('cefa.puntoventa.developers') ?: 'active' }}">
                            <i class="fas fa-laptop-code"></i>
                            <p>
                                {{ trans('puntoventa::menu.Developers') }}
                            </p>
                        </a>
                    </li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('puntoventa.admin.dashboard') }}"
                            class="nav-link {{ !Route::is('puntoventa.admin.dashboard') ?: 'active' }}">
                            <i class="fas fa-tachometer-alt"></i>
                            <p>
                                {{ trans('puntoventa::menu.Dashboard') }}
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('puntoventa.admin.sales') }}"
                            class="nav-link {{ !Route::is('puntoventa.admin.sales') ?: 'active' }}">
                            <i class="fas fa-cash-register"></i>
                            <p>
                                {{ trans('puntoventa::menu.Sales') }}
                            </p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="{{ route('puntoventa.admin.inventory') }}"
                            class="nav-link {{ !Route::is('puntoventa.admin.inventory') ?: 'active' }}">
                            <i class="fas fa-boxes"></i>
                            <p>
                                {{ trans('puntoventa::menu.Inventory') }}
                            </p>
                        </a>
                    </li> --}}
                @endif
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
