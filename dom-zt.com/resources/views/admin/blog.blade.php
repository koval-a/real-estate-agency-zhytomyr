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
        <div class="row py-2">
            <div class="col-xl-6">
                @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('success')}}
                    </div>

                @elseif(Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('failed')}}
                    </div>
                @endif
            </div>
        </div>
        <hr>
{{--        <table class="table">--}}
{{--            <thead>--}}
{{--            <tr class="bg-secondary text-white">--}}
{{--                <td>--}}
{{--                    #--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    Дата--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    Назва--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    Текст--}}
{{--                </td>--}}
{{--                <td>--}}
{{--                    Дія--}}
{{--                </td>--}}
{{--            </tr>--}}
{{--            </thead>--}}
{{--            <tbody>--}}
{{--            @foreach($blog as $key => $item)--}}
{{--                <tr>--}}
{{--                    <td>--}}
{{--                        {{ $key + 1 }}--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        {{ $item->created_at->format('Y-m-d') }}--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <img src="/files/images/blog/{{ $item->picture }}" alt="blog-image" class="rounded shadow m-auto" width="200px">--}}
{{--                        <br> <span>  {{ $item->created_at->format('Y-m-d') }}</span>--}}
{{--                        <h5 class="mt-2"><a href="{{ route('blog.view', $item->slug) }}">{{ $item->title }}</a></h5>--}}
{{--                        <br> {{ Str::limit($item->text, 300) }}--}}
{{--                        <br> <a href="{{ route('admin.blog.delete', $item->id) }}" class="btn btn-outline-danger mt-2"><i class="fab fa-trash"></i> Видалити</a>--}}

{{--                    </td>--}}
{{--                    <td class="col-md-4">--}}
{{--                        {{ Str::limit($item->text, 300) }}--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        <a href="{{ route('admin.blog.delete', $item->id) }}" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>--}}
{{--                    </td>--}}
{{--                </tr>--}}
{{--            @endforeach--}}
{{--            </tbody>--}}
{{--        </table>--}}

        <div class="row">
            @foreach($blog as $key => $item)

                    <div class="col-md-2 bg-light shadow p-2 shadow m-auto">
                        <img src="/files/images/blog/{{ $item->picture }}" alt="blog-image" class="rounded shadow m-auto" width="200px">
                        <br> <span>  {{ $item->created_at->format('Y-m-d') }}</span>
                        <h5 class="mt-2"><a href="{{ route('blog.view', $item->slug) }}">{{ $item->title }}</a></h5>
                        <br> {{ Str::limit($item->text, 300) }}
                        <br> <a href="#" class="btn btn-outline-danger mt-2"><i class="fab fa-trash"></i> Видалити</a>
{{--                        <a href="{{ route('admin.blog.delete', $item->id) }}" class="btn btn-outline-danger mt-2"><i class="fab fa-trash"></i> Видалити</a>--}}
                    </div>

            @endforeach
        </div>
{{--        {{ $blog->links() }}--}}
        <br>
    </div>
@endsection
