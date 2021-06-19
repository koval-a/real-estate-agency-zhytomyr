@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="title mt-5">Блог</h1>

        <div class="row">
            @foreach($blog as $key => $item)

                <div class="col-md-4 p-2">
                    <div class="shadow bg-white rounded">
                        <a href="{{ route('blog.view', $item->slug) }}" class="blog__link">
                            <div class="blog__image">
                                <img src="/files/images/blog/{{ $item->picture }}" alt="blog-image" class="rounded m-auto img-fluid">
                            </div>
                        </a>
                        <div class="blog__info p-2">
                            <h5 class="mt-2"><a href="{{ route('blog.view', $item->slug) }}">{{ $item->title }}</a></h5>
                            <span class="text-secondary">{{ $item->created_at->format('Y-m-d') }}</span>
{{--                            <p class="pt-2">--}}
{{--                                {{ Str::limit($item->text, 300) }}--}}
{{--                            </p>--}}
                            <div class="link-read-more d-flex mt-2">
                                <a href="{{ route('blog.view', $item->slug) }}" class="blog__link text-danger">Читати детальніше</a>
                            </div>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>

        <hr>
        {{ $blog->links() }}
        <hr>

    </div>
@endsection
