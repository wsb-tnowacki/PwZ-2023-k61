@extends('layout')
@section('tytul')
    WSB - Dodanie posta
@endsection

@section('podtytul')
    Formularz doddający post
@endsection

@section('tresc')
@if($errors->all())
<div class=" alert alert-danger">
  @foreach ($errors->all() as $error)
      <p>{{ $error }}</p>
  @endforeach
</div>  
@endif
<form action="{{ route('posty.store') }}" method="post">
  @csrf
<div class="form-group">
  <label for="tytul">Tytuł</label>
  <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="{{ old('tytul') }}">
</div>
<div class="form-group">
  <label for="autor">Autor</label>
  <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora posta" value="{{ old('autor') }}">
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="{{ old('email') }}">
</div>
<div class="form-group">
  <label for="tresc">Treść</label>
  <textarea class="form-control" name="tresc" id="tresc" rows="4">{{ old('tresc') }}</textarea>
</div>
<br>
<button class="btn btn-primary" type="submit">Dodaj posta</button>
</form>
@endsection