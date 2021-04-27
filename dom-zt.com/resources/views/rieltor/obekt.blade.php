@extends('layouts.rieltor')

@section('content')
    <div class="container">
        <h1>{{$categoryName}}</h1>
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
                            <a href="/obekt/{{ $item->slug }}">{{ $item->name }}</a>
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
                    </tr>
                @endforeach
                </tbody>
            </table>
    </div>
@endsection
