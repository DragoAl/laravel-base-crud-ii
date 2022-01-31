@extends('layouts.main-layout')
@section('content')
    <h2>Inserici un nuovo Libro</h2>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{route('storeBook')}}" method="POST">
        @method("POST")
        @csrf

        <label for="title" >TITOLO:</label>
        <input type="text" placeholder="Titolo" name='title'> <br>

        <label for="autor" >AUTORE:</label>
        <input type="text" placeholder="Autore" name='autor'> <br>

        <label for="publisher" >CASA EDITRICE:</label>
        <input type="text" placeholder="Casa Editrice" name='publisher'> <br>

        <label for="release_date" >DATA USCITA:</label>
        <input type="date" placeholder="Data uscita" name='release_date'> <br>

        <label for="pages" >NUMERO DI PAGINE:</label>
        <input type="text" placeholder="N.Pagine" name='pages'> <br>
        <input type="submit" value="INSERISCI">

    </form>

@endsection