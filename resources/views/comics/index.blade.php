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


                            {{-- modal --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#comics--{{ $comic->id }}">
                                Delete
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="comics--{{ $comic->id }}" tabindex="-1"
                                aria-labelledby="comics--{{ $comic->id }}" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modal-title">Warning</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Permanently delete this record
                                        </div>

                                        {{-- COMANDI INTERNI AL POP-UP --}}
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Go
                                                Back</button>


                                            <form action="{{ route('comics.delete', $comic->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" id="danger-button"
                                                    class="btn btn-outline-danger">Confirm</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- modal --}}


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


















    </div>


@endsection
