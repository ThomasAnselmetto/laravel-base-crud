@extends('layouts.app')
@section('page-name', 'Create Song')
@section('segnaposto')
<h1 class="my-4">Create New Song</h1>
@endsection

@section('main-content')
<form action="{{route('songs.store')}}" method="POST" class="row mt-5 gx-5">
  @csrf

  <div class="col-3 mb-3">
    <label for="title" class="form-label">title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="aaaaaa">
  </div>
  <div class="col-3 mb-3">
    <label for="album" class="form-label">album</label>
    <input type="text" class="form-control" id="album" name="album" placeholder="aaaaaa">
  </div>
  <div class="col-3 mb-3">
    <label for="author" class="form-label">author</label>
    <input type="text" class="form-control" id="author" name="author" placeholder="aaaaaa">
  </div>
  <div class="col-3 mb-3">
    <label for="editor" class="form-label">editor</label>
    <input type="text" class="form-control" id="editor" name="editor" placeholder="aaaaaa">
  </div>
  <div class="col-3 mb-3">
    <label for="length" class="form-label">length</label>
    <input type="text" class="form-control" id="length" name="length" placeholder="aaaaaa">
  </div>
  <div class="col-3 mb-3">
    <label for="poster" class="form-label">poster</label>
    <input type="text" class="form-control" id="poster" name="poster" placeholder="aaaaaa">
  </div>
  <div class="col-3 mb-3">
    <label for="number_of_streaming" class="form-label">number_of_streaming</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="aaaaaa">
  </div>
  <div class="col-3">
    <label for="exampleFormControlInput1" class="form-label">music_release_formats</label>
    <select class="col-3 form-select" aria-label="Default select example">
      <option selected>Formats</option>
      <option value="vinile">Vinile</option>
      <option value="digitale">Digitale</option>
    </select>
  </div>
  <div class="col-12 d-flex justify-content-start mt-3">
    <button class="btn btn-success fw-bold" type="submit">Save</button>
  </div>
</form>
@endsection




