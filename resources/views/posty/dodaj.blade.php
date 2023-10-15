@extends('layout')
@section('tytul')
    WSB - Dodanie posta
@endsection

@section('podtytul')
    Formularz doddający post
@endsection

@section('tresc')
<form action="{{ route('posty.store') }}" method="post">
  @csrf
<div class="form-group">
  <label for="tytul">Tytuł</label>
  <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta">
</div>
<div class="form-group">
  <label for="autor">Autor</label>
  <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora posta">
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email">
</div>
<div class="form-group">
  <label for="tresc">Treść</label>
  <textarea class="form-control" name="tresc" id="tresc" rows="4"></textarea>
</div>
<br>
<button class="btn btn-primary" type="submit">Dodaj posta</button>
</form>
@endsection