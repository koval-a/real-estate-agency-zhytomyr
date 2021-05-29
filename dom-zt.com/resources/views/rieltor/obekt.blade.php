@extends('layouts.rieltor')

@section('content')
    <div class="container-fluid">
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
                    <td>
                        Статус
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
                             <span class={{ $item->isPay?'text-success':'text-warning' }}>
                                {{ $item->isPay?'Продано':'В продажі' }}
                            </span>
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
    </div>
@endsection
