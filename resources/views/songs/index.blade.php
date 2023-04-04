{{-- utilizzo extends per estendere layouts.app.blade.php --}}
@extends('layouts.app');

{{-- section che da nome alle pagine e alle azioni --}}
@section('page-name','lista delle canzoni')

{{-- il principio di questi files e' quello di riportare il minimo indispensabile quindi potenzialmente header e footer che si ripetono sempre o comunque elementi complessi no quindi si opta per la scelta dei partials --}}


@section('main-content')
lista delle canzoni
@endsection


