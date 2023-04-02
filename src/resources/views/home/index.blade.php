@extends('layouts.base')

@section('title')
    АНО "Реабилитационный центр для детей "АВРОРА"
@endsection

@section('content')
    <div class="home_background">

        <div class="container home_carousel">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0"
                            class="active home_carousel_indicator" aria-current="true"></button>
                        {{-- <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" class="home_carousel_indicator"aria-label="Slide 2"></button> --}}
                    </div>

                    
                    <div class="carousel-item active " style="background-image: url('/images/igrushki41.jpg');">
                            
                        <div class="home_carousel_text text-center">
                            
                              
                           <p>Реабилитационный центр "Аврора" приглашает Ваших детей получить оздоровительные услуги по полустационарной форме</p>
                          
                        </div>
                
                      </div>


                </div>

            </div>
        </div>
    </div>

   
    <div class="container"><p class="home_subtitle">Наши преимущества</p>
        <div class="container">
            <div class="row">
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center">
                    <div class="col text-center">
                        <div class="card" style="border: none;">
                            <img src="/images/icon_heart.png" class="" alt="..." style="height: 100px;
                            display: block;
                            margin-left: auto;
                            margin-right: auto;">
                            <div class="card-body d-flex justify-content-center">
                              <p class="card-text" style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">Широкий спектр услуг</p>
                            </div>
                          </div>      
                    </div>
                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2">
                    <div class="col text-center">
                        <div class="card" style="border: none;">
                            <img src="/images/icon_national.png" class="" alt="..." style="height: 100px; display: block;
                            margin-left: auto;
                            margin-right: auto;">
                            <div class="card-body d-flex justify-content-center">
                              <p class="card-text" style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">Профессиональный персонал</p>
                            </div>
                          </div>                        
                    </div>
    
                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center mb-2">
                    <div class="col text-center">
                        <div class="card" style="border: none;">
                            <img src="/images/icon_people.png" class="" alt="..." style="height: 100px; display: block;
                            margin-left: auto;
                            margin-right: auto;">
                            <div class="card-body d-flex justify-content-center">
                              <p class="card-text" style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">Оказание помощи ежедневно</p>
                            </div>
                          </div>  
                        
    
    
                    </div>
    
                </div>
                <div class="d-flex col-sm-6 col-lg-3 justify-content-center">
                    <div class="col text-center">
                        <div class="card" style="border: none;">
                            <img src="/images/icon_holding.png" class="" alt="..." style="height: 100px; display: block;
                            margin-left: auto;
                            margin-right: auto;">
                            <div class="card-body d-flex justify-content-center">
                              <p class="card-text" style="font-size: 21px; color: #DB5C86; font-weight: 500; max-width: 200px;">Индивидуальная программа</p>
                            </div>
                          </div>  
    
                      
    
    
    
                    </div>
    
                </div>
            </div>
    
        </div>
    
    </div>
   
    

    
@endsection
