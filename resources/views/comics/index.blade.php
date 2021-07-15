@extends('layout.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('title', 'Home~Page')


@section('header')
    <h1>Comics</h1>
@endsection

@section('content')
    <div class="container">

        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                    <tr>
                        <td scope="row"><img width="120px" src="{{ $comic->image }}" alt=""></td>
                        <td>
                            <h5 class="title">Title: {{ $comic->title }}</h5>
                        </td>
                        <td>
                            <p class="desc">Description: {{ $comic->description }}</p>
                        </td>
                        <td>
                            <p class="price">Price: {{ $comic->price }}</p>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

















    </div>


@endsection
