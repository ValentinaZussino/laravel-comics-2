@extends('layouts.app')

@section('content')
    {{-- jumbo --}}
    <div class="jumbo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>

    {{-- stampa comics --}}
    <div class="comic-list">
        <div class="tag-section bg-primary">
            <h3>Current Series</h3>
        </div>
        @foreach ($comics as $comic)
        <div class="vz_card">
            <div class="img_card">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="text_card">
                <a href="{{route('comics.show', $comic->id)}}" class="text-white text-uppercase text-decoration-none">{{$comic->series}}</a>
            </div>
            <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div>
                    <button class="submit btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
        @endforeach
    </div>

    {{-- create a comic --}}
    <div class="text-center my-5 d-flex justify-content-center">
        <div class="create_button">
            <a href="{{route('comics.create')}}">Create a 
                comic
            </a>
        </div> 
    </div>
    
    
    <div class="d-flex justify-content-center align-content-center">
        <div class="load_button">
            <span class="text-white text-uppercase">load more</span>
        </div>
    </div> 
@endsection