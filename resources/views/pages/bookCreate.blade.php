@extends('layouts.main-layout')
@section('content')
    <h4><a href="{{route('homeBook')}}">BACK TO BOOK LIST</a></h4>

    <section>

        <h2>CREATE NEW BOOK</h2>
        
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
    
            <label for="title" >TITLE:</label>
            <input type="text" placeholder="Title" name='title'> <br>
    
            <label for="autor" >AUTOR:</label>
            <input type="text" placeholder="Autor" name='autor'> <br>
    
            <label for="publisher" >PUBLISHER:</label>
            <input type="text" placeholder="Publisher" name='publisher'> <br>
    
            <label for="release_date" >RELEASE DATE:</label>
            <input type="date" placeholder="Release Date" name='release_date'> <br>
    
            <label for="pages" >NUMBER OF PAGES:</label>
            <input type="text" placeholder="Number of pages" name='pages'> <br>
            <input  class="btn-submit" type="submit" value="CREATE">
    
        </form>
    
        
    </section>

@endsection