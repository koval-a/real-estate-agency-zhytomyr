@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Карточка Об'єкта</h1>
        <hr>
        @foreach($obekt as $key => $item)
            name: {{ $item->name }}
            <br>
            description: {{ $item->description }}
            <br>
           $ {{ $item->price }}
            <br>
            {{ $item->square }} m2
        @endforeach
    </div>
@endsection
