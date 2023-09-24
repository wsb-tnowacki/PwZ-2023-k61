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
            <?php foreach ($zadania ?? '' as $zadanie) : ?>
            <li><?= $zadanie ?></li>
            <?php endforeach; ?>
        </ol>
    </div>
@endsection