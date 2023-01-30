@extends('layout.default')

@section('content')

@foreach ($movies as $movie)
    <ul>
        <li><a href="/movies/genres"class="text-muted" style="text-decoration:none;">{{$movie->genre}}</a></li>
    </ul>
    
@endforeach
@include('layout.sidebar')
@stop