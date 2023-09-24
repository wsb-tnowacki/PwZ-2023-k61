@extends('layout')
@section('tytul')
    WSB - O nas
@endsection

@section('podtytul')
    O nas
@endsection

@section('tresc')
    <div>Treść dla informacji o nas 
        <ol>
            @foreach ($zadania as $zadanie)
                <li>{{ $zadanie }}</li>
            @endforeach
        </ol>
    </div>
@endsection