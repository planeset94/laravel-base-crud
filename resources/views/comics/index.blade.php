@extends('layout.app')


@section('css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
@endsection

@section('title', 'Home~Page')


@section('header')
    <h2 class="pl-2">Comics</h2>
    <a class="p-2" href="{{ route('comics.create') }}">
        Create a new record
    </a>

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
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($comics as $comic)
                    <tr>
                        <td scope="row">
                            <a href="{{ route('comics.show', $comic->id) }}"><img width="120px"
                                    src="{{ $comic->image }}" alt=""></a>
                        </td>
                        <td>
                            <h5 class="title">Title: {{ $comic->title }}</h5>
                        </td>
                        <td>
                            <p class="desc">Description: {{ $comic->description }}</p>
                        </td>
                        <td>
                            <p class="price">Price: {{ $comic->price }}</p>
                        </td>
                        <td>
                            <a href="{{ route('comics.show', $comic->id) }}">View</a>
                            <a class="pl-1" href="{{ route('comics.edit', $comic->id) }}">Edit</a>
                            <br>
                            <form class="pt-3" action="{{ route('comics.delete', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

















    </div>


@endsection
