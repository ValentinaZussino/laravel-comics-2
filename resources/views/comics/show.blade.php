@extends('layouts.app')
@section('content')
    <section class="text-white p-5">
        <h1>{{$comic->title}}</h1>
        <p>{{$comic->description}}</p>
        <img src={{$comic->thumb}} alt="">
        <div>
            <span>{{$comic->price}}</span>
            <br>
            <span>{{$comic->series}}</span>
            <br>
            <span>{{$comic->sale_date}}</span>
            <br>
            <span>{{$comic->type}}</span>
            <br>
            <div class="btn btn-success mt-5">
                <a href="{{route('comics.edit', $comic->id)}}" class="text-white text-decoration-none">Update</a>
            </div>
            {{-- <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div>
                    <button type="submit" class="btn btn-danger mt-5">Delete</button>
                </div>
            </form> --}}
            
            <!-- Trigger/Open The Modal -->
            <button id="" class="myBtn">Open Modal</button>
            <!-- The Modal -->
            <div id="" class="modal myModal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                    <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <span class="text-black">Really want to delete {{$comic->title}}</span>
                        <div>
                            <button type="submit" class="btn btn-danger mt-5">Delete</button>
                        </div>
                    </form> 
                </div>
            
            </div>
  
        </div>
    </section>
    
    <div class="d-flex justify-content-center align-content-center">
        <div class="load_button">
            <span><a href="{{ route('comics.index') }}" class="text-white text-uppercase text-decoration-none">back</a></span>
        </div>
    </div> 
@endsection