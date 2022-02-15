<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module CAFETO</title>
    @include('cafeto::layouts.partials.head')
    {{-- Laravel Mix - CSS File --}}
    {{--
    <link rel="stylesheet" href="{{ mix('css/cafeto.css') }}"> --}}

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        @include('cafeto::layouts.partials.navbar')
        @include('cafeto::layouts.partials.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-12" id="breadvar" style="background: #734226;" >
                      <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#"> {{ trans('cafeto::menu.Home') }}</a></li>
                        @section('breadcrumb')
                        @show 
                      </ol>
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div><!-- /.container-fluid -->
              </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <div class="content">
                @yield('content')
            </div>
        </div>
        <!-- /.content-wrapper -->

          {{-- Laravel Mix - JS File --}}
          <script src="{{ mix('js/app.js') }}"></script>
        {{-- <script src="{{ mix('js/cafeto.js') }}"></script> --}}
       
        @include('cafeto::layouts.partials.footer')
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    @include('cafeto::layouts.partials.scripts')
    @section('js')
    @show
</body>

</html>