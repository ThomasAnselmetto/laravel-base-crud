@extends('layouts.app')
@section('page-name', 'Edit Song' . $song->title)
@section('segnaposto')
<h1 class="my-4">Edit Song</h1>
@endsection

@section('main-content')

{{-- a differenza del create dobbiamo dare alla route anche la variabile $song per far si che modifichi la song scelta e il method e' PUT ma con la direttiva @method('PUT')--}}
<form action="{{route('songs.update', $song)}}" method="POST" class=" create-form row mt-5 gx-5">
  @csrf
  @method('PUT')
{{-- altra modifica e' il null coalescing operator nel value --}}
  <div class="col-3 mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title') ?? $song->title}}">
    @error('title')
    <div class="invalid-feedback fw-bold">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="col-3 mb-3">
    <label for="album" class="form-label">Album</label>
    <input type="text" class="form-control @error('album') is-invalid @enderror" id="album" name="album" value="{{old('album') ?? $song->album}}">
    @error('album')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="col-3 mb-3">
    <label for="author" class="form-label">Author</label>
    <input type="text" class="form-control @error('author') is-invalid @enderror" id="author" name="author" value="{{old('author') ?? $song->author}}">
    @error('author')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="col-3 mb-3">
    <label for="editor" class="form-label">Editor</label>
    <input type="text" class="form-control @error('editor') is-invalid @enderror" id="editor" name="editor" value="{{old('editor') ?? $song->editor}}">
    @error('editor')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="col-3 mb-3">
    <label for="length" class="form-label">Length</label>
    <input type="text" class="form-control @error('length') is-invalid @enderror" id="length" name="length" value="{{old('length') ?? $song->length}}">
    @error('length')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="col-3 mb-3">
    <label for="poster" class="form-label">Poster</label>
    <input type="text" class="form-control" id="poster" name="poster" value="{{old('poster') ?? 'https://miro.medium.com/v2/resize:fit:833/1*F3YiicPCfmgovWvZGdYuWA.png'}}">
    

  </div>

  <div class="col-3 mb-3">
    <label for="number_of_streaming" class="form-label">Number_of_streaming</label>
    <input type="number" class="form-control @error('number_of_streaming') is-invalid @enderror" id="number_of_streaming" name="number_of_streaming" value="{{old('number_of_streaming') ?? $song->number_of_streaming}}">
    @error('number_of_streaming')
    <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
  </div>

  <div class="col-3">
    <label for="music_release_formats" class="form-label">Music_release_formats</label>
    <select class="col-3 form-select" id="music_release_formats" name="music_release_formats" aria-label="Default select example">
      
      <option value="33 giri" @if(old('music_release_formats') == '33_giri') selected @endif>33 Giri</option>
      <option value="45 giri" @if(old('music_release_formats') == '45_giri') selected @endif>45 Giri</option>
      <option value="cd" @if(old('music_release_formats') == 'cd_rom') selected @endif>Cd-Rom</option>
      <option value="digitale" @if(old('music_release_formats') == 'digitale') selected @endif>Digitale</option>
    </select>
  </div>
  <div class="col-12 d-flex justify-content-start mt-3">
    <button class="btn btn-success fw-bold" type="submit">Save</button>
  </div>
</form>
@endsection




