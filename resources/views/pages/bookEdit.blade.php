@extends('layouts.main-layout')
@section('content')
    <h2>Modifica il Libro</h2>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('updateBook', $book -> id)}}" method="POST">
        @method("POST")
        @csrf

        <label for="title" >TITOLO:</label>
        <input type="text" value="{{$book -> title}}" name='title'> <br>

        <label for="autor" >AUTORE:</label>
        <input type="text" value="{{$book -> autor}}" name='autor'> <br>

        <label for="publisher" >CASA EDITRICE:</label>
        <input type="text" value="{{$book -> publisher}}" name='publisher'> <br>

        <label for="release_date" >DATA USCITA:</label>
        <input type="date" value="{{$book -> release_date}}" name='release_date'> <br>

        <label for="pages" >NUMERO DI PAGINE:</label>
        <input type="text" value="{{$book -> pages}}" name='pages'> <br>
        <input type="submit" value="INSERISCI">

    </form>

@endsection