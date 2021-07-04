@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <h1 class="title" style="margin-left: 30%">{{ $category->name }}</h1>
        <div class="row">
            <div class="filter-block col-md-3 position-fixed">
{{--{{var_export($filterData??'')}}--}}
                <div class="filter bg-white p-3 rounded shadow">
                    <form action="{{ route('filter.data') }}" method="GET" class="">
{{--                        @csrf--}}
                        <div class="d-flex">
                            <input type="text" value="{{$category->slug}}" name="slug" id="slug" class="invisible">
                            <input type="text" value="{{$category->id}}" name="id" id="id" class="invisible">
                        </div>

                        <div class="parameters pb-5 mb-5">
                                <div class="filter-by-id pb-1">
                                    <sapn>Код об'єкта</sapn>
                                    <input type="text" name="obekt_id" id="obekt_id" class="form-control" value="{{ Cookie::get('obekt_id')?Cookie::get('obekt_id'):$filterData[8] ?? '' }}">
                                </div>
                                <div class="parameters-basic__loction">
                                    <span>Розташування об'єкта</span>
                                    <select onchange="showSubList(this)" name="rayon_id" id="rayon_id" class="form-control mt-2">
                                        <option value="0"  selected>Оберіть район</option>
{{--                                        @foreach($locationRayon as $key => $rayon)--}}
{{--                                            <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>--}}
{{--                                        @endforeach--}}
                                        @foreach($locationRayon as $key => $rayon)

                                            @if($filterData[1] ?? '')
                                                @if($filterData[1] == $rayon->rayon)
                                                    <option value="{{ $rayon->rayon }}" selected> {{ $rayon->rayon }} </option>
                                                @else
                                                    <option value="{{ $rayon->rayon }}"> {{ $rayon->rayon }} </option>
                                                @endif
                                            @else
                                                @if(Cookie::get('rayon_name'))
                                                    @if(Cookie::get('rayon_name') == $rayon->rayon)
                                                        <option value="{{ $rayon->rayon }}" selected> {{ $rayon->rayon }} </option>
                                                    @else
                                                        <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>
                                                    @endif
                                                @else
                                                    <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>
                                                @endif
                                            @endif

                                        @endforeach
                                    </select>
                                    <select name="city_name" id="city_name" class="form-control invisible city_name">
                                        <option value="0" disabled selected>Оберіть</option>
                                        @foreach($locationCity as $key => $city)

                                            @if($filterData[2] ?? '')
                                                @if($filterData[2] == $city->city)
                                                    <option value="{{$city->city}}" selected>{{$city->city}}</option>
                                                @else
                                                    <option value="{{$city->city}}">{{$city->city}}</option>
                                                @endif
                                            @else
                                                @if(Cookie::get('rayon_city'))
                                                    @if(Cookie::get('rayon_city') == $city->city)
                                                        <option value="{{$city->city}}" selected>{{$city->city}}</option>
                                                    @else
                                                        <option value="{{$city->city}}">{{$city->city}}</option>
                                                    @endif
                                                @else
                                                    <option value="{{$city->city}}">{{$city->city}}</option>
                                                @endif
                                            @endif
                                        @endforeach
                                    </select>
                                    <select name="rayon_city" id="rayon_city" class="form-control invisible rayon_city">
                                        <option value="0" disabled selected>Оберіть</option>
                                        @foreach($locationCityRayon as $key => $rayon_city)

                                            @if($filterData[3] ?? '')
                                                @if($filterData[3] == $rayon_city->rayon_city)
                                                    <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                @else
                                                    <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                @endif
                                            @else
                                                @if(Cookie::get('city_name'))
                                                    @if(Cookie::get('city_name') == $rayon_city->rayon_city)
                                                        <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                    @else
                                                        <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                    @endif
                                                @else
                                                    <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                @endif
                                            @endif
                                        @endforeach
                                    </select>

                                </div>

                            <div class="parameters-basic__price p-0">
                                <span class="ml-0 pl-0">Ціна ($)</span>
                                <div class="price-range d-flex justify-content-between mt-1">
                                    <div class="min-price p-1">
                                            <span>від </span> <input type="text" id="rangePrimary" name="rangePrimary" class="text-danger form-control" value="{{ Cookie::get('min_price')?Cookie::get('min_price'):$filterData[4] ?? '' }}" />
                                    </div>
                                    <div class="max-price p-1">
                                            <span>до </span><input type="text" id="rangePrimary2" name="rangePrimary2" class="text-danger form-control" value="{{ Cookie::get('max_price')?Cookie::get('max_price'):$filterData[5] ?? '' }}" />
                                    </div>
                                </div>

                            </div>

                            <div class="type-wall">
                                @if($category->slug != 'land')
                                    <span class="ml-0 pl-0">Тип стін</span><span class="text-danger">- {{ $filterData[7] ?? Cookie::get('typeWallName')}}</span>
                                    <select name="typeWall" id="typeWall" class="form-control">
                                        <option disabled selected>Оберіть тип</option>
                                        @foreach($typeWall as $key => $wall)
                                            @if($filterData[7] ?? '')
                                                @if($filterData[7] == $wall->name)
                                                    <option value="{{ $wall->name }}" selected> {{ $wall->name }} </option>
                                                @else
                                                    <option value="{{ $wall->name }}">{{ $wall->name }}</option>
                                                @endif
                                            @else
                                                @if(Cookie::get('typeWallName'))
                                                    @if(Cookie::get('typeWallName') == $wall->name)
                                                        <option value="{{ $wall->name }}" selected> {{ $wall->name }} </option>
                                                    @else
                                                        <option value="{{ $wall->name }}">{{ $wall->name }}</option>
                                                    @endif
                                                @else
                                                    <option value="{{ $wall->name }}">{{ $wall->name }}</option>
                                                @endif
                                            @endif
                                        @endforeach
                                    </select>

                                @endif
                            </div>

{{--                                <div class="parameters-basic__price p-0">--}}
{{--                                    <span class="ml-0 pl-0">Ціна ($.тис)</span>--}}
{{--                                    <div class="price-range p-3 row mt-1">--}}
{{--                                        <div class="min-price col-md-6 row">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <span>від </span> <input type="text" id="rangePrimary" name="rangePrimary" class="text-danger ml-1" />--}}
{{--                                            </div>--}}
{{--                                            <input type="range" name="minPrice" id="minPrice" class="w-100" step="1" min="{{ $price[1] }}" max="10000" value="" onchange="rangePrimary.value=value">--}}

{{--                                        </div>--}}
{{--                                        <div class="max-price col-md-6 row">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <span>до </span><input type="text" id="rangePrimary2" name="rangePrimary2" class="text-danger ml-1" />--}}
{{--                                            </div>--}}
{{--                                            <input type="range" name="maxPrice" id="maxPrice" class="w-100" step="1" min="{{ $price[1] }}" max="{{ $price[0] }}" value="" onchange="rangePrimary2.value=value">--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="col-md-2">--}}
{{--                                    <span class="ml-0 pl-0">Площа <br>(m2)</span>--}}
{{--                                    <div class="square mt-2">--}}
{{--                                        <input type="number" name="square" id="square" min="10" step="1" max="1000" class="form-control mt-2">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="parameters-basic__type-obekt pt-2">
                                    <span>Тип об'єкта</span>
                                    <select name="appointment_id" id="appointment_id" class="form-control mt-2">
                                        <option disabled selected>Оберіть тип</option>
                                        @foreach($appointments as $key => $appointment)
                                            @if(Cookie::get('typeAppointment'))
                                                @if(Cookie::get('typeAppointment') == $appointment->id)
                                                    <option value="{{ $appointment->id }}"
                                                            selected> {{ $appointment->name }} </option>
                                                @else
                                                    <option
                                                        value="{{ $appointment->id }}"> {{ $appointment->name }} </option>
                                                @endif
                                            @else
                                                @if($filterData[0] ?? '')
                                                    @if($filterData[0] == $appointment->id)
                                                        <option value="{{ $appointment->id }}"
                                                                selected> {{ $appointment->name }} </option>
                                                    @else
                                                        <option
                                                            value="{{ $appointment->id }}"> {{ $appointment->name }} </option>
                                                    @endif
                                                @else
                                                    <option value="{{$appointment->id}}">{{$appointment->name}}</option>
                                                @endif
                                            @endif

                                        @endforeach
                                    </select>
                                </div>

                                @switch($category->slug)
                                    @case('flat')
                                    <div class="parameters-flat mt-2">

                                        <div class="count-room pt-2">
                                            <span>К-ть кімнат</span>
                                            <input type="number" min="1" step="1" max="1000" class="form-control" id="count_room" name="count_room" value="{{ Cookie::get('count_room')?Cookie::get('count_room'):$filterData[10] ?? '' }}">
                                        </div>
                                        <div class="level pt-2">
                                            <span>Поверх</span>
                                                {{$filterData[12] ?? ''}}-
                                                {{$filterData[13] ?? ''}}-
                                                {{$filterData[14] ?? ''}}
                                                <div class="multipleSelection rounded">
                                                    <div class="selectBox"
                                                         onclick="showCheckboxes()">
                                                        <select class="form-control">
                                                            <option>Оберіть поверх</option>
                                                        </select>
                                                        <div class="overSelect"></div>
                                                    </div>

                                                    <div id="checkBoxes">

                                                        <?php
                                                            for($i = 1; $i < 5; $i++){
                                                        ?>
                                                            <label for="third" class="d-flex p-2">
                                                                <input type="checkbox" id="one" name="level[]" value="<?php echo $i; ?>" class="w-auto mr-2" />
                                                                <?php echo $i; ?>  поверх
                                                            </label>
                                                        <?php } ?>
                                                        <label for="fourth" class="d-flex p-2">
                                                            <input type="checkbox" id="five" name="level[]" value="5" class="w-auto mr-2" />
                                                            5+ поверх
                                                        </label>

                                                        <label for="first" class="d-flex p-2">
                                                            <input type="checkbox" id="no-first" name="level[]" value="0" class="w-auto mr-2" />
                                                            Не перший поврех
                                                        </label>

                                                        <label for="second" class="d-flex p-2">
                                                            <input type="checkbox" id="no-last" name="level[]" value="6" class="w-auto mr-2" />
                                                            Не останій поврех
                                                        </label>

                                                    </div>
                                                </div>


                                            <script>
                                                var show = true;

                                                function showCheckboxes() {
                                                    var checkboxes =
                                                        document.getElementById("checkBoxes");

                                                    if (show) {
                                                        checkboxes.style.display = "block";
                                                        show = false;
                                                    } else {
                                                        checkboxes.style.display = "none";
                                                        show = true;
                                                    }
                                                }
                                            </script>
                                        </div>
                                        <div class="count-level pt-2">
                                            <span>Поверховість</span>
                                            <input type="number" min="1" step="1" max="999" name="count_level" id="count_level" class="form-control mt-2" value="{{ Cookie::get('count_level')?Cookie::get('count_level'):$filterData[11] ?? '' }}" />
                                        </div>
                                        <div class="opalenya-type pt-2">
                                            <span>Тип опалення</span> {{ $filterData[9] ?? Cookie::get('typeOpalenya') }}
                                            <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">
                                                <option selected disabled="">Оберіть тип опалення</option>


                                                    @if($filterData[9] ?? '')
                                                        @if($filterData[9] == 'Централізоване')
                                                            <option value="Централізоване" selected>Централізоване</option>
                                                            <option value="Автономне">Автономне</option>
                                                        @elseif($filterData[9] == 'Автономне')
                                                            <option value="Автономне" selected>Автономне</option>
                                                            <option value="Централізоване">Централізоване</option>
                                                        @else
                                                            <option value="Централізоване">Централізоване</option>
                                                            <option value="Автономне">Автономне</option>
                                                        @endif
                                                    @else
                                                        @if(Cookie::get('typeOpalenya'))
                                                            @if(Cookie::get('typeOpalenya') == 'Централізоване')
                                                                <option value="Централізоване" selected>Централізоване</option>
                                                                <option value="Автономне">Автономне</option>
                                                            @elseif(Cookie::get('typeOpalenya') == 'Автономне')
                                                                <option value="Автономне" selected>Автономне</option>
                                                                <option value="Централізоване">Централізоване</option>
                                                            @endif
                                                        @else
                                                        <option value="Централізоване">Централізоване</option>
                                                        <option value="Автономне">Автономне</option>
                                                        @endif
                                                    @endif



                                            </select>
                                        </div>

                                        <div class="unselect">
                                            <hr>
                                            <sapn>Виключення по району м.Житомир</sapn>
                                            <hr>
                                            <div class="unselect-city-rayon">
                                                <select name="unselect_rayon_city" id="unselect_rayon_city" class="form-control">
                                                    <option value="0" disabled selected>Оберіть</option>
                                                    @foreach($locationCityRayon as $key => $rayon_city)
                                                        @if($filterData[15] ?? '')
                                                            @if($filterData[15] == $rayon_city->rayon_city)
                                                                <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @else
                                                            @if(Cookie::get('unselect_rayon_city'))
                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->rayon_city)
                                                                    <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                                @else
                                                                    <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                                @endif
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    @break
                                    @case('house')
                                    <div class="parameters-house mt-2">

                                        <div class="count-level pt-2">
                                            <span>Поверховість</span>
                                            <input type="number" min="1" step="1" max="999" name="count_level" id="count_level" class="form-control mt-2" value="{{ Cookie::get('count_level')?Cookie::get('count_level'):$filterData[11] ?? '' }}" />
                                        </div>
                                        <div class="count-room pt-2">
                                            <span>Кількість кімнат</span>
                                            <input type="number" min="1" step="1" max="1000" class="form-control" id="count_room" name="count_room" value="{{ Cookie::get('count_room')?Cookie::get('count_room'):$filterData[10] ?? '' }}">
                                        </div>
                                        <div class="opalenya-type pt-2">
                                            <span>Тип опалення</span>
                                            <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">
                                                <option selected disabled="">Оберіть тип опалення</option>
                                                @if($filterData[9] ?? '')
                                                    @if($filterData[9] == 'Централізоване')
                                                        <option value="Централізоване" selected>Централізоване</option>
                                                        <option value="Автономне">Автономне</option>
                                                    @elseif($filterData[9] == 'Автономне')
                                                        <option value="Автономне" selected>Автономне</option>
                                                        <option value="Централізоване">Централізоване</option>
                                                    @else
                                                        <option value="Централізоване">Централізоване</option>
                                                        <option value="Автономне">Автономне</option>
                                                    @endif
                                                @else
                                                    @if(Cookie::get('typeOpalenya'))
                                                        @if(Cookie::get('typeOpalenya') == 'Централізоване')
                                                            <option value="Централізоване" selected>Централізоване</option>
                                                            <option value="Автономне">Автономне</option>
                                                        @elseif(Cookie::get('typeOpalenya') == 'Автономне')
                                                            <option value="Автономне" selected>Автономне</option>
                                                            <option value="Централізоване">Централізоване</option>
                                                        @endif
                                                    @else
                                                        <option value="Централізоване">Централізоване</option>
                                                        <option value="Автономне">Автономне</option>
                                                    @endif
                                                @endif
                                            </select>
                                        </div>
                                        <div class="unselect">
                                            <hr>
                                            <sapn>Виключення по району м.Житомир</sapn>
                                            <hr>
                                            <div class="unselect-city-rayon">
                                                <select name="unselect_rayon_city" id="unselect_rayon_city" class="form-control">
                                                    <option value="0" disabled selected>Оберіть</option>
                                                    @foreach($locationCityRayon as $key => $rayon_city)
                                                        @if($filterData[15] ?? '')
                                                            @if($filterData[15] == $rayon_city->rayon_city)
                                                                <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @else
                                                            @if(Cookie::get('unselect_rayon_city'))
                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->rayon_city)
                                                                    <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                                @else
                                                                    <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                                @endif
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                    @case('land')
                                    <div class="parameters-land mt-2">
                                        <div class="unselect">
                                            <hr>
                                            <sapn>Виключення по району м.Житомир</sapn>
                                            <hr>
                                            <div class="unselect-city-rayon">
                                                <select name="unselect_rayon_city" id="unselect_rayon_city" class="form-control">
                                                    <option value="0" disabled selected>Оберіть</option>
                                                    @foreach($locationCityRayon as $key => $rayon_city)
                                                        @if($filterData[15] ?? '')
                                                            @if($filterData[15] == $rayon_city->rayon_city)
                                                                <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @else
                                                            @if(Cookie::get('unselect_rayon_city'))
                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->rayon_city)
                                                                    <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                                @else
                                                                    <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                                @endif
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                    @case('commercial-real-estate')
                                    <div class="parameters-commercial-real-estate mt-2">
                                        <div class="opalenya-type pt-2">
                                            <span>Тип опалення</span>
                                            <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">
                                                <option selected disabled="">Оберіть тип опалення</option>
                                                @if($filterData[9] ?? '')
                                                    @if($filterData[9] == 'Централізоване')
                                                        <option value="Централізоване" selected>Централізоване</option>
                                                        <option value="Автономне">Автономне</option>
                                                    @elseif($filterData[9] == 'Автономне')
                                                        <option value="Автономне" selected>Автономне</option>
                                                        <option value="Централізоване">Централізоване</option>
                                                    @else
                                                        <option value="Централізоване">Централізоване</option>
                                                        <option value="Автономне">Автономне</option>
                                                    @endif
                                                @else
                                                    @if(Cookie::get('typeOpalenya'))
                                                        @if(Cookie::get('typeOpalenya') == 'Централізоване')
                                                            <option value="Централізоване" selected>Централізоване</option>
                                                            <option value="Автономне">Автономне</option>
                                                        @elseif(Cookie::get('typeOpalenya') == 'Автономне')
                                                            <option value="Автономне" selected>Автономне</option>
                                                            <option value="Централізоване">Централізоване</option>
                                                        @endif
                                                    @else
                                                        <option value="Централізоване">Централізоване</option>
                                                        <option value="Автономне">Автономне</option>
                                                    @endif
                                                @endif
                                            </select>
                                        </div>
                                        <div class="unselect">
                                            <hr>
                                            <sapn>Виключення по району м.Житомир</sapn>
                                            <hr>
                                            <div class="unselect-city-rayon">
                                                <select name="unselect_rayon_city" id="unselect_rayon_city" class="form-control">
                                                    <option value="0" disabled selected>Оберіть</option>
                                                    @foreach($locationCityRayon as $key => $rayon_city)
                                                        @if($filterData[15] ?? '')
                                                            @if($filterData[15] == $rayon_city->rayon_city)
                                                                <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @else
                                                            @if(Cookie::get('unselect_rayon_city'))
                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->rayon_city)
                                                                    <option value="{{$rayon_city->rayon_city}}" selected>{{$rayon_city->rayon_city}}</option>
                                                                @else
                                                                    <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                                @endif
                                                            @else
                                                                <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                                            @endif
                                                        @endif

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                    @default
                                    <div class="not-found-category">
                                        <span>Даної категорії немає!</span>
                                    </div>
                                @endswitch

                        </div>

                        <div class="container btn-set-filter mt-3 fixed-bottom">
                            <div class="btn-filter m-2">
                                <button type="submit" class="btn btn-danger pt-2 pb-2">Застосувати</button>

                                <div class="clear-filter text-center pt-2 pb-2">
                                    <a href="{{route('filter.clear', $category->slug)}}" class="text-secondary">Видалити</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-md-9" style="margin-left: 30%; min-height: 800px;">

                <div class="list-data">
                    @if($obekts->count() > 0)
                        <div class="row">
                            @foreach($obekts as $key => $item)

                                <div class="col-md-4">
                                    <div class="obekt-card shadow rounded p-2">
                                        <a href="{{ route('obekt.view', $item->slug) }}" class="object__link">
                                            @if($item->isPay)
                                                <div class="is-pay m-1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tag text-danger" id="tag-pay" viewBox="0 0 16 16">
                                                        <path d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                                        <path d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                                    </svg>
                                                    <span class="text-danger">Продано</span>
                                                </div>
                                            @endif
                                            <div class="obekt-image">
                                                <img src="{{$item->main_img}}" alt="obekt-image" class="img-fluid rounded obekt-image__img">
                                            </div>

                                        </a>
                                        <div class="object__text--promo p-1">
                                            <ul class="object__list">
                                                <li class="object__item object__item--title title_">
                                                    {{ Str::limit($item->name, 20) }}
                                                </li>
                                                <li class="object__item object__item--prace">$ {{ $item->price }}</li>

                                                {{--                                <li class="object__item">--}}
                                                {{--                                    <i class="bi bi-pin-map"></i>--}}
                                                {{--                                    {{ $item->rayon_name }},--}}
                                                {{--                                    {{ $item->city_name }}--}}
                                                {{--                                </li>--}}
                                                {{--                                 <li class="object__item">--}}
                                                {{--                                     <i class="bi bi-bounding-box-circles"></i>--}}
                                                {{--                                     {{ $item->square }} m2--}}
                                                {{--                                 </li>--}}

                                                {{--                                @foreach($appointments as $key => $type)--}}
                                                {{--                                    @if($item->appointment_id == $type->id)--}}
                                                {{--                                        <li class="object__item">--}}
                                                {{--                                            @switch($category->slug)--}}
                                                {{--                                                @case('land')--}}
                                                {{--                                                    <i class="bi bi-front"></i>--}}
                                                {{--                                                @break--}}
                                                {{--                                                @case('flat')--}}
                                                {{--                                                    <i class="bi bi-bricks"></i>--}}
                                                {{--                                                @break--}}
                                                {{--                                                @case('house')--}}
                                                {{--                                                    <i class="bi bi-bricks"></i>--}}
                                                {{--                                                @break--}}
                                                {{--                                                @case('commercial-real-estate')--}}
                                                {{--                                                    <i class="bi bi-front"></i>--}}
                                                {{--                                                @break--}}
                                                {{--                                                @default--}}
                                                {{--                                                <div class="col-md-3">--}}
                                                {{--                                                    <span>Даної категорії немає!</span>--}}
                                                {{--                                                </div>--}}
                                                {{--                                            @endswitch--}}
                                                {{--                                        {{ $type->name }}--}}
                                                {{--                                        </li>--}}
                                                {{--                                    @endif--}}
                                                {{--                                @endforeach--}}

                                                {{--                                @if($category->slug == 'flat' or $category->slug == 'house')--}}
                                                {{--                                    <li class="object__item">--}}
                                                {{--                                        <i class="bi bi-door-open"></i>--}}
                                                {{--                                        {{ $item->count_room }}--}}
                                                {{--                                    </li>--}}
                                                {{--                                @endif--}}

                                                {{--                                @if($category->slug == 'flat' or $category->slug == 'commercial-real-estate')--}}
                                                {{--                                    <li class="object__item">--}}
                                                {{--                                        <i class="bi bi-thermometer-sun"></i>--}}
                                                {{--                                        {{ $item->opalenyaName }}--}}
                                                {{--                                    </li>--}}
                                                {{--                                @endif--}}

                                                {{--                                @if($category->slug == 'flat')--}}
                                                {{--                                    <li class="object__item">--}}
                                                {{--                                        <i class="bi bi-stack"></i>--}}
                                                {{--                                        {{ $item->level }}/{{ $item->count_level }} поверх--}}
                                                {{--                                    </li>--}}
                                                {{--                                @endif--}}

                                            </ul>
                                        </div>
                                        <div class="link-open-obekt p-1">
                                            <a href="{{ route('obekt.view', $item->slug, $filterData[9]='Back') }}" class="btn btn--style">Детальніше</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        @if($obekts->count() > 10)
                            <hr>
                            {{ $obekts->links() }}
                            <hr>
                        @endif
                    @else
                        <div class="empty-data p-3">
                            <h2 class="display-4 text-danger"> <i class="bi bi-info-circle-fill"></i> Об'єкти нерухомості відсутні.</h2>
                        </div>
                    @endif
                </div>

            </div>
        </div>

    </div>

    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for(var i=0; i<ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0)==' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length,c.length);
            }
            return "";
        }


        window.onload = function() {
            console.log('qwe'+ getCookie('rayon_id'));
            var element = document.getElementById('rayon_id');
            // check if data in filterdata and cookie set as default if no set default
            element.value = 'м.Житомир';
            var check = (element.value || element.options[element.selectedIndex].value);
            var rayon_city = document.getElementById('rayon_city');
            var city_name = document.getElementById('city_name');
            if (check == 'м.Житомир') {
                rayon_city.classList.remove('invisible');
                rayon_city.classList.add('visible');

                city_name.classList.remove('visible');
                city_name.classList.add('invisible');
            }
        };

        function showSubList(a)
        {
            var x = (a.value || a.options[a.selectedIndex].value);
            var rayon_city = document.getElementById('rayon_city');
            var city_name = document.getElementById('city_name');

            if(x == 'м.Житомир') //51
            {
                rayon_city.classList.remove('invisible');
                rayon_city.classList.add('visible');

                city_name.classList.remove('visible');
                city_name.classList.add('invisible');
            }else if(x == 'Житомирський') //75
            {
                city_name.classList.remove('invisible');
                city_name.classList.add('visible');

                rayon_city.classList.remove('visible');
                rayon_city.classList.add('invisible');
            }
            else {
                city_name.classList.remove('visible');
                city_name.classList.add('invisible');

                rayon_city.classList.remove('visible');
                rayon_city.classList.add('invisible');
            }
        }
    </script>
@endsection
