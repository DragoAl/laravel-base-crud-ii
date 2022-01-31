@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('home')}}">BACK TO COMIC LIST</a></h4>

    <section>

        <h2>Create New Comic</h2>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        

        <form action="{{route('store')}}" method="POST">
            @method("POST")
            @csrf

            <label for="title">Title:</label>
            <input type="text" name="title" placeholder="title"> <br>
            
            <label for="autor">Autor:</label>
            <input type="text" name="autor" placeholder="autor"> <br>
            
            <label for="release_date">Release Date:</label>
            <input type="date" name="release_date" placeholder="release date"> <br>
            
            <label for="pages">Pages:</label>
            <input type="text" name="pages" placeholder="pages"> <br>

            <input class="btn-submit" type="submit" value="CREATE">


            
        </form>

    </section>
    
@endsection