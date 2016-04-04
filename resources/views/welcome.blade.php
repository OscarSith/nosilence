@extends('master_layout')

@section('content')
<section id="home">
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
            @foreach ($sliders as $key => $value)
                <li data-target="#main-slide" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : ''}}"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach ($sliders as $rec => $key)
                <div class="item {{ $rec == 0 ? 'active' : ''}}">
                    <img class="img-responsive" src="images/slider/{{ $key->picture }}" alt="slider {{ $key->picture }}">
                </div>
            @endforeach
        </div>

        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
</section>
<div class="section">
    <div class="container">
        <div class="col-md-6 col-sm-8 col-md-offset-3 col-sm-offset-2">
            <p class="text-center" style="font-size: 1.4em;color: #999">
                !Súmate a la magia de una<br>VERDADERA FIESTA!
            </p>
        </div>
        <div class="col-xs-12">
            <img src="images/isotipo.png" alt="" class="center-block text-center" width="120">
            <h1 class="text-center no-margin" style="font-size: 3em;color:#73E8F0">BIENVENIDO</h1>
        </div>
    </div>
</div>
<div id="parallax-one" class="parallax" style="background-image:url(images/parallax/bg-01.jpg);background-size: cover">
    <div class="parallax-text-container-1">
        <div class="parallax-text-item">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-birthday-cake"></i>
                            <div class="timer" id="item1" data-to="308" data-speed="4000"></div>
                            <h5>Fiestas Increibles</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-skyatlas"></i>
                            <div class="timer" id="item2" data-to="204" data-speed="4000"></div>
                            <h5>QUINCEAÑERAS CUMPLIERON SU SUEÑO</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-graduation-cap"></i>
                            <div class="timer" id="item3" data-to="851" data-speed="4000"></div>
                            <h5>Alumnos vivieron una gran noche</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3">
                        <div class="counter-item">
                            <i class="fa fa-heartbeat"></i>
                            <div class="timer" id="item4" data-to="8453" data-speed="5000"></div>
                            <h5>Invitados bailaron de principio a fin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="section purchase">
    <div class="container">
        <div class="section-video-content text-center">
            <h1 class="fittext wite-text uppercase tlt">
              <span class="texts">
                <span>Quinceañeros</span>
                <span>Fiesta de Prom</span>
                <span>Fiestas Privadas</span>
              </span>
            </h1>
        </div>
    </div>
</div> -->
@stop