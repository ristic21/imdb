<aside style="margin-left: 720px">
  <h4>Newest movies out:</h4>
  @php
      $i=0
  @endphp
  @foreach ($movies as $movie)
  @php 
  
  $i++;
  if ($i>5) {
    return;
  }

  @endphp
 
 <li><a href="/movies/{{$movie->id}}">{{$movie->title}}</a> </li>
 
  
  @endforeach
         
</aside>