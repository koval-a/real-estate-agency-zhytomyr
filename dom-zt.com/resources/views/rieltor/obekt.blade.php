@extends('layouts.rieltor')

@section('content')
    <div class="container-fluid">
        <div class="d-flex justify-content-between">
            <h1>{{$categoryName ?? 'Пошук' }}</h1>
            {{--        <h1>{{$category}}</h1>--}}
            <a href="{{ route('rieltor.print', $category) }}">
                <i class="bi bi-printer text-primary"></i>
            </a>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
{{--                <button onclick="window.print()" class="btn btn-light">Друк</button>--}}

            </div>
            <div class="search-bar col-md-6 row">

                <form action="{{ route('rieltor.search', $category) }}" method="POST" role="search" class="col-md-10">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                               placeholder="Пошук за ID об'єкта">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-danger">
                                Пошук
                            </button>
                        </span>
                    </div>
                </form>
                <a href="{{ route('rieltor.view', $category) }}" class="btn btn-primary col-md-2">Очистити</a>
            </div>

            <div class="col-md-3 text-right">

            </div>
        </div>
        <hr>
        @if($obekts->count() > 0)
        <table class="table">
                <thead>
                <tr class="bg-secondary text-white">
                    <td>
                        #
                    </td>
{{--                    <td>--}}
{{--                        Дата--}}
{{--                    </td>--}}
                    <td>
                        Назва
                    </td>
                    <td>
                        Статус
                    </td>
                    <td>
                        Розміщення
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
                        Власник
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
{{--                        <td>--}}
{{--                            {{ $item->created_at->format('Y-m-d') }}--}}
{{--                        </td>--}}
                        <td>
                            <a href="{{ route('obekt.view', $item->slug) }}" target="_blank">{{ $item->name }} (ID:  {{ $item->id }})</a>
                        </td>
                        <td>
                             <span class="btn btn-{{ $item->isPay?'success':'warning' }}">
                                {{ $item->isPay?'Продано':'В продажі' }}
                            </span>
                        </td>
                        <td>
                            {{ $item->rayon_name }}, {{ $item->city_name }}
                        </td>
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
                            @foreach($owners as $kwy => $owner)
                                @if($owner->id == $item->owner_id)
                                    <span>
                                        {{ $owner->name }} <br>
                                        {{ $owner->phone }}
                                    </span>
                                @endif
                            @endforeach
                        </td>
                        <td>
                            @if($item->isPay)
                                <a href="{{ route('rieltor.isPay', [$item->id]) }}" class="btn btn-secondary">
                                    Скасувати
                                </a>
                            @else
                                <a href="{{ route('rieltor.isPay', [$item->id]) }}" class="btn btn-success">
                                    Продано
                                </a>
                            @endif
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        <hr>
        {{ $obekts->links() }}
        <hr>
        @else
            <span class="mt-5 p-2 rounded text-white bg-warning">У вас немає об'єктів нерухомості.</span>
        @endif
    </div>
@endsection
