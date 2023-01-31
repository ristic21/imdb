
@extends('layout.default')

@section('content')


<div class="container">
    <h1>Title: {{$movie->title}}</h1>
    <h4>Director: {{$movie->director}}</h4>
    <p>Storyline: {{$movie->storyline}}</p>
    <p>Storyline: <a href="/genres">{{$movie->genre}}</a> </p>
</div>
@foreach ($movie->comments as $comment)
<div class="card mb-4">
    <div class="card-body">
        <h4>Comment</h4>
      <p>{{$comment->content}}</p>
      <p class="text-muted">{{$comment->created_at}}</p>
    </div>
</div>
@endforeach

<form action="{{url("/movies/add")}}" method="POST">
    @csrf
    <label for="content">Add a comment</label>
    <input type="textbox" name="content" id="content">
    <button type="submit" class="btn btn-primary">Add Comment</button>
    <input type="hidden" value="{{$movie->id}}" name="movie_id" id="movie_id">
</form>
@if ($errors->any()) 
        <div class="container">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </div>
        
    @endif
    @if (session('status'))
        <div class="container">
            {{session('status')}}
        </div>
        
    @endif

 @stop