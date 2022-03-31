@extends('piscicola::layouts.master')

@section('content')
<div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row" style="background-color:transparent">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <p>Alimento</p>
              </div>
              <div class="icon">   
                <i class="fas fa-carrot"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fat"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">

                <p>Geomembranas</p>
              </div>
              <div class="icon">
                <i class="fas fa-coins" style="color:#7fffd4"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
      
                <p>Muestreo</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fat"></i></a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6" >
            <!-- small box -->
            <div class="small-box bg-dark">
              <div class="inner">
          
                <p>Peces</p>
              </div>
              <div class="icon">
                <i class="fas fa-fish" style="color:#7fffd4"></i>
              </div>
              <a href="#" class="small-box-footer"><i class="fas fa"></i></a>
            </div>
          </div>
          <!-- ./col -->
      </div>
        <!-- /.row -->

        <!-- Carousel -->
      <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="margin-top:30px">
          <div class="carousel-item active">
            <img src="{{ asset('piscicola/img/slide-1.jpg')}}" class="d-block w-100" alt="..." >
          </div>
          <div class="carousel-item">
            <img src="{{ asset('piscicola/img/slide-2.jpeg')}}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('piscicola/img/slide-3.jpg')}}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button"  data-bs-target="#carousel1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button"  data-bs-target="#carousel1" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- /carousel -->
          <!-- right col -->
          
    
</div><!-- /.container-fluid -->
@endsection