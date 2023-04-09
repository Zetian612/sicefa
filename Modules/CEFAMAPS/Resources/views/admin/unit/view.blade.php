@extends('cefamaps::layouts.master')

@section('breadcrumb')
@foreach($viewunit as $u) 
  <li class="breadcrumb-item"><a href="#"><i class="fas fa-solid fa-mountain-sun"></i> {{ trans('cefamaps::unit.Units') }}</a></li>
  <li class="breadcrumb-item"><a href="#"><i class="fas {{ $u->productive_units->icon }}"></i> {{ $u->productive_units->name }}</a></li>
  @endforeach
@endsection

@section('style')
	<link rel="stylesheet" href="{{ asset('cefamaps/css/viewenviron.css') }}">
@endsection

@section('content')
  @foreach($viewunit as $u) 
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card card-lightblue card-outline">
              <div class="card-header">
                <h3 class="m-0">{{ trans('cefamaps::unit.Unit') }} - {{ $u->productive_units->name }}</h3>
              </div>
              <div class="card-body">
                <div id="map"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  @endforeach

  <!-- Inicio El modal para que aparezacan todas la paginas -->
  <div class="modal fade" id="modal-lg">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{trans('cefamaps::page.Page')}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <lord-icon src="https://cdn.lordicon.com/rivoakkk.json" trigger="hover" colors="primary:#000000,secondary:#000000" style="width:32px;height:32px"></lord-icon>
          </button>
        </div>
        @foreach($pages as $p)
        <div class="modal-body">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal{{$p->id}}">{{$p->name}}</button>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Fin El modal para que aparezacan todas la paginas -->

  <!-- Inicio El modal para mostrar la pagina -->
  <div class="modal fade" id="modal{{$p->id}}">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">{{$p->name}}</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <lord-icon src="https://cdn.lordicon.com/rivoakkk.json" trigger="hover" colors="primary:#000000,secondary:#000000" style="width:32px;height:32px"></lord-icon>
          </button>
        </div>
        @foreach($pages as $p)
        <div class="modal-body">
          <p>{!! $p->content !!}</p>
        </div>
        @endforeach
      </div>
    </div>
  </div>
  <!-- Fin El modal para mostrar la pagina -->
@endsection

@section('script')

<script>

    // Initialize and add the map
    function initMap() {
      // The location of Uluru
      const adsi = { lat: 2.61265158990476, lng: -75.36091880830087 };
      // The map, centered at Uluru
      const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 16,
        center: adsi,
        mapTypeId: 'satellite'
      });

      // Inicio poligono
      @foreach($viewunit as $u)

      // The marker, positioned at Uluru
      const marker{{$u->id}} = new google.maps.Marker({
        position: { lat: {{$u->latitude}},  lng: {{$u->length}} },
        map: map,
        tittle: "{{$u->name}}",
      });
        
      const infoCultivo{{$u->id}} = new google.maps.InfoWindow();

      infoCultivo{{$u->id}}.setContent(
        '<div class="card-content">' +
          '<div class="button-container">' +
            '<h2>{{trans("cefamaps::page.Page")}}</h2>' +
            '<button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">{{$u->id}}</button>' +
          '</div>' +
          '<div class="image-container">' +
            '<img src="{{ asset("cefamaps/images/uploads/".$u->picture) }}" alt="Imagen de la tarjeta" class="image">' +
            '<div class="image-text">' +
              '<p>{{$u->description}}</p>' +
            '</div>' +
          '</div>' +
        '</div>'
      );

      marker{{$u->id}}.addListener("click", () => {
        infoCultivo{{$u->id}}.open(map, marker{{$u->id}});
      });

      // Define the LatLng coordinates for the polygon's path.
      const Coords{{$u->id}} = [
        @foreach($u->coordinates as $c)
          { lat: {{$u->latitude}}, lng: {{$u->length}} },
        @endforeach
      ];
        
      // Construct the polygon.
      const Polygon{{$u->id}} = new google.maps.Polygon({
        paths: Coords{{$u->id}},
        // color de los bordes del area
        strokeColor: "#076EF1",
        strokeOpacity: 0.8,
        strokeWeight: 2,
        // color de adentro del area
        fillColor: "#FF0000",
        fillOpacity: 0.35,
      });
      Polygon{{$u->id}}.setMap(map);

      @endforeach
      // Fin del poligono

    }

  </script>

@endsection