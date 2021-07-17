@extends('layouts.app')

@section('content')

    <style>
        .filter-div, .obekts-div {
            height: 70vh;
        }

        .filters-parameters {
            height: 50vh;
        }

        .filters-parameters, .obekts-div, .locationRayon-select {
            overflow: scroll;
        }

        .btn-select {
            text-align: center;
            width: 13avw;
            height: 10vh;
        }

        .locationRayon-select {
            height: 200px;
        }
    </style>

    <section class="container obekts-by-category">
        <div class="header-obekts-by-category pl-4">
            <h1 class="title- text-danger font-bold text-uppercase display-4">
                {{ $category['name'] }} ({{ $obekts->count() }})
            </h1>
        </div>
        <div class="container d-flex justify-content-between">

            <div class="col-md-3 p-2">
                <div class="p-3 filter-div shadow rounded shadow bg-white">
                    <h3>Фільтри</h3>
                    <hr>
                    <form action="{{ route('filter.data') }}" method="GET" class="">@csrf
                    <div class="filters-parameters">

                            <div class="d-flex">
                                <input type="text" value="{{$category->slug}}" name="slug" id="slug" class="invisible">
                                <input type="text" value="{{$category->id}}" name="id" id="id" class="invisible">
                            </div>

                            <div class="parameters pb-5 mb-5">
                                <div class="filter-by-id pb-1">
                                    <sapn>Код об'єкта</sapn>
                                    <input type="text" name="obekt_id" id="obekt_id" class="form-control"
                                           value="{{ Cookie::get('obekt_id')?Cookie::get('obekt_id'):$filterData[8] ?? '' }}">
                                </div>
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                        Розміщення
                                      </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body">
                                          <div class="locationRayon-select">
                                              @foreach($locationRayon as $key => $rayon)
                                                  <label for="{{ $rayon->rayon }}" class="d-flex p-2">
                                                      <input type="checkbox" id="location_rayon_id-{{ $rayon->id }}" name="location_rayon[]"
                                                             value="{{ $rayon->id }}" class="w-auto mr-2"/> {{ $rayon->rayon }}
                                                  </label>
                                              @endforeach
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                        Назва фільтру #2
                                      </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body">
                                          Фільтри
                                      </div>
                                    </div>
                                  </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo2" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Назва фільтру #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo2" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Фільтри
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingTwo1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Назва фільтру #2
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo1" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                Фільтри
                                            </div>
                                        </div>
                                    </div>
                                  <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingThree">
                                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                       Виключення розміщення
                                      </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                      <div class="accordion-body">
                                          <div class="locationRayon-select">
                                              @foreach($locationRayon as $key => $rayon)
                                                  <label for="{{ $rayon->rayon }}" class="d-flex p-2">
                                                      <input type="checkbox" id="unselect_location_rayon_id-{{ $rayon->id }}" name="location_rayon[]"
                                                             value="{{ $rayon->id }}" class="w-auto mr-2"/> {{ $rayon->rayon }}
                                                  </label>
                                              @endforeach
                                          </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
{{--                                <div class="parameters-basic__loction">--}}
{{--                                    <span>Розташування об'єкта</span>--}}
{{--                                    <select onchange="showSubList(this)" name="rayon_id" id="rayon_id"--}}
{{--                                            class="form-control mt-2">--}}
{{--                                        <option value="0" selected>Оберіть район</option>--}}
{{--                                        @foreach($locationRayon as $key => $rayon)--}}
{{--                                            <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>--}}
{{--                                        @endforeach--}}
{{--                                        @foreach($locationRayon as $key => $rayon)--}}

{{--                                            @if($filterData[1] ?? '')--}}
{{--                                                @if($filterData[1] == $rayon->rayon)--}}
{{--                                                    <option value="{{ $rayon->rayon }}"--}}
{{--                                                            selected> {{ $rayon->rayon }} </option>--}}
{{--                                                @else--}}
{{--                                                    <option value="{{ $rayon->rayon }}"> {{ $rayon->rayon }} </option>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                @if(Cookie::get('rayon_name'))--}}
{{--                                                    @if(Cookie::get('rayon_name') == $rayon->rayon)--}}
{{--                                                        <option value="{{ $rayon->rayon }}"--}}
{{--                                                                selected> {{ $rayon->rayon }} </option>--}}
{{--                                                    @else--}}
{{--                                                        <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>--}}
{{--                                                @endif--}}
{{--                                            @endif--}}

{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    <select name="city_name" id="city_name" class="form-control invisible city_name">--}}
{{--                                        <option value="0" disabled selected>Оберіть</option>--}}
{{--                                        @foreach($locationCity as $key => $city)--}}

{{--                                            @if($filterData[2] ?? '')--}}
{{--                                                @if($filterData[2] == $city->city)--}}
{{--                                                    <option value="{{$city->city}}" selected>{{$city->city}}</option>--}}
{{--                                                @else--}}
{{--                                                    <option value="{{$city->city}}">{{$city->city}}</option>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                @if(Cookie::get('rayon_city'))--}}
{{--                                                    @if(Cookie::get('rayon_city') == $city->city)--}}
{{--                                                        <option value="{{$city->city}}"--}}
{{--                                                                selected>{{$city->city}}</option>--}}
{{--                                                    @else--}}
{{--                                                        <option value="{{$city->city}}">{{$city->city}}</option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    <option value="{{$city->city}}">{{$city->city}}</option>--}}
{{--                                                @endif--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                    <select name="rayon_city" id="rayon_city" class="form-control invisible rayon_city">--}}
{{--                                        <option value="0" disabled selected>Оберіть</option>--}}
{{--                                        @foreach($locationCityRayon as $key => $rayon_city)--}}

{{--                                            @if($filterData[3] ?? '')--}}
{{--                                                @if($filterData[3] == $rayon_city->rayon_city)--}}
{{--                                                    <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                            selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                @else--}}
{{--                                                    <option--}}
{{--                                                        value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                @if(Cookie::get('city_name'))--}}
{{--                                                    @if(Cookie::get('city_name') == $rayon_city->rayon_city)--}}
{{--                                                        <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                                selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                    @else--}}
{{--                                                        <option--}}
{{--                                                            value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    <option--}}
{{--                                                        value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                @endif--}}
{{--                                            @endif--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}

{{--                                </div>--}}

{{--                                <div class="parameters-basic__price p-0">--}}
{{--                                    <span class="ml-0 pl-0">Ціна ($)</span>--}}
{{--                                    <div class="price-range d-flex justify-content-between mt-1">--}}
{{--                                        <div class="min-price p-1">--}}
{{--                                            <span>від </span> <input type="text" id="rangePrimary" name="rangePrimary"--}}
{{--                                                                     class="text-danger form-control"--}}
{{--                                                                     value="{{ Cookie::get('min_price')?Cookie::get('min_price'):$filterData[4] ?? '' }}"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="max-price p-1">--}}
{{--                                            <span>до </span><input type="text" id="rangePrimary2" name="rangePrimary2"--}}
{{--                                                                   class="text-danger form-control"--}}
{{--                                                                   value="{{ Cookie::get('max_price')?Cookie::get('max_price'):$filterData[5] ?? '' }}"/>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="type-wall">--}}
{{--                                    @if($category->slug != 'land')--}}
{{--                                        <span class="ml-0 pl-0">Тип стін</span><span--}}
{{--                                            class="text-danger">- {{ $filterData[7] ?? Cookie::get('typeWallName')}}</span>--}}
{{--                                        <select name="typeWall" id="typeWall" class="form-control">--}}
{{--                                            <option disabled selected>Оберіть тип</option>--}}
{{--                                            @foreach($typeWall as $key => $wall)--}}
{{--                                                @if($filterData[7] ?? '')--}}
{{--                                                    @if($filterData[7] == $wall->id)--}}
{{--                                                        <option value="{{ $wall->id }}"--}}
{{--                                                                selected> {{ $wall->name }} </option>--}}
{{--                                                    @else--}}
{{--                                                        <option value="{{ $wall->id }}">{{ $wall->name }}</option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    @if(Cookie::get('typeWallName'))--}}
{{--                                                        @if(Cookie::get('typeWallName') == $wall->id)--}}
{{--                                                            <option value="{{ $wall->id }}"--}}
{{--                                                                    selected> {{ $wall->name }} </option>--}}
{{--                                                        @else--}}
{{--                                                            <option value="{{ $wall->id }}">{{ $wall->name }}</option>--}}
{{--                                                        @endif--}}
{{--                                                    @else--}}
{{--                                                        <option value="{{ $wall->id }}">{{ $wall->name }}</option>--}}
{{--                                                    @endif--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}
{{--                                        </select>--}}

{{--                                    @endif--}}
{{--                                </div>--}}

{{--                                <div class="parameters-basic__price p-0">--}}
{{--                                    <span class="ml-0 pl-0">Ціна ($.тис)</span>--}}
{{--                                    <div class="price-range p-3 row mt-1">--}}
{{--                                        <div class="min-price col-md-6 row">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <span>від </span> <input type="text" id="rangePrimary"--}}
{{--                                                                         name="rangePrimary" class="text-danger ml-1"/>--}}
{{--                                            </div>--}}
{{--                                            <input type="range" name="minPrice" id="minPrice" class="w-100" step="1"--}}
{{--                                                   min="{{ $price[1] }}" max="10000" value=""--}}
{{--                                                   onchange="rangePrimary.value=value">--}}

{{--                                        </div>--}}
{{--                                        <div class="max-price col-md-6 row">--}}
{{--                                            <div class="d-flex">--}}
{{--                                                <span>до </span><input type="text" id="rangePrimary2"--}}
{{--                                                                       name="rangePrimary2" class="text-danger ml-1"/>--}}
{{--                                            </div>--}}
{{--                                            <input type="range" name="maxPrice" id="maxPrice" class="w-100" step="1"--}}
{{--                                                   min="{{ $price[1] }}" max="{{ $price[0] }}" value=""--}}
{{--                                                   onchange="rangePrimary2.value=value">--}}

{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                </div>--}}

{{--                                <div class="square">--}}
{{--                                    <span class="ml-0 pl-0">Площа <br>(m2)</span>--}}
{{--                                    <div class="square mt-2">--}}
{{--                                        <input type="number" name="square" id="square" min="10" step="1" max="1000"--}}
{{--                                               class="form-control mt-2">--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="parameters-basic__type-obekt pt-2">--}}
{{--                                    <span>Тип об'єкта</span>--}}
{{--                                    <select name="appointment_id" id="appointment_id" class="form-control mt-2">--}}
{{--                                        <option disabled selected>Оберіть тип</option>--}}
{{--                                        @foreach($appointments as $key => $appointment)--}}
{{--                                            @if(Cookie::get('typeAppointment'))--}}
{{--                                                @if(Cookie::get('typeAppointment') == $appointment->id)--}}
{{--                                                    <option value="{{ $appointment->id }}"--}}
{{--                                                            selected> {{ $appointment->name }} </option>--}}
{{--                                                @else--}}
{{--                                                    <option--}}
{{--                                                        value="{{ $appointment->id }}"> {{ $appointment->name }} </option>--}}
{{--                                                @endif--}}
{{--                                            @else--}}
{{--                                                @if($filterData[0] ?? '')--}}
{{--                                                    @if($filterData[0] == $appointment->id)--}}
{{--                                                        <option value="{{ $appointment->id }}"--}}
{{--                                                                selected> {{ $appointment->name }} </option>--}}
{{--                                                    @else--}}
{{--                                                        <option--}}
{{--                                                            value="{{ $appointment->id }}"> {{ $appointment->name }} </option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    <option value="{{$appointment->id}}">{{$appointment->name}}</option>--}}
{{--                                                @endif--}}
{{--                                            @endif--}}

{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}

{{--                                @switch($category->slug)--}}
{{--                                    @case('flat')--}}
{{--                                    <div class="parameters-flat mt-2">--}}

{{--                                        <div class="count-room pt-2">--}}
{{--                                            <span>К-ть кімнат</span>--}}
{{--                                            <input type="number" min="1" step="1" max="1000" class="form-control"--}}
{{--                                                   id="count_room" name="count_room"--}}
{{--                                                   value="{{ Cookie::get('count_room')?Cookie::get('count_room'):$filterData[10] ?? '' }}">--}}
{{--                                        </div>--}}
{{--                                        <div class="level pt-2">--}}
{{--                                            <span>Поверх</span>--}}
{{--                                            {{$filterData[12] ?? ''}}---}}
{{--                                            {{$filterData[13] ?? ''}}---}}
{{--                                            {{$filterData[14] ?? ''}}--}}
{{--                                            <div class="multipleSelection rounded">--}}
{{--                                                <div class="selectBox"--}}
{{--                                                     onclick="showCheckboxes()">--}}
{{--                                                    <select class="form-control">--}}
{{--                                                        <option>Оберіть поверх</option>--}}
{{--                                                    </select>--}}
{{--                                                    <div class="overSelect"></div>--}}
{{--                                                </div>--}}

{{--                                                <div id="checkBoxes">--}}

{{--                                                    <?php--}}
{{--                                                    for($i = 1; $i < 5; $i++){--}}
{{--                                                    ?>--}}
{{--                                                    <label for="third" class="d-flex p-2">--}}
{{--                                                        <input type="checkbox" id="one" name="level[]"--}}
{{--                                                               value="<?php echo $i; ?>" class="w-auto mr-2"/>--}}
{{--                                                        <?php echo $i; ?> поверх--}}
{{--                                                    </label>--}}
{{--                                                    <?php } ?>--}}
{{--                                                    <label for="fourth" class="d-flex p-2">--}}
{{--                                                        <input type="checkbox" id="five" name="level[]" value="5"--}}
{{--                                                               class="w-auto mr-2"/>--}}
{{--                                                        5+ поверх--}}
{{--                                                    </label>--}}

{{--                                                    <label for="first" class="d-flex p-2">--}}
{{--                                                        <input type="checkbox" id="no-first" name="level[]" value="0"--}}
{{--                                                               class="w-auto mr-2"/>--}}
{{--                                                        Не перший поврех--}}
{{--                                                    </label>--}}

{{--                                                    <label for="second" class="d-flex p-2">--}}
{{--                                                        <input type="checkbox" id="no-last" name="level[]" value="6"--}}
{{--                                                               class="w-auto mr-2"/>--}}
{{--                                                        Не останій поврех--}}
{{--                                                    </label>--}}

{{--                                                </div>--}}
{{--                                            </div>--}}


{{--                                            <script>--}}
{{--                                                var show = true;--}}

{{--                                                function showCheckboxes() {--}}
{{--                                                    var checkboxes =--}}
{{--                                                        document.getElementById("checkBoxes");--}}

{{--                                                    if (show) {--}}
{{--                                                        checkboxes.style.display = "block";--}}
{{--                                                        show = false;--}}
{{--                                                    } else {--}}
{{--                                                        checkboxes.style.display = "none";--}}
{{--                                                        show = true;--}}
{{--                                                    }--}}
{{--                                                }--}}
{{--                                            </script>--}}
{{--                                        </div>--}}
{{--                                        <div class="count-level pt-2">--}}
{{--                                            <span>Поверховість</span>--}}
{{--                                            <input type="number" min="1" step="1" max="999" name="count_level"--}}
{{--                                                   id="count_level" class="form-control mt-2"--}}
{{--                                                   value="{{ Cookie::get('count_level')?Cookie::get('count_level'):$filterData[11] ?? '' }}"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="opalenya-type pt-2">--}}
{{--                                            <span>Тип опалення</span> {{ $filterData[9] ?? Cookie::get('typeOpalenya') }}--}}
{{--                                            <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">--}}
{{--                                                <option selected disabled="">Оберіть тип опалення</option>--}}


{{--                                                @if($filterData[9] ?? '')--}}
{{--                                                    @if($filterData[9] == 'Централізоване')--}}
{{--                                                        <option value="Централізоване" selected>Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @elseif($filterData[9] == 'Автономне')--}}
{{--                                                        <option value="Автономне" selected>Автономне</option>--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                    @else--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    @if(Cookie::get('typeOpalenya'))--}}
{{--                                                        @if(Cookie::get('typeOpalenya') == 'Централізоване')--}}
{{--                                                            <option value="Централізоване" selected>Централізоване--}}
{{--                                                            </option>--}}
{{--                                                            <option value="Автономне">Автономне</option>--}}
{{--                                                        @elseif(Cookie::get('typeOpalenya') == 'Автономне')--}}
{{--                                                            <option value="Автономне" selected>Автономне</option>--}}
{{--                                                            <option value="Централізоване">Централізоване</option>--}}
{{--                                                        @endif--}}
{{--                                                    @else--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @endif--}}
{{--                                                @endif--}}


{{--                                            </select>--}}
{{--                                        </div>--}}

{{--                                        <div class="unselect">--}}
{{--                                            <hr>--}}
{{--                                            <sapn>Виключення по району м.Житомир</sapn>--}}
{{--                                            <hr>--}}
{{--                                            <div class="unselect-city-rayon">--}}
{{--                                                <select name="unselect_rayon_city" id="unselect_rayon_city"--}}
{{--                                                        class="form-control">--}}
{{--                                                    <option value="0" disabled selected>Оберіть</option>--}}
{{--                                                    @foreach($locationCityRayon as $key => $rayon_city)--}}
{{--                                                        @if($filterData[15] ?? '')--}}
{{--                                                            @if($filterData[15] == $rayon_city->id)--}}
{{--                                                                <option value="{{$rayon_city->id}}"--}}
{{--                                                                        selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @else--}}
{{--                                                            @if(Cookie::get('unselect_rayon_city'))--}}
{{--                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->id)--}}
{{--                                                                    <option value="{{$rayon_city->id}}"--}}
{{--                                                                            selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @else--}}
{{--                                                                    <option--}}
{{--                                                                        value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @endif--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @endif--}}

{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}

{{--                                    @break--}}
{{--                                    @case('house')--}}
{{--                                    <div class="parameters-house mt-2">--}}

{{--                                        <div class="count-level pt-2">--}}
{{--                                            <span>Поверховість</span>--}}
{{--                                            <input type="number" min="1" step="1" max="999" name="count_level"--}}
{{--                                                   id="count_level" class="form-control mt-2"--}}
{{--                                                   value="{{ Cookie::get('count_level')?Cookie::get('count_level'):$filterData[11] ?? '' }}"/>--}}
{{--                                        </div>--}}
{{--                                        <div class="count-room pt-2">--}}
{{--                                            <span>Кількість кімнат</span>--}}
{{--                                            <input type="number" min="1" step="1" max="1000" class="form-control"--}}
{{--                                                   id="count_room" name="count_room"--}}
{{--                                                   value="{{ Cookie::get('count_room')?Cookie::get('count_room'):$filterData[10] ?? '' }}">--}}
{{--                                        </div>--}}
{{--                                        <div class="opalenya-type pt-2">--}}
{{--                                            <span>Тип опалення</span>--}}
{{--                                            <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">--}}
{{--                                                <option selected disabled="">Оберіть тип опалення</option>--}}
{{--                                                @if($filterData[9] ?? '')--}}
{{--                                                    @if($filterData[9] == 'Централізоване')--}}
{{--                                                        <option value="Централізоване" selected>Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @elseif($filterData[9] == 'Автономне')--}}
{{--                                                        <option value="Автономне" selected>Автономне</option>--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                    @else--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    @if(Cookie::get('typeOpalenya'))--}}
{{--                                                        @if(Cookie::get('typeOpalenya') == 'Централізоване')--}}
{{--                                                            <option value="Централізоване" selected>Централізоване--}}
{{--                                                            </option>--}}
{{--                                                            <option value="Автономне">Автономне</option>--}}
{{--                                                        @elseif(Cookie::get('typeOpalenya') == 'Автономне')--}}
{{--                                                            <option value="Автономне" selected>Автономне</option>--}}
{{--                                                            <option value="Централізоване">Централізоване</option>--}}
{{--                                                        @endif--}}
{{--                                                    @else--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @endif--}}
{{--                                                @endif--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="unselect">--}}
{{--                                            <hr>--}}
{{--                                            <sapn>Виключення по району м.Житомир</sapn>--}}
{{--                                            <hr>--}}
{{--                                            <div class="unselect-city-rayon">--}}
{{--                                                <select name="unselect_rayon_city" id="unselect_rayon_city"--}}
{{--                                                        class="form-control">--}}
{{--                                                    <option value="0" disabled selected>Оберіть</option>--}}
{{--                                                    @foreach($locationCityRayon as $key => $rayon_city)--}}
{{--                                                        @if($filterData[15] ?? '')--}}
{{--                                                            @if($filterData[15] == $rayon_city->rayon_city)--}}
{{--                                                                <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                                        selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @else--}}
{{--                                                            @if(Cookie::get('unselect_rayon_city'))--}}
{{--                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->rayon_city)--}}
{{--                                                                    <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                                            selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @else--}}
{{--                                                                    <option--}}
{{--                                                                        value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @endif--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @endif--}}

{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    @break--}}
{{--                                    @case('land')--}}
{{--                                    <div class="parameters-land mt-2">--}}
{{--                                        <div class="unselect">--}}
{{--                                            <hr>--}}
{{--                                            <sapn>Виключення по району м.Житомир</sapn>--}}
{{--                                            <hr>--}}
{{--                                            <div class="unselect-city-rayon">--}}
{{--                                                <select name="unselect_rayon_city" id="unselect_rayon_city"--}}
{{--                                                        class="form-control">--}}
{{--                                                    <option value="0" disabled selected>Оберіть</option>--}}
{{--                                                    @foreach($locationCityRayon as $key => $rayon_city)--}}
{{--                                                        @if($filterData[15] ?? '')--}}
{{--                                                            @if($filterData[15] == $rayon_city->rayon_city)--}}
{{--                                                                <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                                        selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @else--}}
{{--                                                            @if(Cookie::get('unselect_rayon_city'))--}}
{{--                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->rayon_city)--}}
{{--                                                                    <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                                            selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @else--}}
{{--                                                                    <option--}}
{{--                                                                        value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @endif--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @endif--}}

{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    @break--}}
{{--                                    @case('commercial-real-estate')--}}
{{--                                    <div class="parameters-commercial-real-estate mt-2">--}}
{{--                                        <div class="opalenya-type pt-2">--}}
{{--                                            <span>Тип опалення</span>--}}
{{--                                            <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">--}}
{{--                                                <option selected disabled="">Оберіть тип опалення</option>--}}
{{--                                                @if($filterData[9] ?? '')--}}
{{--                                                    @if($filterData[9] == 'Централізоване')--}}
{{--                                                        <option value="Централізоване" selected>Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @elseif($filterData[9] == 'Автономне')--}}
{{--                                                        <option value="Автономне" selected>Автономне</option>--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                    @else--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @endif--}}
{{--                                                @else--}}
{{--                                                    @if(Cookie::get('typeOpalenya'))--}}
{{--                                                        @if(Cookie::get('typeOpalenya') == 'Централізоване')--}}
{{--                                                            <option value="Централізоване" selected>Централізоване--}}
{{--                                                            </option>--}}
{{--                                                            <option value="Автономне">Автономне</option>--}}
{{--                                                        @elseif(Cookie::get('typeOpalenya') == 'Автономне')--}}
{{--                                                            <option value="Автономне" selected>Автономне</option>--}}
{{--                                                            <option value="Централізоване">Централізоване</option>--}}
{{--                                                        @endif--}}
{{--                                                    @else--}}
{{--                                                        <option value="Централізоване">Централізоване</option>--}}
{{--                                                        <option value="Автономне">Автономне</option>--}}
{{--                                                    @endif--}}
{{--                                                @endif--}}
{{--                                            </select>--}}
{{--                                        </div>--}}
{{--                                        <div class="unselect">--}}
{{--                                            <hr>--}}
{{--                                            <sapn>Виключення по району м.Житомир</sapn>--}}
{{--                                            <hr>--}}
{{--                                            <div class="unselect-city-rayon">--}}
{{--                                                <select name="unselect_rayon_city" id="unselect_rayon_city"--}}
{{--                                                        class="form-control">--}}
{{--                                                    <option value="0" disabled selected>Оберіть</option>--}}
{{--                                                    @foreach($locationCityRayon as $key => $rayon_city)--}}
{{--                                                        @if($filterData[15] ?? '')--}}
{{--                                                            @if($filterData[15] == $rayon_city->rayon_city)--}}
{{--                                                                <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                                        selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @else--}}
{{--                                                            @if(Cookie::get('unselect_rayon_city'))--}}
{{--                                                                @if(Cookie::get('unselect_rayon_city') == $rayon_city->rayon_city)--}}
{{--                                                                    <option value="{{$rayon_city->rayon_city}}"--}}
{{--                                                                            selected>{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @else--}}
{{--                                                                    <option--}}
{{--                                                                        value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                                @endif--}}
{{--                                                            @else--}}
{{--                                                                <option--}}
{{--                                                                    value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>--}}
{{--                                                            @endif--}}
{{--                                                        @endif--}}

{{--                                                    @endforeach--}}
{{--                                                </select>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    @break--}}
{{--                                    @default--}}
{{--                                    <div class="not-found-category">--}}
{{--                                        <span>Даної категорії немає!</span>--}}
{{--                                    </div>--}}
{{--                                @endswitch--}}

                            </div>



                    </div>
                    <div class="btn-select d-flex flex-column rounded bg-white">
                        <button type="submit" class="p-2 btn-block bg-danger text-white rounded m-auto">Застосувати</button>
                        <a href="{{route('filter.clear', $category->slug)}}" class="p-2 text-secondary">Видалити</a>
                    </div>
                    </form>
                </div>

            </div>

            <div class="col-md-9 p-2">
                <div class="p-3 obekts-div shadow rounded shadow bg-white-">
                    {{ $obekts->links() }}
                    <hr>
                    <div class="list-data">
                        @if($obekts->count() > 0)
                            <div class="row">
                                @foreach($obekts as $key => $item)

                                    <div class="col-md-4">
                                        <div class="obekt-card shadow rounded p-2">
                                            <a href="{{ route('obekt.view', $item->slug) }}" class="object__link">
                                                @if($item->isPay)
                                                    <div class="is-pay m-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-tag text-danger"
                                                             id="tag-pay" viewBox="0 0 16 16">
                                                            <path
                                                                d="M6 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm-1 0a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0z"/>
                                                            <path
                                                                d="M2 1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 1 6.586V2a1 1 0 0 1 1-1zm0 5.586 7 7L13.586 9l-7-7H2v4.586z"/>
                                                        </svg>
                                                        <span class="text-danger">Продано</span>
                                                    </div>
                                                @endif
                                                <div class="obekt-image">
                                                    <img src="{{ $item->main_img }}" alt="obekt-image"
                                                         class="img-fluid rounded obekt-image__img">

                                                    <script async
                                                            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                                    <!-- news-sidbar -->
                                                    <ins class="adsbygoogle" style="display: block;"
                                                         data-ad-client="ca-pub-4453172390299200"
                                                         data-ad-slot="1427392196" data-ad-format="auto"
                                                         data-full-width-responsive="true"></ins>
                                                    <script>
                                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                                    </script>
                                                </div>

                                            </a>
                                            <div class="object__text--promo p-1">
                                                <ul class="object__list">
                                                    <li class="object__item object__item--title title_">
                                                        {{ Str::limit($item->name, 20) }}
                                                    </li>
                                                    <li class="object__item object__item--prace">
                                                        $ {{ number_format($item->price, 2, '.', ',') }}</li>

                                                    {{--                                                    <li class="object__item">--}}
                                                    {{--                                                        <i class="bi bi-pin-map"></i>--}}
                                                    {{--                                                        {{ $item->rayon_name }},--}}
                                                    {{--                                                        {{ $item->city_name }}--}}
                                                    {{--                                                    </li>--}}
                                                    {{--                                                    <li class="object__item">--}}
                                                    {{--                                                        <i class="bi bi-bounding-box-circles"></i>--}}
                                                    {{--                                                        {{ $item->square }} m2--}}
                                                    {{--                                                    </li>--}}

                                                    {{--                                                    @foreach($appointments as $key => $type)--}}
                                                    {{--                                                        @if($item->appointment_id == $type->id)--}}
                                                    {{--                                                            <li class="object__item">--}}
                                                    {{--                                                                @switch($category->slug)--}}
                                                    {{--                                                                    @case('land')--}}
                                                    {{--                                                                    <i class="bi bi-front"></i>--}}
                                                    {{--                                                                    @break--}}
                                                    {{--                                                                    @case('flat')--}}
                                                    {{--                                                                    <i class="bi bi-bricks"></i>--}}
                                                    {{--                                                                    @break--}}
                                                    {{--                                                                    @case('house')--}}
                                                    {{--                                                                    <i class="bi bi-bricks"></i>--}}
                                                    {{--                                                                    @break--}}
                                                    {{--                                                                    @case('commercial-real-estate')--}}
                                                    {{--                                                                    <i class="bi bi-front"></i>--}}
                                                    {{--                                                                    @break--}}
                                                    {{--                                                                    @default--}}
                                                    {{--                                                                    <div class="col-md-3">--}}
                                                    {{--                                                                        <span>Даної категорії немає!</span>--}}
                                                    {{--                                                                    </div>--}}
                                                    {{--                                                                @endswitch--}}
                                                    {{--                                                                {{ $type->name }}--}}
                                                    {{--                                                            </li>--}}
                                                    {{--                                                        @endif--}}
                                                    {{--                                                    @endforeach--}}

                                                    {{--                                                    @if($category->slug == 'flat' or $category->slug == 'house')--}}
                                                    {{--                                                        <li class="object__item">--}}
                                                    {{--                                                            <i class="bi bi-door-open"></i>--}}
                                                    {{--                                                            {{ $item->count_room }}--}}
                                                    {{--                                                        </li>--}}
                                                    {{--                                                    @endif--}}

                                                    {{--                                                    @if($category->slug == 'flat' or $category->slug == 'commercial-real-estate')--}}
                                                    {{--                                                        <li class="object__item">--}}
                                                    {{--                                                            <i class="bi bi-thermometer-sun"></i>--}}
                                                    {{--                                                            {{ $item->opalenyaName }}--}}
                                                    {{--                                                        </li>--}}
                                                    {{--                                                    @endif--}}

                                                    {{--                                                    @if($category->slug == 'flat')--}}
                                                    {{--                                                        <li class="object__item">--}}
                                                    {{--                                                            <i class="bi bi-stack"></i>--}}
                                                    {{--                                                            {{ $item->level }}/{{ $item->count_level }} поверх--}}
                                                    {{--                                                        </li>--}}
                                                    {{--                                                    @endif--}}

                                                </ul>
                                            </div>
                                            <div class="link-open-obekt p-1">
                                                <a href="{{ route('obekt.view', $item->slug, $filterData[9]='Back') }}"
                                                   class="btn btn--style">Детальніше</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                        @else
                            <div class="empty-data p-3">
                                <h2 class="display-4 text-danger"><i class="bi bi-info-circle-fill"></i> Об'єкти
                                    нерухомості відсутні.</h2>
                            </div>
                        @endif
                    </div>
                    <hr>
                    <div class="pagination pt-2">

                        {{ $obekts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function getCookie(cname) {
            var name = cname + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1);
                if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
            }
            return "";
        }


        window.onload = function () {
            console.log('qwe' + getCookie('rayon_id'));
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

        function showSubList(a) {
            var x = (a.value || a.options[a.selectedIndex].value);
            var rayon_city = document.getElementById('rayon_city');
            var city_name = document.getElementById('city_name');

            if (x == 'м.Житомир') //51
            {
                rayon_city.classList.remove('invisible');
                rayon_city.classList.add('visible');

                city_name.classList.remove('visible');
                city_name.classList.add('invisible');
            } else if (x == 'Житомирський') //75
            {
                city_name.classList.remove('invisible');
                city_name.classList.add('visible');

                rayon_city.classList.remove('visible');
                rayon_city.classList.add('invisible');
            } else {
                city_name.classList.remove('visible');
                city_name.classList.add('invisible');

                rayon_city.classList.remove('visible');
                rayon_city.classList.add('invisible');
            }
        }
    </script>
@endsection
