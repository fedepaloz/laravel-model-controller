@extends('layouts.main')

@section ('home', 'movie-list')

@section ('movie-cards')

{{-- qua dentro ci vanno tutti i film --}}
<div class="container">
<div class="row">
    @foreach ($movies as $movie)
    <div class="col-3 my-3">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$movie->title}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{$movie->original_title}}</h6>
              <h6>{{$movie->nationality}}</h6>
              <h6>{{$movie->date}}</h6>
              <h6>{{$movie->vote}}</h6>
              
            </div>
          </div>
        </div>
        @endforeach
</div>
    
@endsection