@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>{{$category[1]}}</h1>
        <hr>
        <a href="{{ route('admin.obekt.new', $category) }}" class="btn btn-success">Додати новий об'єкт</a>
        <hr>
        <table class="table">
            <thead>
            <tr class="bg-secondary text-white">
                <td>
                    #
                </td>
                <td>
                    Дата
                </td>
                <td>
                    Назва
                </td>
                {{--                    <td>--}}
                {{--                       Тип об'єкту--}}
                {{--                    </td>--}}
                <td>
                    Ціна ($)
                </td>
                <td>
                    Площа (m2)
                </td>
                <td>
                    Опис
                </td>
                <td>
                    Дія
                </td>
            </tr>
            </thead>
            <tbody>
            @foreach($obekts as $key => $item)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $item->created_at->format('Y-m-d') }}
                    </td>
                    <td>
                        <a href="{{ route('obekt.view', $item->slug) }}" target="_blank">{{ $item->name }}</a>
                    </td>
                    {{--                        <td>--}}
                    {{--                            {{ $item->type_house }}--}}
                    {{--                        </td>--}}
                    <td>
                        {{ $item->price }}
                    </td>
                    <td>
                        {{ $item->square }}
                    </td>
                    <td>
                        {{ $item->description }}
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
