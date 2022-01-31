@extends('layouts.main-layout')
@section('content')
    <section class="box-container">
        <a  href="{{route('home')}}"><div class="container-list "><div class="bouncing">Comic List</div></div></a>
        <a  href="{{route('homeBook')}}"><div class="container-list "><div class="bouncing">Book List</div></div></a>
    </section>
   
    
    
@endsection