@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('home')}}">BACK TO COMIC LIST</a></h4>

    <section>

        <h2> Edit Comic </h2>
    
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        
    
        <form action="{{route('update', $comic -> id)}}" method="POST">
            @method("POST")
            @csrf
    
            <label for="title">TITLE:</label>
            <input type="text" name="title" value="{{$comic -> title}}"> <br>
            
            <label for="autor">AUTOR:</label>
            <input type="text" name="autor" value="{{$comic -> autor}}"> <br>
            
            <label for="release_date">RELEASE DATE:</label>
            <input type="date" name="release_date" value="{{$comic -> release_date}}"> <br>
            
            <label for="pages">NUMBER OF PAGES:</label>
            <input type="text" name="pages" value="{{$comic -> pages}}"> <br>
    
            <input class="btn-submit" type="submit" value="UPDATE">
        </form>
    

    </section>
@endsection