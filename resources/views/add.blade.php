@extends('layout.default')

@section('content')
<form action="{{ url('add')}}" method="POST">
    @csrf
    <label for="title">title</label>
    <input type="text" name="title" id="title">
    <label for="year">year</label>
    <input type="date" name="year" id="year">
    <label for="genre">genre</label>
    <input type="text" name="genre" id="genre">
    <label for="storyline">storyline</label>
    <input type="textbox" name="storyline" id="storyline">
    <label for="storyline">director</label>
    <input type="text" name="director" id="director">
    <button type="submit" class="btn btn-primary">Create Post</button>
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