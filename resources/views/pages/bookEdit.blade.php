@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('homeBook')}}">BACK TO BOOK LIST</a></h4>

    <section>
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
    
            <label for="title" >TITLE:</label>
            <input type="text" value="{{$book -> title}}" name='title'> <br>
    
            <label for="autor" >AUTOR:</label>
            <input type="text" value="{{$book -> autor}}" name='autor'> <br>
    
            <label for="publisher" >PUBLISHER:</label>
            <input type="text" value="{{$book -> publisher}}" name='publisher'> <br>
    
            <label for="release_date" >RELEASE DATE:</label>
            <input type="date" value="{{$book -> release_date}}" name='release_date'> <br>
    
            <label for="pages" >NUMBER OF PAGES:</label>
            <input type="text" value="{{$book -> pages}}" name='pages'> <br>
            <input class="btn-submit" type="submit" value="INSERISCI">
    
        </form>
    

    </section>

@endsection