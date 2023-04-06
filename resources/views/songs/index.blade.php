{{-- utilizzo extends per estendere layouts.app.blade.php --}}
@extends('layouts.app')

{{-- section che da nome alle pagine e alle azioni --}}
@section('page-name','Lista delle canzoni')

{{-- il principio di questi files e' quello di riportare il minimo indispensabile quindi potenzialmente header e footer che si ripetono sempre o comunque elementi complessi no quindi si opta per la scelta dei partials --}}


@section('main-content')

<table class="table table-dark table-striped border border-dark">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Album</th>
      <th scope="col">Author</th>
      <th scope="col">Editor</th>
      <th scope="col">Length</th>
      <th scope="col">Number of Streaming</th>
      <th scope="col">Music Release Formats</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($songs as $song)
        
    <tr class="table-info">
      <th scope="row">{{$song->id}}</th>
      <td>{{$song->title}}</td>
      <td>{{$song->album}}</td>
      <td>{{$song->author}}</td>
      <td>{{$song->editor}}</td>
      <td>{{$song->length}}</td>
      <td>{{$song->number_of_streaming}}</td>
      <td>{{$song->music_release_formats}}</td>
      <td><a href="{{ route('songs.show', ['song' => $song ])}}">Detail</a></td>

      {{-- creata la colonna detail creo un td che rimanderà alla rotta della show e gli viene passato il parametro con l'intero elemento $song tramite array associativo['song' => $song possiamo passarlo anche solo come $song] (a noi serve l'id ma la resource ci facilita in questo senso) --}}

    </tr>
    @endforeach
    
  </tbody>
</table>



@endsection


