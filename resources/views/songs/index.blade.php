{{-- utilizzo extends per estendere layouts.app.blade.php --}}
@extends('layouts.app')
@section('cdn')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css"> 
@endsection
{{-- section che da nome alle pagine e alle azioni --}}
@section('page-name','Lista delle canzoni')

{{-- il principio di questi files e' quello di riportare il minimo indispensabile quindi potenzialmente header e footer che si ripetono sempre o comunque elementi complessi no quindi si opta per la scelta dei partials --}}


@section('main-content')

<h1 class="mt-4 mb-5">Song List</h1>
<div class="row">
  <div class="col-6">
    <form class="d-flex my-2 my-lg-0">
      <input class="form-control me-sm-2" name="term" type="text" placeholder="Search Songs">
      <button class="btn btn-light my-2 my-sm-0 fw-bold" type="submit">Search</button>
    </form>
  </div>
  <div class="col-6 d-flex justify-content-end">
    <a type="button" class="btn btn-success fw-bold" href="{{route('songs.create')}}">Create New Song Link</a>
  </div>
</div>

    

<table class="table table-dark table-striped  mt-5 p-3">
  <thead class="table-head">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Album</th>
      <th scope="col">Author</th>
      <th scope="col">Editor</th>
      <th scope="col">Length</th>
      <th scope="col">Streamings</th>
      <th scope="col">Formats</th>
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
      <td class="d-flex justify-content-between">
        <a class="" href="{{ route('songs.show', ['song' => $song ])}}"><i class="bi bi-sliders2-vertical text-success fs-3"></i></a>
        <a class="" href="{{ route('songs.edit', ['song' => $song ])}}"><i class="bi bi-bandaid-fill text-success fs-3"></i></a>
        {{-- per la cancellazione non possiamo usare un link ma abbiamo bisogno di un form con la route nella action,method post e il token csrf --}}
        <button class="bi bi-clipboard2-x-fill text-danger delete-icon fs-3" data-bs-toggle="modal" data-bs-target="#delete-modal-{{$song->id}}"></button>
      </td>
      <!-- Modal -->
      
      
      {{-- creata la colonna detail creo un td che rimanderà alla rotta della show e gli viene passato il parametro con l'intero elemento $song tramite array associativo['song' => $song possiamo passarlo anche solo come $song] (a noi serve l'id ma la resource ci facilita in questo senso) --}}
    </tr>
    @endforeach
    
  </tbody>
</table>
{{-- {{$songs->links()}} utilizzo per paginare questo semplice comapndo --}}
{{-- se lo voglio con bootstrap invece questo --}}
{{$songs->links("pagination::bootstrap-5")}}

{{-- le modals si mettono a fondo pagina e si riportano nella view app con lo yield --}}

@endsection
@section('modals')
@foreach($songs as $song)
<div class="modal fade" id="delete-modal-{{$song->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-4  fw-bold" id="exampleModalLabel">Attention</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-2 fw-bold">
        Are you sure you want to delete the song with title {{$song->title}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info text-light border fw-bold" data-bs-dismiss="modal">Close</button>
        <form class="" action="{{ route('songs.destroy', ['song' => $song ])}}" method="POST">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger border fw-bold">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endforeach
@endsection 








