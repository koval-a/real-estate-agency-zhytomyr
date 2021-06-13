@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>{{$category[1]}}</h1>
        <hr>
        <a href="{{ route('admin.obekt.new', $category[0]) }}" class="btn btn-primary">Додати новий об'єкт</a>
        <a href="{{ route('admin.print', $category[0]) }}" class="btn btn-primary">Друк</a>
        <hr>
        <div class="filters d-flex justify-content-between">
            <select name="appointment_id" id="appointment_id" class="form-control">
                <option value="0" selected disabled>Оберіть значення</option>
                @foreach($appointment as $key => $appoint)
                    <option value="{{ $appoint->id }}">{{ $appoint->name }}</option>
                @endforeach
            </select>
        </div>
        <hr>
        @if($obekts->count() > 0)
            <div class="all-obekt">

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
{{--                            Опис та--}}
                            Фото
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
                                @foreach($owners as $key => $owner)
                                    @if( $item->owner_id == $owner->id)
                                        <i class="bi bi-person"></i>{{ $owner->name }}
                                        <br>
                                        <i class="bi bi-phone"></i>{{ $owner->phone }}
                                    @endif
                                @endforeach
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
                                    <a href="{{ route('obekt.view', $item->slug) }}" target="_blank">{{ $item->name }}</a>
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
                            {{--                        <td>--}}
                            {{--                            {{ $item->created_at->format('Y-m-d') }}--}}
                            {{--                        </td>--}}
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

                                <div class="d-flex">
                                    @if($filesImages->count() > 0)

                                        @foreach($filesImages as $key => $image)
                                            @if($item->id == $image->obekt_id)
                                                <a data-fancybox="gallery" href="{{ $image->url_img }}">
                                                    <img src="{{ $image->url_img }}" alt="picture-{{ $image->id }}"
                                                         height="30" class="m-1">
                                                </a>
                                            @endif
                                        @endforeach

                                    @else
                                        <span>Немає фото.</span>
                                    @endif
                                </div>
{{--                                <p>--}}
{{--                                    {{ Str::limit($item->description, 30) }}--}}
{{--                                </p>--}}
                            </td>
                            <td>
                                <div class="d-flex p-2">
                                    @if($item->isPublic)
                                        <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-secondary">
                                            <i class="bi bi-eye-slash"></i>
                                        </a>
                                    @else
                                        <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-success">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                    @endif
                                    <a href="{{ route('admin.obekt.edit', $item) }}" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                    <a href="{{ route('admin.obekt.delete', $item) }}" class="btn btn-danger p-1"><i class="bi bi-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <hr>
            {{ $obekts->links() }}
            <hr>
        @else
            <span class="p-3">Записів немає.</span>
        @endif
    </div>
@endsection
