@extends('layouts.main-layout')
@section('content')
    <h2>Comic List</h2>
    <h3><a href="{{route('create')}}">CREATE NEW </a></h3>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="{{route('show', $comic -> id)}}">
                    {{$comic -> title}}
                </a>
                - {{$comic -> autor}}
                -<a href="{{route('edit', $comic -> id)}}">EDIT</a>
                -<a href="{{route('delete', $comic -> id)}}">DELETE</a>


            </li>
        @endforeach
    </ul>
    
@endsection