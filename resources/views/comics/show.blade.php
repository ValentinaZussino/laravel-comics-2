@extends('layouts.app')
@section('content')
    <section >
        {{-- jumbo --}}
        <div class="jumbo">
            <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </div>
        {{-- blue row + cover --}}
        <div class="blue-row">
            <div class="container-show">
                <div class="cover-blue-row">
                    <img src={{$comic->thumb}} alt="">
                </div>
            </div>
        </div>
        {{-- details --}}
        <div class="container-show">
            <div class="col-8 mt-5 pe-5">
                <h1>{{$comic->title}}</h1>
                <div class="bg-success">
                    <span>{{$comic->price}}</span>
                </div>
                <p>{{$comic->description}}</p>
                {{-- update --}}
                <div class="btn btn-success mt-5">
                    <a href="{{route('comics.edit', $comic->id)}}" class="text-white text-decoration-none">Update</a>
                </div>
                {{-- delete --}}
                <button id="" class="myBtn btn btn-danger mt-5 ms-2">Delete</button>
                <div id="" class="modal myModal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <span class="text-black">Really want to delete {{$comic->title}} ?</span>
                            <div class="w-100 text-center">
                                <button type="submit" class="btn btn-danger mt-5">Delete</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
            <div class="col-4 mt-5">
                <div>
                    <span>advertisement</span>
                </div>
                <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="">
            </div>
        </div>

        <div>
            <br>
            <span>{{$comic->series}}</span>
            <br>
            <span>{{$comic->sale_date}}</span>
            <br>
            <span>{{$comic->type}}</span>
            <br>
            
            {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div>
                    <button type="submit" class="btn btn-danger mt-5">Delete</button>
                </div>
            </form> --}}
        </div>
    </section>
    
    <div class="d-flex justify-content-center align-content-center">
        <div class="load_button">
            <span><a href="{{ route('comics.index') }}" class="text-white text-uppercase text-decoration-none">back</a></span>
        </div>
    </div> 
@endsection