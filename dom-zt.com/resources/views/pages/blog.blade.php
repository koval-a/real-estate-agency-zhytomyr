@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 m-auto">
            {{--                <h1>{{ $blog->title }}</h1>--}}

            <div class="picture">

                <img src="/files/images/blog/{{ $blog->picture }}" alt="blog-image"
                     class="rounded shadow m-auto img-fluid w-100">
            </div>

            <div class="title pt-3">
                <h1>{{ $blog->title }}</h1>
            </div>

            <div class="publish-datetime">
                <span class="text-secondary"> <i class="bi bi-calendar-date"></i> {{ $blog->created_at->format('Y-m-d') }}</span>
            </div>

            <div class="text pt-2">
                <p class="blog-text">
                    {{ $blog->text }}
                </p>
            </div>

        </div>
    </div>
@endsection
