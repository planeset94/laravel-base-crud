@extends('layout.app')



@section('title', 'Home~Page')


@section('header')
    <h1>Comics</h1>
@endsection

@section('content')
    <div class="container">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic->imgage }}" alt="">
            </div>
            <h3 class="title">Title: {{ $comic->title }}</h3>
            <p class="desc">Description: {{ $comic->description }}</p>
            <p class="price">Price: {{ $comic->price }}</p>

        @endforeach
    </div>


@endsection
