@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('homeBook')}}">Back to Home Page</a></h4>
    <h2>Titolo : {{$book['title']}}</h2>
    <h4> Autore {{$book['autor']}}</h4>
    <h4>Editrice: {{$book['publisher']}}</h4>
    <h4>Data Uscita {{$book['release_date']}}</h4>
    <h5>Numero di Pagine ={{$book['pages']}}</h5>
    
    
@endsection