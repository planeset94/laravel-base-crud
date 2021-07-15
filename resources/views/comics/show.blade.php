@extends('layout.app')


@section('css')
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
@endsection

@section('title', 'Selected~Comic')


@section('header')

    <h2 class="pl-2">Details</h2>
    <a class="pl-2" href="{{ route('comics.index') }}">
        Home Page
    </a>

@endsection

@section('content')
    <div class="container pt-5">
        <div class="card-cont d-flex">
            <div class="image">
                <img src="{{ asset($comic->image) }}" alt="">
            </div>
            <div class="info pl-5">
                <h1 class="">{{ $comic->title }}</h1>
                <p class="">{{ $comic->description }}</p>
                <p class="">{{ $comic->price }}</p>

            </div>
        </div>

    </div>


    {{-- <form action="{{ route('comics.destroy', $comic->id) }}" method="post"></form>
    @csrf
    @method('DELETE') --}}


@endsection
