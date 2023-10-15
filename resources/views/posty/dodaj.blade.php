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
  Uzupełnij brakujące pola!
</div>  
@endif
<form action="{{ route('posty.store') }}" method="post">
  @csrf
<div class="form-group">
  <label for="tytul">Tytuł</label>
  <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="{{ old('tytul') }}">
</div>
@if($errors->get('tytul'))
<div class=" alert alert-danger">
  @foreach ($errors->get('tytul') as $error)
      <p>{{ $error }}</p>
  @endforeach
</div>  
@endif
<div class="form-group">
  <label for="autor">Autor</label>
  <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora posta" value="{{ old('autor') }}">
</div>
@if($errors->get('autor'))
<div class=" alert alert-danger">
  @foreach ($errors->get('autor') as $error)
      <p>{{ $error }}</p>
  @endforeach
</div>  
@endif
<div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="{{ old('email') }}">
</div>
@if($errors->get('email'))
<div class=" alert alert-danger">
  @foreach ($errors->get('email') as $error)
      <p>{{ $error }}</p>
  @endforeach
</div>  
@endif
<div class="form-group">
  <label for="tresc">Treść</label>
  <textarea class="form-control" name="tresc" id="tresc" rows="4">{{ old('tresc') }}</textarea>
</div>
@if($errors->get('tresc'))
<div class=" alert alert-danger">
  @foreach ($errors->get('tresc') as $error)
      <p>{{ $error }}</p>
  @endforeach
</div>  
@endif
<br>
<button class="btn btn-primary" type="submit">Dodaj posta</button>
</form>
@endsection