@extends('layouts.base')

@section('title')
    Новости
@endsection

@section('content')
    <div class="container text-center">
        <p class="news_title">Новости</p>

    </div>
    <div class="container d-flex flex-row-reverse">
        <button class="d-flex flex-row-reverse news_sorting_btn" type="button"><img class="news_sorting_icon"
                src="/images/Slider.png" alt=""></button>

    </div>
    <div class="container">

        {{ $foo }}
        @json($posts)
    </div>
@endsection
