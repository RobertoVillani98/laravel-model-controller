@extends('layouts.base')

@section('pageTitle')
    Home
@endsection

@section('pageContent')
<div class="home">
    <div class="container">
        <div class="row">

            @foreach ($movies as $movie)
                <div class="card">
                    <h2>{{$movie['title']}}</h2>
                    <h3>Titolo originale: {{$movie['original_title']}}</h3>
                    <span><strong>Nazionalità:</strong> {{$movie['nationality']}}</span>
                    <span><strong>Data di uscita:</strong> {{$movie['date']}}</span>
                    <span><strong>Voto:</strong> {{$movie['vote']}}</span>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection