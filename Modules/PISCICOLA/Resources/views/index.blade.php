@extends('piscicola::layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="card">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner" style="height: 28rem;">
                    <div class="carousel-item active">
                        <img src="{{ asset('piscicola/img/acuicola1.jpg') }}" class="d-block w-100" alt="area acuicola">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('piscicola/img/acuicola2.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('piscicola/img/piscicultura3.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('piscicola/img/piscicultura4.jpg') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="card-group" style="justify-content:space-around; width:90%  ">
            <div class="card-1">
              <img class="card-img-top" src="{{ asset('piscicola/img/fish.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Piscicultura</h5>
                <p class="card-text"> Se trata de la crianza y producción de peces en una gran variedad de especies</p>
              </div>
            </div>  
            <div class="card-2">
              <img class="card-img-top" src="{{ asset('piscicola/img/fresh-fish.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"></h5>¿Cómo se realiza la cosecha de peces?
                <p class="card-text">La pesca de peces en la granja se puede realizar de varias formas, ya sea con el estanque lleno de agua o después de haberlo vaciado, según las necesidades y circunstancias.
                    Para cosechar peces mediante desagüe total, por lo general se requiere de un tipo de estanque totalmente drenable. En ese caso, se sacan todos los peces del estanque cosechándolos dentro o fuera del mismo.</p>
                    <b>Para cosechar peces mediante desagüe total, por lo general se requiere de un tipo de estanque totalmente drenable. En ese caso, se sacan todos los peces del estanque cosechándolos dentro o fuera del mismo.</b>
              </div>
            </div>
          </div>


        <div class="card-group" style="background-color:#f5f5dc; justify-content:space-around">
            <h1 style="text-align: center;   width:100% ;">Especies de producción en el CFA</h1>
            <div class="card-e" style="width: 28rem; box-shadow: 2px 5px 10px; float:left;  ">
                <img src="{{ asset('piscicola/img/fresh-fish.jpg') }}" class="card-img-top" alt="Tilapia roja">
                <div class="card-body">
                    <h1 class="card-title">Tilapia Roja</h1>
                    <p class="card-text">
                        También conocida como mojarra roja, Son peces con hábitos territoriales,
                        agresivos en su territorio el cual defiende frente a cualquier otro pez,
                        aunque en cuerpos de aguas grandes, típicos de cultivos comerciales,
                        esa agresividad disminuye y se limita al entorno de su territorio.
                    </p>
                </div>
            </div>

            <div class="card-e" style="width: 28rem; box-shadow: 2px 5px 10px; float:right;">
                <img src="{{ asset('piscicola/img/black-tilapia.jpg') }}" class="card-img-top" alt="Tilapia negra">
                <div class="card-body">
                    <h1 class="card-title">Tilapia Negra</h1>
                    <p class="card-text">
                        Tilapia nilótica o mojarra plateada, poseen un muy buen crecimiento, ideal para ser procesada
                        en plantas, manejo sencillo del cultivo, resistente a enfermedades, acepta alimento concentrado.
                        Disponibilidad de semilla solo con productores especializados.
                    </p>
                </div>
            </div>
            <div class="card-e" style="width: 35rem; margin-top:10px; box-shadow:2px 5px 10px; float:right;">
                <img src="{{ asset('piscicola/img/black-tilapia.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h1 class="card-title">Carpicultura</h1>
                    <p class="card-text">
                        Tilapia nilótica o mojarra plateada, poseen un muy buen crecimiento, ideal para ser procesada
                        en plantas, manejo sencillo del cultivo, resistente a enfermedades, acepta alimento concentrado.
                        Disponibilidad de semilla solo con productores especializados.
                    </p>
                </div>
            </div>

        </div>
    </div>


    @include('piscicola::layouts.partials.footer')

@endsection


