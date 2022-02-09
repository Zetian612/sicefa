  <nav class="main-header navbar navbar-expand navbar-dark navbar-purple">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('cefa.evs.voto.index') }}" class="nav-link {{ ! Route::is('cefa.evs.voto.*') ?: 'active' }}">{{ __('Electronic voting') }}</a>
      </li>
@guest
@else
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('evs.admin.dashboard') }}" class="nav-link {{ ! Route::is('evs.admin.*') ?: 'active' }}">{{ __('Adminitrator') }}</a>
      </li>
@endguest

    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->

            <!-- Language Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          @if(session('lang')!='en')
            <img src="{{ asset('general/images/colombia_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;">
          @else
            <img src="{{ asset('general/images/estados-unidos-de-america_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;">
          @endif
        </a>
        <div class="dropdown-menu dropdown-menu-right p-0">
          <a href="{{ url('lang', ['en']) }}" class="dropdown-item">
            <img src="{{ asset('general/images/estados-unidos-de-america_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;"> English
          </a>
          <a href="{{ url('lang', ['es']) }}" class="dropdown-item">
            <img src="{{ asset('general/images/colombia_r.svg') }}" class="icon-bar" alt="User Image" style="width: 20px; height: 20px;"> Español
          </a>
        </div>
      </li>

    </ul>
  </nav>