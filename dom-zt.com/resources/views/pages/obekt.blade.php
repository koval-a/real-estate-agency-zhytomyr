@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Карточка Об'єкта</h1>
        <hr>
        ...
       @foreach($obekt as $key => $item)
           {{ $item->name }}
        @endforeach
    </div>
@endsection
