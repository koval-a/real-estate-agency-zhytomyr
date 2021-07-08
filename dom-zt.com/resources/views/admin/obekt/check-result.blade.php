@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <h1>
            Результат пошуку за номером - <span class="text-danger">{{ $dataInfo[2] ?? ''}}</span>
        </h1>
        <p>
            Знайдено ({{ $dataInfo[0] ?? '' }}) об'єкти нерухомості за номером - <span class="text-danger">{{ $dataInfo[2] ?? '' }}</span>
        </p>
        <p>
            Власником ({{ $dataInfo[0] ?? '' }}) об'єктів нерухомості є <span class="text-danger">{{ $dataInfo[1] ?? '' }}</span>
        </p>
        <hr>
        <div class="check-result">

            @if($flag == true)

                <div class="d-flex justify-content-between">
                    @foreach($category as $key => $categ)
                        <a href="{{ route('admin.obekt.new',$categ->slug) }}" class="btn btn-block btn-light shadow border-danger pt-4 pb-4 m-1">
                            <i class="bi bi-plus-circle"></i>
                            {{$categ->name}}
                        </a>
                    @endforeach
                </div>

            @else
                <div class="d-flex justify-content-between">
                    @foreach($category as $key => $categ)
                        <a href="{{ route('admin.obekt.new',$categ->slug) }}" class="btn btn-block btn-light shadow border-danger pt-4 pb-4 m-1">
                            <i class="bi bi-plus-circle"></i>
                            {{$categ->name}}
                        </a>
                    @endforeach
                </div>
                <hr>
                <table class="table table-striped">
                    <thead class="table-dark">
                    <tr class="bg-secondary text-white">
                        <td>
                            #
                        </td>
                        <td>
                            Власник
                        </td>
                        <td>Статус</td>
                        <td>
                            Назва
                        </td>
                        <td>
                            Розміщення
                        </td>
                        <td>
                            Тип об'єкту
                        </td>
                        <td>
                            Ціна ($)
                        </td>
                        <td>
                            Площа (m2)
                        </td>
                        <td>
                            Дія
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($obektByPhone as $key => $item)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                <i class="bi bi-person"></i>{{ $dataInfo[1] }}
                                <br>
                                <i class="bi bi-phone"></i>{{ $dataInfo[2] }}
                            </td>
                            <td>
                                @if($item->isPublic)
                                    @if($item->isPay)
                                        <span class="bg-light-danger text-light p-2 m-2 rounded">
                                            Продано
                                        </span>
                                    @else
                                        <span class="bg-success text-light p-2 m-2 rounded">
                                            В продажу
                                        </span>
                                    @endif
                                @else
                                    <span class="text-secondary">Не опубліковано</span>
                                @endif

                            </td>
                            <td>
                                <div class="d-flex1 p-2">
                                    <a href="{{ route('obekt.view', $item->slug) }}"
                                       target="_blank">{{ $item->name }}</a>
                                    <br>
                                    ID: # {{ $item->id }}
                                </div>

                            </td>
                            <td>
                                <i class="bi bi-map"></i>
                                @foreach($locationRayon as $name)
                                    @if($name->id == $item->location_rayon_id)
                                        @if($name->rayon != 'м.Житомир')
                                            <span>р-н </span>
                                        @endif
                                        {{ $name->rayon }}
                                    @endif
                                @endforeach
                                <br>
                                <i class="bi bi-map-fill"></i>
                                @foreach($locationCity as $name)
                                    @if($name->id == $item->location_city_id)
                                        {{ $name->city }}
                                    @endif
                                @endforeach
                                @foreach($locationCityRayon as $name)
                                    @if($name->id == $item->location_city_rayon_id)
                                        {{ $name->rayon_city }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                @foreach($appointment as $key => $appoint)
                                    @if($appoint->id ==  $item->appointment_id)
                                        <span class="text-danger">#
                                    @switch($appoint->type)
                                                @case('land')
                                                Земля
                                                @break
                                                @case('house')
                                                Будинок
                                                @break
                                                @case('flat')
                                                Квартира
                                                @break
                                                @case('commercial-real-estate')
                                                Комерційна нерухомість
                                                @break
                                            @endswitch
                                    </span>
                                        <br>
                                        {{ $appoint->name }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                $ {{ $item->price }}
                            </td>
                            <td>
                                {{ $item->square }} m2
                            </td>
                            <td>
                                <a href="{{ route('admin.obekt.edit', $item) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                <a href="{{ route('admin.obekt.delete', $item) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>

@endsection
