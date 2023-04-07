{{-- utilizzo extends per estendere layouts.app.blade.php --}}
@extends('layouts.app')
@section ('page-name', 'Detail-song')
{{-- section che da nome alle pagine e alle azioni --}}


@section('main-content')



<h1 class="my-4">Titolo del brano: {{$song->title}}</h1>
:  <div class="dettaglio-canzone row mt-1">
    <div class="col-8 offset-2">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" aria-current="true" href="#">La Tua Canzone</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('songs.index') }}">Torna alla Lista</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <img class="my-4" src="{{$song->poster}}" >
          <h2 class="card-title">Cantante:  {{$song->author}}</h2>
          <h4 class="card-title">Album:  {{$song->album}}</h4>
          <h4 class="card-title">Editore:  {{$song->editor}}</h4>
          <h4 class="card-title">Numero di Streaming:  {{$song->number_of_streaming}}</h4>
          <h5 class="card-text">Lunghezza Brano:  {{$song->length}}</h5>
          <a href="https://www.youtube.com/" class="btn btn-primary">Ascoltala su...</a>
        </div>
      </div>
    </div>
  </div>



@endsection



