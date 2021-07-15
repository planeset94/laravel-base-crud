@extends('layout.app')
@section('title', 'Edit record')


@section('header')
    <a class="text-center pl-3" href="{{ route('comics.index') }}">
        <small>Home Page</small>
    </a>
    <h3 class="text-center py-5">Edit record</h3>

@endsection

@section('content')
    <div class="container">

        <form action="{{ route('comics.update', $comic->id) }}" method="post">

            @csrf

            @method('PUT')
            {{-- serve a laravel per capire che non è un nuovo record ma una modfiica --}}
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    value="{{ $comic->title }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description"
                    rows="3">{{ $comic->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Images</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                    value="{{ $comic->image }}">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId"
                    value="{{ $comic->price }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
