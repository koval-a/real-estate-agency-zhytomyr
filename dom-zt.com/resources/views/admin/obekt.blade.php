@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>{{$category[1]}}</h1>
        <hr>
        <div class="button-section d-flex justify-content-between">
            <a href="{{ route('admin.obekt.check', $category[0], false) }}" class="btn btn-primary">Додати новий
                об'єкт</a>
{{--            <a href="{{ route('admin.print', $category[0]) }}" class="btn btn-info">Друк</a>--}}
            <input name="b_print" type="button" class="ipt btn btn-info"  onClick="printdiv('div_print');" value=" Друк">
        </div>
        <hr>
        <form action="{{ route('admin.filter', $category[0]) }}" method="GET">
            <div class="filters d-flex justify-content-between">

                {{--                @csrf--}}

                <div class="appointment">
                    <sapn>Оберіть тип:</sapn>
                    <select name="appointment_id" id="appointment_id" class="form-control">
                        <option value="0" selected disabled>Оберіть значення</option>
                        @foreach($appointment as $key => $appoint)
                            @if($filterData[0] ?? '')
                                @if($filterData[0] == $appoint->id)
                                    <option value="{{ $appoint->id }}" selected> {{ $appoint->name }} </option>
                                @endif
                            @endif
                            <option value="{{$appoint->id}}">{{$appoint->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="price-from">
                    <span>Ціна від ($)</span>
                    <input type="number" class="form-control" name="price_from" id="price_from"
                           value="{{ $filterData[1] ?? '' }}">
                </div>
                <div class="price-to">
                    <span>Ціна до ($)</span>
                    <input type="number" class="form-control" name="price_to" id="price_to"
                           value="{{ $filterData[11] ?? '' }}">
                </div>

                {{--                <div class="square">--}}
                {{--                    <span>Площа</span>--}}
                {{--                    <input type="number" class="form-control" name="square" id="square" value="{{ $filterData[2] ?? '' }}">--}}
                {{--                </div>--}}
                <div class="location-rayon">
                    <span>Розміщення</span>
                    <select name="rayon_id" id="rayon_id" class="form-control">
                        <option value="0" selected disabled>Оберіть значення</option>
                        @foreach($locationRayon as $key => $rayon)
                            @if($filterData[3] ?? '')
                                @if($filterData[3] == $rayon->id)
                                    <option value="{{ $rayon->id }}" selected> {{ $rayon->rayon }} </option>
                                @endif
                            @endif
                            <option value="{{$rayon->id}}">{{$rayon->rayon}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="location-city-rayon">
                    <span>Район міста</span>
                    <select name="rayon_city_id" id="rayon_city_id" class="form-control">
                        <option value="0" selected disabled>Оберіть значення</option>
                        @foreach($locationCityRayon as $key => $rayon_city)
                            @if($filterData[4] ?? '')
                                @if($filterData[4] == $rayon_city->id)
                                    <option value="{{ $rayon_city->id }}"
                                            selected>{{ $rayon_city->rayon_city }}</option>
                                @endif
                            @endif
                            <option value="{{ $rayon_city->id }}">{{ $rayon_city->rayon_city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="location-city">
                    <span>Місто/Селище</span>
                    <select name="city_id" id="city_id" class="form-control">
                        <option value="0" selected disabled>Оберіть значення</option>
                        @foreach($locationCity as $key => $city)
                            @if($filterData[5] ?? '')
                                @if($filterData[5] == $city->id)
                                    <option value="{{ $city->id }}" selected>{{ $city->city }}</option>
                                @endif
                            @endif
                            <option value="{{ $city->id }}">{{ $city->city }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="button-apply text-center">
                    <button type="submit" class="btn btn-danger">Застосувати</button>
                    <br>
                    <a href="{{ route('admin.view', $category[0]) }}" class="text-secondary">Скинути</a>
                </div>

            </div>

            <div class="opalenya-and-wall d-flex">
                @if($category[0] == 'commercial-real-estate' or $category[0] == 'house' or $category[0] == 'flat')
                    <div class="col-md-3">
                        <span class="ml-0 pl-0">Тип стін</span>
                        <select name="typeWall" id="typeWall" class="form-control">
                            <option disabled selected>Оберіть тип</option>
                            @foreach($typeWall as $key => $wall)
                                @if($filterData[7] ?? '')
                                    @if($filterData[7] == $wall->id)
                                        <option value="{{ $wall->id }}" selected> {{ $wall->name }} </option>
                                    @endif
                                @endif
                                <option value="{{ $wall->id }}">{{ $wall->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <div class="opalenya-type">
                            <span>Тип опалення</span>
                            <select name="typeOpalenya" id="typeOpalenya" class="form-control">
                                <option selected disabled="">Оберіть тип опалення</option>
                                @if($filterData[6] ?? '')
                                    @if($filterData[6] == 'Централізоване')
                                        <option value="Централізоване" selected>Централізоване</option>
                                        <option value="Автономне">Автономне</option>
                                    @elseif($filterData[6] == 'Автономне')
                                        <option value="Автономне" selected>Автономне</option>
                                        <option value="Централізоване">Централізоване</option>
                                    @endif
                                @else
                                    <option value="Централізоване">Централізоване</option>
                                    <option value="Автономне">Автономне</option>
                                @endif

                            </select>
                        </div>
                    </div>
                @endif
                @if($category[0] == 'house')
                    <div class="count-level col-md-3">
                        <span>Поверховість</span>
                        <input type="number" min="1" step="1" max="999" name="count_level" id="count_room"
                               class="form-control" value="{{ $filterData[9] ?? '' }}"/>
                    </div>

                @endif
                @if($category[0] == 'flat' or $category[0] == 'house')
                    <div class="count-room col-md-3">
                        <span>Кількість кімнат</span>
                        <input type="number" name="count_room" id="count_room" class="form-control"
                               value="{{ $filterData[8] ?? '' }}"/>
                    </div>
                @endif
                @if($category[0] == 'flat')
                    level
                @endif

            </div>

        </form>
        <hr>
        {{ $obekts->links() }}
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
                        {{--                        <td>--}}
                        {{--                            --}}{{--                            Опис та--}}
                        {{--                            Фото--}}
                        {{--                        </td>--}}
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
                                        <span class="bg-success text-light p-2 m-2 rounded">
                                           <i class="bi bi-check-circle-fill"></i>  Продано
                                        </span>
                                    @else
                                        <span class="bg-warning text-light p-2 m-2 rounded">
                                            <i class="bi bi-cart-fill"></i> В продажу
                                        </span>
                                    @endif
                                @else
                                    <span class="text-secondary"> <i class="bi bi-info-circle-fill"></i> Не опубліковано</span>
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
                            {{--                            <td>--}}

                            {{--                                <div class="d-flex">--}}
                            {{--                                    @if($filesImages->count() > 0)--}}

                            {{--                                        @foreach($filesImages as $key => $image)--}}
                            {{--                                            @if($item->id == $image->obekt_id)--}}
                            {{--                                                <a data-fancybox="gallery" href="{{ $image->url_img }}">--}}
                            {{--                                                    <img src="{{ $image->url_img }}" alt="picture-{{ $image->id }}"--}}
                            {{--                                                         height="30" class="m-1">--}}
                            {{--                                                </a>--}}
                            {{--                                            @endif--}}
                            {{--                                        @endforeach--}}

                            {{--                                    @else--}}
                            {{--                                        <span>Немає фото.</span>--}}
                            {{--                                    @endif--}}
                            {{--                                </div>--}}
                            {{--                                --}}{{--                                <p>--}}
                            {{--                                --}}{{--                                    {{ Str::limit($item->description, 30) }}--}}
                            {{--                                --}}{{--                                </p>--}}
                            {{--                            </td>--}}
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        Виконати
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @if($item->isPay)
                                            <a href="{{ route('admin.isPay', [$item->id]) }}" class="dropdown-item text-secondary">
                                                <i class="bi bi-cart-x-fill"></i> Скасувати
                                            </a>
                                        @else
                                            <a href="{{ route('admin.isPay', [$item->id]) }}" class="dropdown-item text-success">
                                                <i class="bi bi-cart-check-fill"></i> Продано
                                            </a>
                                        @endif
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
            <span class="p-3">Записів не знайдено.</span>
        @endif
    </div>
    <div id="div_print" class="all-obekt invisible">

        <table class="table table-striped">
            <thead class="table-dark">
            <tr class="bg-secondary text-white">
                <td>#</td>
                <td>ID</td>
                <td>Тип</td>
                <td>Розміщення</td>
                <td>Ціна ($)</td>
                <td>Площа (m2)</td>
                <td>Опис</td>
                <td>Нотатка</td>
                <td>Власник</td>
                <td>Ріелтор</td>
            </tr>
            </thead>
            <tbody>
            @foreach($obekts as $key => $item)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $item->id }}
                    </td>
                    <td>
                        @switch($category[0])
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
                        <br>
                        <i class="bi bi-house"></i>
                        {{ $item->address }}
                    </td>
                    <td>
                        $ {{ number_format($item->price, 2, '.', ',') }}
                    </td>
                    <td>
                        {{ $item->square }} m2
                    </td>
                    <td>
                        {{ Str::limit($item->description, 50) }}
                    </td>
                    <td>
                        {{ $item->note }}
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
                        @foreach($rieltors as $user)
                            @if($item->rieltor_id == $user->id)
                                <i class="bi bi-person"></i>{{ $user->name }}
                                <br>
                                <i class="bi bi-phone"></i>{{ $user->phone }}
                            @endif
                        @endforeach
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
    <script language="javascript">
        function printdiv(printpage)
        {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(printpage).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr+newstr+footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
        }
    </script>
@endsection
