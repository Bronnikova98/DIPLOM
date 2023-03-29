@extends('layouts.base')

@section('title')
    АНО "Реабилитационный центр для детей "АВРОРА"
@endsection

@section('content')
    <div class="home_background">

        <div class="container home_carousel">
            <div  id="carouselExampleFade" class="carousel slide carousel-fade"
                data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active home_carousel_indicator" aria-current="true" aria-label="Slide 1"></button>
                        {{-- <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" class="home_carousel_indicator"aria-label="Slide 2"></button> --}}
                      </div>
                
                    <div class="carousel-item active" >
                        <img src="/images/igrushki41.jpg" class="d-block w-100 h-100 home_carousel_img" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <p style="color:black;">Добро пожаловать</p>
                          </div>
                    </div>
                    {{-- <div class="carousel-item">
                        <img src="/images/fon57.jpg" class="d-block w-100 h-100 home_carousel_img" alt="...">
                    </div> --}}
                    
                </div>
                
            </div>
        </div>
    </div>
    
@endsection
