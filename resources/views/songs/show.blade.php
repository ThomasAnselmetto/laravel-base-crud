{{-- utilizzo extends per estendere layouts.app.blade.php --}}
@extends('layouts.app');

{{-- section che da nome alle pagine e alle azioni --}}


@section('main-content')



<h1 class="my-5">Titolo del brano: {{$song->title}}</h1>
  <div class="row mt-1">
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
          <img src="{{$song->poster}}" >
          <h3 class="card-title">{{$song->author}}</h3>
          <h5 class="card-title">{{$song->album}}</h5>
          <h5 class="card-title">{{$song->editor}}</h5>
          <h5 class="card-title">{{$song->number_of_streaming}}</h5>
          <p class="card-text">{{$song->length}}</p>
          <a href="#" class="btn btn-primary">Ascoltala su...</a>
        </div>
      </div>
    </div>
  </div>



@endsection



