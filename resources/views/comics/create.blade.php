@extends('layout.app')
@section('title', 'Create record')


@section('header')
    <a class="text-center pl-3" href="{{ route('comics.index') }}">
        <small>Home Page</small>
    </a>
    <h3 class="text-center py-5">Register a new record</h3>

@endsection

@section('content')
    <div class="container">

        <form action="{{ route('comics.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Insert a title" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="image">Images</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                    placeholder="Place a link" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" step="0.01" name="price" id="price" aria-describedby="helpId"
                    placeholder="Set the price" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
