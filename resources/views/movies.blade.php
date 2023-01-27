<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
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
                    <a type="button" href="{{/movies/{id}}}" class="btn btn-sm btn-outline-secondary">View</a>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">{{$movie->year}}</small>
                </div>
              </div>
            </div>
       
     
        </div>
        @endforeach
    </div>
</body>
</html>