{{-- utilizzo extends per estendere layouts.app.blade.php --}}
@extends('layouts.app')
@section('cdn')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"> 
@endsection
{{-- section che da nome alle pagine e alle azioni --}}
@section('page-name','Lista delle canzoni')

{{-- il principio di questi files e' quello di riportare il minimo indispensabile quindi potenzialmente header e footer che si ripetono sempre o comunque elementi complessi no quindi si opta per la scelta dei partials --}}


@section('main-content')

<h1 class="my-4">Song List</h1>
<form class="d-flex my-2 my-lg-0">
  <input class="form-control me-sm-2" name="term" type="text" placeholder="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
<table class="table table-dark table-striped  mt-5 p-3">
  <thead class="table-head">
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
      <td><a href="{{ route('songs.show', ['song' => $song ])}}"><i class="bi bi-sliders2-vertical"></i></a></td>

      {{-- creata la colonna detail creo un td che rimanderà alla rotta della show e gli viene passato il parametro con l'intero elemento $song tramite array associativo['song' => $song possiamo passarlo anche solo come $song] (a noi serve l'id ma la resource ci facilita in questo senso) --}}
    </tr>
    @endforeach
    
  </tbody>
</table>
{{-- {{$songs->links()}} utilizzo per paginare questo semplice comapndo --}}
{{-- se lo voglio con bootstrap invece questo --}}
{{$songs->links("pagination::bootstrap-5")}}
@endsection





