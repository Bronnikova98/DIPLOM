@extends('layouts.base')

@section('title')
    Новости
@endsection

@section('content')
    <div class="container text-center">
        <p class="news_title">Новости</p>

    </div>
    <div class="container">

        {{ $foo }}
        @json($posts)
    </div>
@endsection
