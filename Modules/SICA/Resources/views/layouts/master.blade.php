<!DOCTYPE html>
<html lang="en">
@include('sica::layouts.partials.head')
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
    @include('sica::layouts.partials.navbar')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
    @include('sica::layouts.partials.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @include('sica::layouts.partials.breadcrumb')
    <!-- /.content-header -->
    @if(Session::has('message'))
    <div class="container-fluid">
      <div class="mtop16 alert alert-{{ Session::get('typealert') }}" style="display: block; margin-bottom: 16px;">
      {{ Session::get('message') }}
      @if ($errors->any())
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      @endif
     
      </div>
    </div>
    @endif
    <!-- Main content -->
    @section('content')
    @show
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Main Footer -->
    @include('sica::layouts.partials.footer')
</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
@include('sica::layouts.partials.scripts')

@section('script')
<script>
  $('.alert').slideDown();
  setTimeout(function(){$('.alert').slideUp();}, 10000);
</script>
<script type="text/javascript">
	$(function () {
  		$('[data-toggle="tooltip"]').tooltip()
	})
</script>
@show

</body>
</html>