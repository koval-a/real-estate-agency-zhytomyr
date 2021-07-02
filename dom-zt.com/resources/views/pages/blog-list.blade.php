@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="title mt-5">Блог</h1>

        <div class="row">
            @if($blog->count() > 0)
                @foreach($blog as $key => $item)

                    <div class="col-md-4 p-2 blog-card">
                        <div class="shadow bg-white rounded">
                            <a href="{{ route('blog.view', $item->slug) }}" class="blog__link">
                                <div class="blog__image">
                                    <img src="/files/images/blog/{{ $item->picture }}" alt="blog-image" class="rounded m-auto img-fluid">
                                </div>
                            </a>
                            <div class="blog__info p-2">
                                <a href="{{ route('blog.view', $item->slug) }}">
                                    <h2 class="mt-2 text-danger blog-title">
                                        {{ Str::limit($item->title, 50) }}
                                    </h2>
                                </a>
                                <span class="text-secondary"> <i class="bi bi-calendar-date"></i> {{ $item->created_at->format('Y-m-d') }}</span>
                                <p class="pt-2 text-justify blog-short-text-card">
                                    {{ Str::limit($item->text, 200) }}
                                </p>
                                <div class="link-read-more d-flex mt-2">
                                    <a href="{{ route('blog.view', $item->slug) }}" class="blog__link btn btn-outline-danger">Читати детальніше</a>
                                </div>
                            </div>

                        </div>
                    </div>

                @endforeach
            @else
                <div class="p-2">
                    <p>
                        Постів блогу неиає!
                    </p>
                </div>
            @endif
        </div>

        @if($blog->count() >= 10)
        <hr>
        {{ $blog->links() }}
        <hr>
        @endif

    </div>
@endsection
