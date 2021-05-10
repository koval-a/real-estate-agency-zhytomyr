@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Блог </div>
                    <div class="card-body m-auto">
                        <img src="/files/images/blog/{{ $blog[0]->picture }}" alt="blog-image" class="rounded shadow m-auto">

                        <h1>{{ $blog[0]->title }}</h1>
                        <span>  {{ $blog[0]->created_at->format('Y-m-d') }}</span>
                        <hr>
                        {{ $blog[0]->text }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
