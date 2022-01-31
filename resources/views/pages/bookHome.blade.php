@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('homePage')}}">BACK TO HOME</a></h4>
    <div class="list-container">
        <h2>Book List</h2>
        <h3><a href="{{route('createBook')}}">CREATE NEW </a></h3>
        <ul>
            @foreach ($books as $book)
                <li>
                    <a href="{{route('showBook', $book -> id)}}">
                        {{$book -> title}}
                    </a>
                    - {{$book -> autor}}
                    -<a href="{{route('editBook', $book -> id)}}">EDIT</a>
                    -<a href="{{route('deleteBook', $book -> id)}}">DELETE</a>


                </li>
            @endforeach
        </ul>

    </div>
    
    
@endsection