@extends('layout.main')

@section('content')


<div class="container">

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $movie->original_title }}</h6>
            <p class="card-text">{{ $movie->nationality }}</p>
            <p class="card-text">{{ $movie->date }}</p>
            <p class="card-text">{{ $movie->vote }}</p>

            <a class="btn btn-primary" href="{{route('home')}}">Home</a>
        </div>
    </div>

</div>

@endsection
