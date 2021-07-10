@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <h1>Всі об'єкти нерухомості</h1>
        <hr>
        <div class="d-flex justify-content-between">
            <div class="col-md-3">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                        Додати об'єкт
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        @foreach($category as $item)
                            <a class="dropdown-item" href="{{ route('admin.obekt.check', $item->slug, false) }}" class="btn btn-light">
                                {{ $item->name }}
                            </a>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-6 row">
                <div class="search-bar col-md-10">

                    <form action="{{ route('admin.search') }}" method="POST" role="search">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="q" value="{{$q??''}}"
                                   placeholder="Пошук за ID, назвою об'єкта та номером телефону власника">
                            <span class="input-group-btn">
                            <button type="submit" class="btn btn-danger">
                                Пошук
                            </button>
                        </span>
                        </div>
                    </form>

                </div>

                <div class="link-all-obekt col-md-2">
                    <a href="{{ route('admin.allView') }}" class="btn btn-primary">Очистити</a>
                </div>
            </div>
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
{{--                    <td>--}}
{{--                        Опис та --}}
{{--                        Фото--}}
{{--                    </td>--}}
{{--                    <td>--}}
{{--                        Видимість--}}
{{--                    </td>--}}
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
                            @foreach( $location[0] as $name)
                                @if($name->id == $item->location_rayon_id)
                                    @if($name->rayon != 'м.Житомир')
                                        <span>р-н </span>
                                    @endif
                                    {{ $name->rayon }}
                                @endif
                            @endforeach
                            <br>
                            <i class="bi bi-map-fill"></i>
                            @foreach( $location[1] as $name)
                                @if($name->id == $item->location_city_id)
                                    {{ $name->city }}
                                @endif
                            @endforeach
                            @foreach( $location[2] as $name)
                                @if($name->id == $item->location_city_rayon_id)
                                    {{ $name->rayon_city }}
                                @endif
                            @endforeach
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
                            $ {{ number_format($item->price, 2, '.', ',') }}
                        </td>
                        <td>
                            {{ $item->square }} m2
                        </td>
{{--                        <td>--}}
{{--                            {{ $item->description }}--}}
{{--                            <div class="d-flex">--}}

{{--                                @foreach($filesImages as $key => $image)--}}
{{--                                    @if($item->id == $image->obekt_id)--}}
{{--                                        <a data-fancybox="gallery" href="{{ $image->url_img }}">--}}
{{--                                            <img src="{{ $image->url_img }}" alt="picture-{{ $image->id }}" height="50" class="m-1">--}}
{{--                                        </a>--}}
{{--                                    @else--}}
{{--                                        <span>Немає фото.</span>--}}
{{--                                        @break--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <span class={{ $item->isPublic?'text-success':'text-sexondary' }}>--}}
{{--                                <i class="bi bi-{{ $item->isPublic?'eye':'eye-slash' }}"></i>--}}
{{--                            </span>--}}
{{--                        </td>--}}
                        <td>
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    Виконати
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    @if($item->isPublic)
                                        <a href="{{route('admin.isPublic', $item->id)}}" class="dropdown-item text-secondary">
                                            <i class="bi bi-eye-slash"></i> Приховати
                                        </a>
                                    @else
                                        <a href="{{route('admin.isPublic', $item->id)}}" class="dropdown-item text-success">
                                            <i class="bi bi-eye"></i> Опублікувати
                                        </a>
                                    @endif
                                    <a href="{{ route('admin.obekt.edit', $item) }}" class="dropdown-item text-primary"><i class="bi bi-pencil"></i> Редагувати</a>
                                    <a href="{{ route('admin.obekt.delete', $item) }}" class="dropdown-item text-danger"><i class="bi bi-trash"></i> Видалити</a>
                                </ul>
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
