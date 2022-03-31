<!DOCTYPE html>
<html lang="en">
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PISCICOLA</title>
       {{-- Laravel Mix - CSS File --}}
 </head>
 @include('piscicola::layouts.partials.head')

 <body class="hold-transition sidebar">
  <div class="wrapper">
        @include('piscicola::layouts.partials.navbar')
        @include('piscicola::layouts.partials.sidebar')
        <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper" id="container">
    <!-- Content Header (Page header) -->
    <div class="content-header" >
      <div class="container-fluid" >
            <h1 class="display-4 text-dark" style="text-align:center; font-size:40px; box-shadow: 0px 5px 4px;">Control de Administración Piscicola</h1>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     <!-- Main ctontent -->
     <div class="content">  
        @yield('content')
     </div>
   <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/piscicola.js')}}"></script> --}}

  </div>
        @include('piscicola::layouts.partials.scripts')




 <style>
     
   h1{
     font-family:serif; }
  .row {
    background-color:beige; }

 </style>

 </body>
 </html>




