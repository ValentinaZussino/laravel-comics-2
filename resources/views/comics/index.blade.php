@extends('layouts.app')

@section('content')
    {{-- jumbo --}}
    <div class="jumbo">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    {{-- stampa comics --}}
    <ul>
        @foreach($comics as $comic)
        <li><a href="{{route('comics.show', $comic->id)}}">{{$comic->title}}</a></li>
        @endforeach
    </ul>
    {{-- create a comic --}}
    <div class="text-center my-5">
        <a href="{{route('comics.create')}}" class="text-white text-uppercase text-decoration-none">Create a 
        comic
        </a>
    </div>
    
    {{-- <div class="comic-list">
        @foreach ($comics as $item)
        <div class="vz_card">
            <div class="img_card">
                <img src="{{$item['thumb']}}" alt="">
            </div>
            <div class="text_card">
                <p class="text-white">{{$item['series']}}</p>
            </div>
        </div>
        @endforeach
    </div>--}}
    <div class="d-flex justify-content-center align-content-center">
        <div class="load_button">
            <span class="text-white text-uppercase">load more</span>
        </div>
    </div> 
@endsection