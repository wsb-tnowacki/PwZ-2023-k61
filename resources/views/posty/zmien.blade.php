@extends('layout')
@section('tytul')
    WSB - Zmiana posta
@endsection

@section('podtytul')
    Formularz aktualizujący post
@endsection

@section('tresc')
@if($errors->all())
<div class=" alert alert-danger">
  Uzupełnij brakujące pola!
</div>  
@endif
<form action="{{ route('posty.update', $post->id) }}" method="post">
  @csrf
  @method('PUT')
<div class="form-group">
  <label for="tytul">Tytuł</label>
  <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="@if(old('tytul') !== null){{old('tytul')}}@else{{$post->tytul}}@endif">
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
  <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora posta" value="@if(old('autor') !== null){{old('autor')}}@else{{$post->user->name}}@endif">
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
  <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="@if(old('email') !== null){{old('email')}}@else{{$post->email}}@endif">
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
  <textarea class="form-control" name="tresc" id="tresc" rows="4">@if(old('tresc') !== null){{old('tresc')}}@else{{$post->tresc}}@endif</textarea>
</div>
@if($errors->get('tresc'))
<div class=" alert alert-danger">
  @foreach ($errors->get('tresc') as $error)
      <p>{{ $error }}</p>
  @endforeach
</div>  
@endif
<br>
<button class="btn btn-success" type="submit">Zmień posta</button>
</form>
@endsection