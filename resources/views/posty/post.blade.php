@extends('layout')
@section('tytul')
    WSB - Szczegóły posta
@endsection

@section('podtytul')
    Szczegóły posta
@endsection

@section('tresc')
@if($errors->all())
<div class=" alert alert-danger">
  Uzupełnij brakujące pola!
</div>  
@endif
<form action="{{ route('posty.destroy', $post->id) }}" method="post">
  @csrf
  @method('DELETE')
<div class="form-group">
  <label for="tytul">Tytuł</label>
  <input type="text" class="form-control" name="tytul" id="tytul" placeholder="Podaj tytuł posta" value="{{ $post->tytul }}" disabled="disabled">
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
  <input type="text" class="form-control" name="autor" id="autor" placeholder="Podaj autora posta" value="{{ $post->autor }}" disabled="disabled">
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
  <input type="email" class="form-control" name="email" id="email" placeholder="Podaj email" value="{{ $post->email }}" disabled="disabled">
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
  <textarea class="form-control" name="tresc" id="tresc" rows="4" disabled="disabled">{{ $post->tresc }}</textarea>
</div>
@if($errors->get('tresc'))
<div class=" alert alert-danger">
  @foreach ($errors->get('tresc') as $error)
      <p>{{ $error }}</p>
  @endforeach
</div>  
@endif
<br>
<a href="{{route('posty.index')}}"><button class="btn btn-primary" type="button">Powrót na listę postów</button></a>
<a href="{{route('posty.edit',$post->id)}}"><button class="btn btn-success" type="button">Edytuj post</button></a>
<button class="btn btn-danger" type="submit">Usuń post</button>
</form>
@endsection