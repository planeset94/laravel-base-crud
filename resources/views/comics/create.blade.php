@extends('layout.app')
@section('title', 'Create record')


@section('header')
    <h3 class="text-center py-5">Register a new record</h3>
@endsection

@section('content')
    <div class="container">

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId"
                    placeholder="Insert comic's title">

            </div>


            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="3"></textarea>
            </div>

            <div class="form-group">
                <label for="image">Images</label>
                <input type="text" class="form-control" name="image" id="image" aria-describedby="helpId"
                    placeholder="Insert a description">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="helpId" placeholder="">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>


@endsection
