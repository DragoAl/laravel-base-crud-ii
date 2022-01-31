@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('home')}}">Back to Home Page</a></h4>
    <h2>Titolo : {{$comic['title']}}</h2>
    <h4> Autore {{$comic['autor']}}</h4>
    <h4>Data Uscita {{$comic['release_date']}}</h4>
    <h5>Numero di Pagine ={{$comic['pages']}}</h5>
    
    
@endsection