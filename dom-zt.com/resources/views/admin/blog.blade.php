@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="top-bar row">
            <div class="col-md-10">
                <h1>Блог ({{$countBlogItem}})</h1>
            </div>
            <div class="col-md-2 align-content-right">
                <a href="{{ route('admin.blog.new') }}" class="btn btn-success w-100">Новий пост</a>
            </div>
        </div>
        <hr>
                <table class="table">
                    <thead>
                    <tr class="bg-secondary text-white">
                        <td>
                            #
                        </td>
                        <td>
                            Зображення
                        </td>
                        <td>
                            Назва
                        </td>
                        <td>
                            Текст
                        </td>
                        <td>
                            Дія
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($blog as $key => $item)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                <img src="/files/images/blog/{{ $item->picture }}" alt="blog-image" class="rounded shadow m-auto" width="200px">
                            </td>
                            <td>
                                {{ $item->created_at->format('Y-m-d') }} <br>
                                <h5 class="mt-2"><a href="{{ route('blog.view', $item->slug) }}">{{ $item->title }}</a></h5>

                            </td>
                            <td class="col-md-4">
                                {{ Str::limit($item->text, 300) }}
                            </td>
                            <td>
                                <a href="{{ route('admin.blog.delete', $item->id) }}" class="btn btn-danger"><i class="fab fa-trash"></i> Видалити</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

{{--        <div class="row">--}}

{{--            @foreach($blog as $key => $item)--}}

{{--                <div class="col-md-3 p-2">--}}
{{--                    <div class="shadow bg-white rounded">--}}
{{--                        <a href="{{ route('blog.view', $item->slug) }}" class="blog__link">--}}
{{--                            <div class="blog__image">--}}
{{--                                <img src="/files/images/blog/{{ $item->picture }}" alt="blog-image"--}}
{{--                                     class="rounded m-auto img-fluid">--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="blog__info p-2">--}}
{{--                            <h5 class="mt-2"><a href="{{ route('blog.view', $item->slug) }}">{{ $item->title }}</a></h5>--}}
{{--                            <span class="text-secondary">{{ $item->created_at->format('Y-m-d') }}</span>--}}
{{--                            <p class="pt-2">--}}
{{--                                {{ Str::limit($item->text, 300) }}--}}
{{--                            </p>--}}
{{--                            <div class="link-read-more d-flex">--}}
{{--                                <a href="{{ route('admin.blog.delete', [$item->id]) }}"--}}
{{--                                   class="btn btn-outline-danger mt-2"><i class="fab fa-trash"></i> Видалити</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                </div>--}}

{{--            @endforeach--}}

{{--        </div>--}}
                {{ $blog->links() }}
        <br>
    </div>
@endsection
