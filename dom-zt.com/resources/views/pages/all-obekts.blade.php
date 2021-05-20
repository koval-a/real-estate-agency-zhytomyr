@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $category->name }}</h1>

        <hr>

        <div class="filter row">
            <form action="" method="GET" class="d-flex justify-content-between">
                @csrf
                <div class="parameters col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <span>Розташування</span>
                            <select name="rayon_id" id="rayon_id" class="form-control">
                                <option value="0" disabled>Оберіть район</option>
                                @foreach($locationRayon as $key => $rayon)
                                    <option value="{{$rayon->id}}">{{$rayon->rayon}}</option>
                                @endforeach
                            </select>
                            <select name="city_id" id="city_id" class="form-control">
                                <option value="0" disabled>Оберіть район</option>
                                @foreach($locationCity as $key => $city)
                                    <option value="{{$city->id}}">{{$city->city}}</option>
                                @endforeach
                            </select>
                            <select name="rayon_city_id" id="rayon_city_id" class="form-control">
                                <option value="0" disabled>Оберіть район</option>
                                @foreach($locationCityRayon as $key => $rayon_city)
                                    <option value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span>Ціна ($)</span>
                            <div id="slider-outer-div">
                                <div id="slider-max-label" class="slider-label"></div>
                                <div id="slider-min-label" class="slider-label"></div>
                                <div id="slider-div">
                                    <div>50 DH</div>
                                    <div>
                                        <input id="ex2" type="text" data-slider-min="50"
                                               data-slider-max="2000" data-slider-value="[50,300]"
                                               data-slider-tooltip="hide"/>
                                    </div>
                                    <div>2000 DH</div>
                                </div>
                            </div>
                        </div>

                        @switch($category->slug)
                            @case('flat')
                                <div class="col-md-3">
                                    <span>Кількість кімнат</span>
                                    <select name="count_room" id="count_room" class="form-control">
                                        <option value="0" disabled>Оберіть к-ть кімнат</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4+</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <span>Тип опалення</span>
                                    <select name="type_opalenya" id="type_opalenya" class="form-control">
                                        <option value="Централізоване">Централізоване</option>
                                        <option value="Автономне">Автономне</option>
                                    </select>
                                </div>
                                @break
                            @case('house')
                                <div class="col-md-3">
                                    {{$category->slug}}
                                </div>
                                @break
                            @case('land')
                                <div class="col-md-3">
                                    {{$category->slug}}
                                </div>
                                @break
                            @case('commercial-real-estate')
                                <div class="col-md-3">
                                    {{$category->slug}}
                                </div>
                                @break
                            @default
                                <div class="col-md-3">
                                    <span>Даної категорії немає!</span>
                                </div>

                        @endswitch
                    </div>
                </div>
                <div class="btn-set-filter col-md-2">
                    <button type="submit" class="btn btn-primary">Застосувати</button>
                </div>
            </form>
        </div>

        <hr>

        <div class="row">
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
        const setLabel = (lbl, val) => {
            const label = $(`#slider-${lbl}-label`);
            label.text(val);
            const slider = $(`#slider-div .${lbl}-slider-handle`);
            const rect = slider[0].getBoundingClientRect();
            label.offset({
                top: rect.top - 30,
                left: rect.left
            });
        }

        const setLabels = (values) => {
            setLabel("min", values[0]);
            setLabel("max", values[1]);
        }


        $('#ex2').slider().on('slide', function (ev) {
            setLabels(ev.value);
        });
        setLabels($('#ex2').attr("data-value").split(","));
    </script>
@endsection
