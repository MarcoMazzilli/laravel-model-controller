@extends('layout.main')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Titolo</th>
            <th scope="col">Titolo originale</th>
            <th scope="col">Lingua</th>
            <th scope="col">Data di uscita</th>
            <th scope="col">Voto</th>
            <th scope="col">Dettagli</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($movies as $movie)

        <tr>
            <td>{{ $movie->title}}</td>
            <td>{{ $movie->original_title}}</td>
            <td>{{ $movie->nationality}}</td>
            <td>{{ $movie->date}}</td>
            <td>{{ $movie->vote}}</td>
            <td><a class="btn btn-success" href="{{ route('details',['id'=> $movie['id']]) }}">Success</a>
            </td>
        </tr>

        @endforeach
        </tbody>
    </table>
@endsection
