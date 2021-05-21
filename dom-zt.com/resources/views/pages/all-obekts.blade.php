@extends('layouts.app')

@section('content')
    <div class="container">

        <h1 class="title">{{ $category->name }}</h1>

        <div class="filter row bg-white p-3 rounded">
            <form action="" method="GET" class="d-flex justify-content-between">
                @csrf
                <div class="parameters col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <span>Розташування <br> об'єкта</span>
                            <select name="rayon_id" id="rayon_id" class="form-control mt-2">
                                <option value="0" disabled>Оберіть район</option>
                                @foreach($locationRayon as $key => $rayon)
                                    <option value="{{$rayon->id}}">{{$rayon->rayon}}</option>
                                @endforeach
                            </select>
{{--                            <code>--}}
{{--                                Показувати додаткову вибірку розташування взалежності від <br>--}}
{{--                                того чи це м.Житомир чи район області--}}
{{--                            </code>--}}
{{--                            <select name="city_id" id="city_id" class="form-control">--}}
{{--                                <option value="0" disabled>Оберіть район</option>--}}
{{--                                @foreach($locationCity as $key => $city)--}}
{{--                                    <option value="{{$city->id}}">{{$city->city}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}
{{--                            <select name="rayon_city_id" id="rayon_city_id" class="form-control mt-2">--}}
{{--                                <option value="0" disabled>Оберіть район</option>--}}
{{--                                @foreach($locationCityRayon as $key => $rayon_city)--}}
{{--                                    <option value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                @endforeach--}}
{{--                            </select>--}}

                        </div>
                        <div class="col-md-3 p-0">
                            <span class="ml-0 pl-0">Ціна ($.тис)</span>
                            <div class="price-range p-3 row mt-1">
                                <div class="min-price col-md-6 row">
                                   <div class="d-flex">
                                       <span>від </span> <input type="text" id="rangePrimary" class="text-danger ml-1" />
                                   </div>
                                    <input type="range" name="range" class="w-100" step="100" min="1000" max="10000" value="" onchange="rangePrimary.value=value">

                                </div>
                                <div class="max-price col-md-6 row">
                                    <div class="d-flex">
                                        <span>до </span><input type="text" id="rangePrimary2" class="text-danger ml-1" />
                                    </div>
                                    <input type="range" name="range" class="w-100" step="100" min="1000" max="10000" value="" onchange="rangePrimary2.value=value">

                                </div>
                            </div>

                        </div>

                        <div class="col-md-3">
                            <span class="ml-0 pl-0">Площа <br>(m2)</span>
                            <div class="square mt-2">
                                <input type="number" min="10" step="1" max="1000" class="form-control mt-2">
                            </div>
                        </div>

                        @switch($category->slug)
                            @case('flat')
                                <div class="col-md-12 row">

                                        <div class="type-build col-md-3">
                                            <span>Тип будівлі</span>
                                            <select name="type_build" id="type_build" class="form-control mt-2">
                                                <option value="0" disabled>Оберіть тип будівлі</option>
                                                <option value="">Значення</option>
                                            </select>
                                        </div>
                                        <div class="count-room col-md-2">
                                            <span>К-ть кімнат</span>
                                            <select name="count_room" id="count_room" class="form-control mt-2">
                                                <option value="0" disabled>Оберіть к-ть кімнат</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4+</option>
                                            </select>
                                        </div>
                                        <div class="count-room col-md-2">
                                            <span>Поверх</span>
                                            <select name="count_room" id="count_room" class="form-control mt-2">
                                                <option value="0" disabled>Оберіть поверх</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5+</option>
                                            </select>
                                        </div>
                                        <div class="count-room col-md-2">
                                            <span>Поверховість</span>
                                            <select name="count_room" id="count_room" class="form-control mt-2">
                                                <option value="0" disabled>Оберіть поверховість</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5+</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <span>Тип опалення</span>
                                            <select name="type_opalenya" id="type_opalenya" class="form-control mt-2">
                                                <option value="Централізоване">Централізоване</option>
                                                <option value="Автономне">Автономне</option>
                                            </select>
                                        </div>

                                </div>

                                @break
                            @case('house')
                                <div class="col-md-12 row">

                                    <div class="type-build col-md-3">
                                        <span>Тип будівлі</span>
                                        <select name="type_build" id="type_build" class="form-control mt-2">
                                            <option value="0" disabled>Оберіть тип будівлі</option>
                                            <option value="">Значення</option>
                                        </select>
                                    </div>
                                    <div class="count-room col-md-3">
                                        <span>Поверховість</span>
                                        <select name="count_room" id="count_room" class="form-control mt-2">
                                            <option value="0" disabled>Оберіть поверховість</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5+</option>
                                        </select>
                                    </div>
                                    <div class="count-room col-md-3">
                                        <span>Кількість кімнат</span>
                                        <select name="count_room" id="count_room" class="form-control mt-2">
                                            <option value="0" disabled>Оберіть к-ть кімнат</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4+</option>
                                        </select>
                                    </div>
                                    <div class="count-room col-md-3 row">
                                        <div class="new-build-check col-md-6">
                                            <span>Нова будівля</span>
                                            <div class="item-check row">
                                                <div class="item col-md-6">
                                                    <input type="radio" name="newBuild" value="1" class="form-control">
                                                    <span>Так</span>
                                                </div>
                                                <div class="item col-md-6">
                                                    <input type="radio" name="newBuild" value="0" checked class="form-control">
                                                    <span>Ні</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="part-build-check col-md-6">
                                            <span>Частина будівля</span>
                                            <div class="item-check row">
                                                <div class="item col-md-6">
                                                    <input type="radio" name="partBuild" value="1" class="form-control">
                                                    <span>Так</span>
                                                </div>
                                                <div class="item col-md-6">
                                                    <input type="radio" name="partBuild" value="0" checked class="form-control">
                                                    <span>Ні</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @break
                            @case('land')

                                    <div class="col-md-3 row">

                                        <div class="type-build">
                                            <span>Призначення <br> об'єкта</span>
                                            <select name="type_build" id="type_build" class="form-control mt-2">
                                                <option value="0" disabled>Оберіть тип призначення</option>
                                                <option value="">Значення</option>
                                            </select>
                                        </div>
                                    </div>

                                @break
                            @case('commercial-real-estate')
                            <div class="col-md-3 row">

                                <div class="type-build">
                                    <span>Тип <br> нерухомості</span>
                                    <select name="type_build" id="type_build" class="form-control mt-2">
                                        <option value="0" disabled>Оберіть тип нерухомості</option>
                                        <option value="">Значення</option>
                                    </select>
                                </div>
                            </div>
                                @break
                            @default
                                <div class="col-md-3">
                                    <span>Даної категорії немає!</span>
                                </div>

                        @endswitch
                    </div>
                </div>
                <div class="btn-set-filter col-md-2 justify-content-center d-flex align-items-center">
                    <button type="submit" class="btn btn-danger pt-3 pb-3">Застосувати</button>
                </div>
            </form>
        </div>

        <div class="row mt-2">
            @foreach($obekts as $key => $item)

                <div class="col-md-4">
                    <div class="shadow rounded p-2">
                        <a href="{{ route('obekt.view', $item->slug) }}" class="object__link">
                            <div class="object__image1 h-auto">
                                <img src="/custom/icons/flat.jpeg" alt="obekt-image" class="img-fluid">
                            </div>
                        </a>
                        <div class="object__text--promo p-3">
                            <ul class="object__list">
                                <li class="object__item object__item--title">{{ $item->name }}</li>
                                <li class="object__item object__item--prace">$ {{ $item->price }}</li>
                                <li class="object__item">Район:
                                    @foreach($location as $key => $loc)
                                        @if($loc->id == $item->location_id)
                                            @foreach($locationRayon as $key => $rayon)
                                                @if($rayon->id == $loc->city_rayon_id)
                                                    {{$rayon->rayon_city}}
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach

                                </li>
                                <li class="object__item">К-ть кімнат: {{ $item->count_room }}</li>
                                <li class="object__item">Опалення: {{ $item->opalenyaName }}</li>
                                <li class="object__item">Площа: {{ $item->square }}</li>
                                <li class="object__item">Поверх: {{ $item->level }}/{{ $item->count_level }}</li>
                            </ul>
                        </div>
                        <div class="link-open-obekt p-1">
                            <a href="{{ route('obekt.view', $item->slug) }}" class="btn btn--style" target="_blank">Дізнатися
                                детальніше</a>
                        </div>
                    </div>
                </div>

                {{--                <span class={{ $item->isPay?'text-success':'text-warning' }}>--}}
                {{--                        {{ $item->isPay?'Продано':'В продажу' }}--}}
                {{--                        </span>--}}

            @endforeach
        </div>

    </div>
    <script>

    </script>
@endsection
