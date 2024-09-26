@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1>I FILM DI BOOLEAN</h1>
            </div>
            <div class="container">
                <div class="row d-flex">
                    @foreach ($movies as $movie)
                        <div class="col-2 d-flex text-center">
                            <div class="card bg-transparent mx-3 mb-3" style="width: 18rem;">
                                <div class="card-body">
                                  <h5 class="card-title">{{ $movie->title }}</h5>
                                  <p class="card-text">{{ $movie->original_title }}</p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item">{{ $movie->nationality }}</li>
                                  <li class="list-group-item">{{ $movie->date }}</li>
                                  <li class="list-group-item">{{ $movie->vote }}</li>
                                </ul>
                                <div class="card-body">
                                  <a href="#" class="card-link">DETTAGLI</a>
                                </div>
                              </div>
                        </div>                
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection