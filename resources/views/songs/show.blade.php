{{-- utilizzo extends per estendere layouts.app.blade.php --}}
@extends('layouts.app')
@section ('page-name', 'Detail-song')
{{-- section che da nome alle pagine e alle azioni --}}


@section('main-content')



<h1 class="my-4">The Title Is: {{$song->title}}</h1>
:  <div class="dettaglio-canzone row mt-1 mb-5">
    <div class="col-8 offset-2">
      <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active fw-bold" aria-current="true" href="#">Your Song</a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="{{ route('songs.index') }}">Back to the list</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <img class="my-4" src="{{$song->poster}}" >
          <h2 class="card-title mb-3">Author:  {{$song->author}}</h2>
          <h2 class="card-title mb-3">Album:  {{$song->album}}</h2>
          <h4 class="card-title mb-3">Editore:  {{$song->editor}}</h4>
          <h4 class="card-text mb-3">Number of Streaming:  {{$song->number_of_streaming}}</h4>
          <h4 class="card-text mb-3">Song Length:  {{$song->length}}</h4>
          <h5 class="card-text mb-3">Release Format:  {{$song->music_release_formats}}</h5>
          <a href="https://open.spotify.com/" class="btn btn-primary">Listen it on...</a>
        </div>
      </div>
    </div>
  </div>



@endsection



