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
        </div>
    </section>
@endsection