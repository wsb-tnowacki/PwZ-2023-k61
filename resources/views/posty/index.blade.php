@extends('layout')
@section('tytul')
    WSB - Posty
@endsection

@section('podtytul')
    Lista postów
@endsection

@section('tresc')
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Lp</th>
        <th scope="col">Tytuł</th>
        <th scope="col">Autor</th>
        <th scope="col">Data utworzenia</th>
        @auth
        <th scope="col">Akcja</th> 
        @endauth
      </tr>
    </thead>
    <tbody>
      @if ($posty->count())
      @php( $lp=1 )
      @php( $lp=$posty->firstItem() )
      @foreach ($posty as $post)
      <tr>
        <th scope="row">{{$lp++}}</th>
        <td><a href="{{route('posty.show',$post->id)}}">{{$post['tytul']}}</a></td>
        <td>{{$post->user->name}}</td>
        <td>{{date('j F Y H:i:s', strtotime($post->created_at))}}</td>
        @auth
        <td class="d-flex row-flex"><a href="{{route('posty.edit',$post->id)}}"><button class="btn btn-success m-1  " type="button">E</button></a><form action="{{route('posty.destroy',$post->id)}}" method="post">@csrf @method('DELETE')<button class="btn btn-danger m-1" type="submit">X</button></form></td>
        @endauth
      </tr>
      @endforeach
      @else
      <tr>
        <th scope="row" colspan="5">Nie ma żadnych postów!</th>
      </tr>
      @endif
    </tbody>
  </table>
  {{$posty->links()}}
@endsection