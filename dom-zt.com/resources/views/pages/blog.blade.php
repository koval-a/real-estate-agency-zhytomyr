@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-8 m-auto">

            <div class="button__back row align-items-center">
                <a href="" class="back__link">
                    <svg class="strelka-left-4" viewBox="0 0 100 85">
                        <polygon
                            points="58.263,0.056 100,41.85 58.263,83.641 30.662,83.641 62.438,51.866 0,51.866 0,31.611 62.213,31.611 30.605,0 58.263,0.056">
                        </polygon>
                    </svg>
                    <div class="button__link">
                        <a href="{{ route('blog.list') }}">Назад</a>
                    </div>
                </a>
            </div>

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
