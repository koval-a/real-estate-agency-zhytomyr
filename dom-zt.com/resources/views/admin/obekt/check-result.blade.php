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

                        <a href="{{ route('admin.obekt.new','flat') }}" class="btn btn-success p-1">
                            <i class="bi bi-plus-circle"></i>
                            Додати об'єкт нерухомості
                        </a>
            @else
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
                        <td><i class="bi bi-map"></i>
                            @if($item->rayon_name != 'м.Житомир')
                                <span>р-н </span>
                            @endif
                            {{ $item->rayon_name }}
                            @if($item->city_name != '-')
                                <br>
                                <i class="bi bi-map-fill"></i> {{ $item->city_name }}
                            @endif
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
                            @foreach($category as $key => $categoriya)
                                @if($categoriya->id == $item->category_id)
                                    <a href="{{ route('admin.obekt.new',$categoriya->slug ) }}" class="btn btn-success p-1">
                                        <i class="bi bi-plus-circle"></i>
                                        Додати об'єкт нерухомості
                                    </a>
                                @endif
                            @endforeach
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>

@endsection
