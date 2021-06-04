@extends('layouts.app')

@section('content')
    <div class="container pt-5">

        <h1 class="title">{{ $category->name }}</h1>

        <div class="filter row bg-white p-3 rounded shadow">
            <form action="{{ route('filter.data') }}" method="GET" class="d-flex justify-content-between">
                @csrf
                <input type="text" value="{{$category->slug}}" name="slug" id="slug" class="hidden">
                <input type="text" value="{{$category->id}}" name="id" id="id" class="hidden">

                <div class="parameters col-md-10">
                    <div class="row">
                        <div class="col-md-3">
                            <span>Розташування <br> об'єкта</span>
                            <select onchange="showSubList(this)" name="rayon_id" id="rayon_id" class="form-control mt-2">
                                <option value="0" disabled selected>Оберіть район</option>
                                @foreach($locationRayon as $key => $rayon)
                                    <option value="{{$rayon->rayon}}">{{$rayon->rayon}}</option>
                                @endforeach
                            </select>
                            <select name="city_name" id="city_name" class="form-control invisible">
                                <option value="0" disabled>Оберіть місто</option>
                                @foreach($locationCity as $key => $city)
                                    <option value="{{$city->city}}">{{$city->city}}</option>
                                @endforeach
                            </select>
                            <select name="rayon_city" id="rayon_city" class="form-control invisible">
                                <option value="0" disabled>Оберіть район міста</option>
                                @foreach($locationCityRayon as $key => $rayon_city)
                                    <option value="{{$rayon_city->rayon_city}}">{{$rayon_city->rayon_city}}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="col-md-4 p-0">
                            <span class="ml-0 pl-0">Ціна ($.тис)</span>
                            <div class="price-range p-3 row mt-1">
                                <div class="min-price col-md-6 row">
                                   <div class="d-flex">
                                       <span>від </span> <input type="text" id="rangePrimary" class="text-danger ml-1" />
                                   </div>
                                    <input type="range" name="minPrice" id="minPrice" class="w-100" step="100" min="1" max="10000" value="" onchange="rangePrimary.value=value">

                                </div>
                                <div class="max-price col-md-6 row">
                                    <div class="d-flex">
                                        <span>до </span><input type="text" id="rangePrimary2" class="text-danger ml-1" />
                                    </div>
                                    <input type="range" name="maxPrice" id="maxPrice" class="w-100" step="100" min="1" max="10000" value="" onchange="rangePrimary2.value=value">

                                </div>
                            </div>

                        </div>

                        <div class="col-md-2">
                            <span class="ml-0 pl-0">Площа <br>(m2)</span>
                            <div class="square mt-2">
                                <input type="number" name="square" id="square" min="10" step="1" max="1000" class="form-control mt-2">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <span>Тип <br> об'єкта</span>
                            <select name="appointment_id" id="appointment_id" class="form-control mt-2" required>
                                <option disabled selected>Оберіть тип</option>
                                @foreach($appointments as $key => $appointment)
                                    <option value="{{$appointment->id}}">{{$appointment->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        @switch($category->slug)
                            @case('flat')
                                <div class="col-md-12 row">

                                        <div class="count-room col-md-2">
                                            <span>К-ть кімнат</span>
                                            <select name="count_room" id="count_room" class="form-control mt-2">
                                                <option value="0" disabled selected>Оберіть к-ть кімнат</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4+</option>
                                            </select>
                                        </div>
                                        <div class="count-room col-md-2">
                                            <span>Поверх</span>
                                            <select name="count_room" id="count_room" class="form-control mt-2">
                                                <option value="0" disabled selected>Оберіть поверх</option>
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
                                                <option value="0" disabled selected>Оберіть поверховість</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5+</option>
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <span>Тип опалення</span>
                                            <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">
                                                <option selected disabled="">Оберіть тип опалення</option>
                                                <option value="Централізоване">Централізоване</option>
                                                <option value="Автономне">Автономне</option>
                                            </select>
                                        </div>

                                </div>

                                @break
                            @case('house')
                                <div class="col-md-12 row">

                                    <div class="count-room col-md-3">
                                        <span>Поверховість</span>
                                        <select name="count_room" id="count_room" class="form-control mt-2">
                                            <option value="0" disabled selected>Оберіть поверховість</option>
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
                                            <option value="0" disabled selected>Оберіть к-ть кімнат</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4+</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <span>Тип опалення</span>
                                        <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">
                                            <option selected disabled="">Оберіть тип опалення</option>
                                            <option value="Централізоване">Централізоване</option>
                                            <option value="Автономне">Автономне</option>
                                        </select>
                                    </div>
                                </div>
                                @break
                            @case('land')

                                    <div class="col-md-3 row">
                                    </div>

                                @break
                            @case('commercial-real-estate')
                            <div class="col-md-12 row">
                                <div class="col-md-3">
                                    <span>Тип опалення</span>
                                    <select name="typeOpalenya" id="typeOpalenya" class="form-control mt-2">
                                        <option selected disabled="">Оберіть тип опалення</option>
                                        <option value="Централізоване">Централізоване</option>
                                        <option value="Автономне">Автономне</option>
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
                <div class="btn-set-filter col-md-2 align-items-center">
                    <button type="submit" class="btn btn-danger pt-3 pb-3">Застосувати</button>
                    <br>
                    <a href="/obekts/{{$category->slug}}" class="btn btn-secondary pt-3 pb-3">Скинути</a>
                </div>
            </form>
        </div>
        @if($obekts->count() > 0)
        <div class="row mt-2">
            @foreach($obekts as $key => $item)

                <div class="col-md-3">
                    <div class="shadow rounded p-2">
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
                            <div class="object__image1 h-auto">
                                <img src="{{$item->main_img}}" alt="obekt-image" class="img-fluid rounded">
                            </div>

                        </a>
                        <div class="object__text--promo p-3">
                            <ul class="object__list">
                                <li class="object__item object__item--title title_">{{ $item->name }}</li>
                                <li class="object__item object__item--prace">$ {{ $item->price }}</li>
                                <li class="object__item">
                                    <i class="bi bi-pin-map"></i>
                                    {{ $item->rayon_name }},
                                    {{ $item->city_name }}
                                </li>
                                 <li class="object__item">
                                     <i class="bi bi-bounding-box-circles"></i>
                                     {{ $item->square }} m2
                                 </li>

                                @foreach($appointments as $key => $type)
                                    @if($item->appointment_id == $type->id)
                                        <li class="object__item">
                                            @switch($category->slug)
                                                @case('land')
                                                    <i class="bi bi-front"></i>
                                                @break
                                                @case('flat')
                                                    <i class="bi bi-bricks"></i>
                                                @break
                                                @case('house')
                                                    <i class="bi bi-bricks"></i>
                                                @break
                                                @case('commercial-real-estate')
                                                    <i class="bi bi-front"></i>
                                                @break
                                                @default
                                                <div class="col-md-3">
                                                    <span>Даної категорії немає!</span>
                                                </div>
                                            @endswitch
                                        {{ $type->name }}
                                        </li>
                                    @endif
                                @endforeach

                                @if($category->slug == 'flat' or $category->slug == 'house')
                                    <li class="object__item">
                                        <i class="bi bi-door-open"></i>
                                        {{ $item->count_room }}
                                    </li>
                                @endif

                                @if($category->slug == 'flat')
                                    <li class="object__item">
                                        <i class="bi bi-thermometer-sun"></i>
                                        {{ $item->opalenyaName }}
                                    </li>
                                    <li class="object__item">
                                        <i class="bi bi-stack"></i>
                                        {{ $item->level }}/{{ $item->count_level }} поверх
                                    </li>
                                @endif

                            </ul>
                        </div>
                        <div class="link-open-obekt p-1">
                            <a href="{{ route('obekt.view', $item->slug) }}" class="btn btn--style" target="_blank">Детальніше</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <hr>
        {{ $obekts->links() }}
        <hr>
        @else
            <div class="empty-data p-3">
                <span class="title">Об'єктів нерухомості в розділі {{ $category->name }} немає.</span>
            </div>
        @endif
    </div>
    <script>
        function showSubList(a)
        {
            var x = (a.value || a.options[a.selectedIndex].value);
            var rayon_city = document.getElementById('rayon_city');
            var city_name = document.getElementById('city_name');

            if(x == 'м.Житомир')
            {
                rayon_city.classList.remove('invisible');
                rayon_city.classList.add('visible');

                city_name.classList.remove('visible');
                city_name.classList.add('invisible');
            }

            if(x == 'Житомирський')
            {
                city_name.classList.remove('invisible');
                city_name.classList.add('visible');

                rayon_city.classList.remove('visible');
                rayon_city.classList.add('invisible');
            }
        }
    </script>
@endsection
