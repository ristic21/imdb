

@extends('layout.default')

@section('content')
    
    <div class="container"></div>
    @foreach ($movies as $movie)
    <div class="row">
        
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
              <img class="card-img-top" src="https://m.media-amazon.com/images/M/MV5BMTk0MTQ3NDQ4Ml5BMl5BanBnXkFtZTcwOTQ3OTQzMw@@._V1_.jpg" alt="Card image cap" style="width: 150px">
              <div class="card-body">
                <h4 class="card-text">{{$movie->title}}</h4>
                <p class="card-text">{{$movie->director}}</p>
                <p class="card-text">{{$movie->storyline}}</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a type="button" href="/movies/{{$movie->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">{{$movie->year}}</small>
                </div>
              </div>
            </div>
       
     
        </div>
        @endforeach
    </div>
    
@stop
