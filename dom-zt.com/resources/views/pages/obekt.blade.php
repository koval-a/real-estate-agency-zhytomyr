@extends('layouts.app')

@section('content')

    <div class="container">

        <section class="product">
            <div class="container ">
{{--                <div class="button__back row align-items-center">--}}
{{--                    <a href="" class="back__link">--}}
{{--                        <svg class="strelka-left-4" viewBox="0 0 100 85">--}}
{{--                            <polygon--}}
{{--                                points="58.263,0.056 100,41.85 58.263,83.641 30.662,83.641 62.438,51.866 0,51.866 0,31.611 62.213,31.611 30.605,0 58.263,0.056">--}}
{{--                            </polygon>--}}
{{--                        </svg>--}}
{{--                        <div class="button__link">--}}
{{--                            <a href="/obekts/{{ $category ->slug }}">Назад</a>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}

                {{--                    <div class="breadcrumb__block">--}}
                {{--                        <ul class="breadcrumb">--}}
                {{--                            <li class="breadcrumb-item"><a href="/">Каталог</a></li>--}}
                {{--                            <li class="breadcrumb-item">--}}
                {{--                                <a href="/obekts/ {{ $category ->slug }}">--}}
                {{--                                    {{ $category ->name }}--}}
                {{--                                </a>--}}
                {{--                            </li>--}}
                {{--                            <li class="breadcrumb-item active">--}}
                {{--                                <a href="/obekt/{{ $obekt->slug }}">{{ $obekt->name }}</a>--}}
                {{--                            </li>--}}
                {{--                        </ul>--}}
                {{--                    </div>--}}

                <div class="breadcrumbs">
                    <ul class="breadcrumb pl-2">
                        <li class="p-2">&#127963;</li>
                        <li class="bg-danger1 p-2 rounded mr-1"><a href="/" class="text-danger">Каталог</a></li>
{{--                        <li class="p-2">&#128073;</li>--}}
                        <i class="bi bi-chevron-right text-danger m-2"></i>
                        <li class="bg-danger1 p-2 rounded mr-1"><a href="/obekts/{{ $category ->slug }}"
                                                                   class="text-danger">{{ $category ->name }}</a></li>
{{--                        <li class="p-2">&#128073;</li>--}}
                        <i class="bi bi-chevron-right text-danger m-2"></i>
                        <li class="bg-danger rounded p-2 active">
                            <a href="/obekt/{{ $obekt->slug }}" class="text-white">{{ $obekt->name }}</a>
                        </li>
                    </ul>
                </div>

                <div class="product__main">
                    <div class="product__photo">
                        <h1 class="title__product mt-2">{{ $obekt->name }}</h1>
{{--                        <h3 class="title__product">{{ $obekt->name }} (ID: {{ $obekt->id }})</h3>--}}
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="{{ $obekt->main_img }}" alt="main image"
                                         class="slide__image img-fluid w-100 h-auto">
                                </div>
                                @foreach($filesImages as $key => $image)
                                    @if($obekt->id == $image->obekt_id)

                                        <div class="swiper-slide">
                                            <img src="{{ $image->url_img }}" alt="image-{{$image->id}}"
                                                 class="slide__image img-fluid w-100 h-auto">
                                            {{--                                            <a data-fancybox="gallery" href="{{ $image->url_img }}">--}}
                                            {{--                                                <img src="{{ $image->url_img }}" alt="image-{{$image->id}}" class="slide__image img-fluid w-100 h-auto">--}}
                                            {{--                                            </a>--}}
                                        </div>

                                    @endif
                                @endforeach
                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <div class="product__info">
                        <p class="product__info--prace">Ціна: {{ $obekt->price }}$</p>
                        <ul class="product-filter__list">

                            @if( $category ->slug  != 'land')
                                @if( $category ->slug != 'commercial-real-estate')
                                    <li class="product-filter__item">
                                        <span class="text-secondary"> К-ть кімнат: </span>
                                        {{ $obekt->count_room }}
                                    </li>
                                @endif

                                <li class="product-filter__item">
                                    <span class="text-secondary">Опалення:  </span>
                                    {{ $obekt->opalenyaName }} </li>
                            @endif

                            @if( $category ->slug  == 'flat' )
                                <li class="product-filter__item">
                                    <span class="text-secondary">Поверх:</span>
                                    {{ $obekt->level }} / {{ $obekt->count_level }}
                                </li>
                            @elseif( $category ->slug  == 'house' )
                                <li class="product-filter__item">
                                    <span class="text-secondary">Поверхів:</span>
                                    {{ $obekt->count_level }}
                                </li>
                                    <li class="product-filter__item">
                                    <span class="text-secondary">Заг.площа ділянки:</span>
                                    {{ $obekt->square_hause_land }} соток
                                </li>
                            @else

                            @endif
                            <li class="product-filter__item">
                                @if( $category ->slug  == 'flat' or $category ->slug  == 'house')

                                    <span class="text-secondary">Тип: </span>
                                @else
                                    <span class="text-secondary">Призначення: </span>
                                @endif
                                <br>
                                {{$appointment->name}}
                            </li>

                            <li class="product-filter__item">
                                <span class="text-secondary"> Тип стін: </span>
                                {{ $obekt->typeWall }}
                            </li>

                            <li class="product-filter__item">
                                <span class="text-secondary">Площа: </span>
                                {{ $obekt->square }} m2
                            </li>

                            <li class="product-filter__item">
                                <span class="text-secondary">Розташування: </span>
                                {{ $dataLocation[0] }},
                                {{ $obekt->rayon_name }},
                                {{ $obekt->city_name }}
                                @if(Auth::user())
                                    <br>
                                    <span class="text-secondary">Вулиця: </span>
                                    {{ $dataLocation[4] }} <br>
                                    <span class="text-secondary">Нотатка:</span> {{ $dataLocation[5] }}
                                @endif
                            </li>
                            <li>
                                <span
                                    class="text-secondary">Дата публікації: </span>{{ $obekt->created_at->format('Y-m-d') }}
                            </li>
                        </ul>
                        <div class="product__info--rieltor">
                            <h4 class="rieltor__title"> {{ $rieltor->name }}</h4>
                            <a href="tel: {{ $rieltor->phone }}" class="rieltor__number--link-namber">
                                {{ $rieltor->phone }}
                            </a>
                            <br>
                            <br>
{{--                            <p class="product__info--text">--}}
{{--                                Експерт з нерухомості допоможе знайти вам найкращий варіант!--}}
{{--                                Отримайте безкоштовну консультацію за номером телефону:--}}
{{--                                <a href="tel: {{ $rieltor->phone }}" class="rieltor__number--link-namber">--}}
{{--                                    {{ $rieltor->phone }}--}}
{{--                                </a>--}}
{{--                            </p>--}}
                            {{--                                <div class="rieltor__number">--}}
                            {{--                                    <a href="tel:+3809700010000" class="rieltor__number--link-image">--}}
                            {{--                                        <div class="phone">--}}
                            {{--                                            <img src="/custom/icons/call.svg" alt="phone rieltor" class="phone--image">--}}
                            {{--                                        </div>--}}
                            {{--                                    </a>--}}
                            {{--                                    <a href="tel: {{ $rieltor->phone }}" class="rieltor__number--link-namber">--}}
                            {{--                                       {{ $rieltor->phone }}--}}
                            {{--                                    </a>--}}
                            {{--                                </div>--}}
                        </div>
                        <div class="product__info--social">
                            {{--                                <h5>Поділіться обьектом в соціальних мережах:</h5>--}}
                            <h5 class="mr-2">Поділитися:</h5>
                            <ul class="social__list d-flex justify-content-between">
                                <a href="viber://forward?text=http://127.0.0.1:8000/obekt/{{$obekt->slug}}"
                                   class="social__item--link" target="_blank">
                                    <div class="social__item">
                                        <img src="/custom/icons/social__viber.svg" alt="social viber"
                                             class="social__item--image rounded-circle">
                                    </div>
                                </a>
                                <a href="{{ $shareButtonLink[0] }}" class="social__item--link" target="_blank">
                                    <div class="social__item">
                                        <img src="/custom/icons/social__fb.svg" alt="social facebook"
                                             class="social__item--image">
                                    </div>
                                </a>
                                <a href="{{ $shareButtonLink[1] }}" class="social__item--link" target="_blank">
                                    <div class="social__item">
                                        <img src="https://image.flaticon.com/icons/png/512/124/124021.png"
                                             alt="social twitter" class="social__item--image rounded">
                                    </div>
                                </a>
                                <a href="{{ $shareButtonLink[3] }}" class="social__item--link" target="_blank">
                                    <div class="social__item">
                                        <img
                                            src="https://pics.freeicons.io/uploads/icons/png/19979306911530099344-512.png"
                                            alt="social whatsapp" class="social__item--image rounded">
                                    </div>
                                </a>
                                <a href="{{ $shareButtonLink[2] }}" class="social__item--link" target="_blank">
                                    <div class="social__item">
                                        <img src="/custom/icons/social__telegram.svg" alt="social telegram"
                                             class="social__item--image rounded-circle">
                                    </div>
                                </a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="product__info">
                    <h4 class="product__info--title">Опис обьекта</h4>
                    <p class="product__info--subtitle">
                        {{ $obekt->description }}
                    </p>
                    <p>
                    <h4 class="rieltor__title"> {{ $rieltor->name }}</h4>
                    <a href="tel: {{ $rieltor->phone }}" class="rieltor__number--link-namber">
                        {{ $rieltor->phone }}
                    </a>
                    </p>
                </div>

{{--                <div class="button__back">--}}
{{--                    <a href="" class="back__link">--}}
{{--                        <svg class="strelka-left-4" viewBox="0 0 100 85">--}}
{{--                            <polygon--}}
{{--                                points="58.263,0.056 100,41.85 58.263,83.641 30.662,83.641 62.438,51.866 0,51.866 0,31.611 62.213,31.611 30.605,0 58.263,0.056">--}}
{{--                            </polygon>--}}
{{--                        </svg>--}}
{{--                        <div class="button__link">Повернутися до інших об'єктів</div>--}}
{{--                    </a>--}}
{{--                </div>--}}

            </div>
        </section>

        <section class="plus">
            <div class="container">
                <h3 class="plus__title title">Чому нам довіряють?</h3>
                <div class="pluses__block--flex">
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z"/>
                            </svg>
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Title</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
                                <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
                                <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
                            </svg>
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Title</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                            </svg>
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Title</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-book-half" viewBox="0 0 16 16">
                                <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                            </svg>
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Title</h4>
                        <p class="text-justify">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{--        <section class="last-addedd">--}}
        {{--            <h2>Новинки</h2>--}}
        {{--            <div class="row">--}}
        {{--                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">--}}
        {{--                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">--}}

        {{--                    <div class="text-left">--}}
        {{--                        <h5 class="mt-2"><a href="#">Title</a></h5>--}}
        {{--                        <br> level: 1--}}
        {{--                        <br> $34 000--}}
        {{--                        <br> street: Kievska 88--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">--}}
        {{--                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">--}}

        {{--                    <div class="text-left">--}}
        {{--                        <h5 class="mt-2"><a href="#">Title</a></h5>--}}
        {{--                        <br> level: 1--}}
        {{--                        <br> $34 000--}}
        {{--                        <br> street: Kievska 88--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">--}}
        {{--                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">--}}

        {{--                    <div class="text-left">--}}
        {{--                        <h5 class="mt-2"><a href="#">Title</a></h5>--}}
        {{--                        <br> level: 1--}}
        {{--                        <br> $34 000--}}
        {{--                        <br> street: Kievska 88--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">--}}
        {{--                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">--}}

        {{--                    <div class="text-left">--}}
        {{--                        <h5 class="mt-2"><a href="#">Title</a></h5>--}}
        {{--                        <br> level: 1--}}
        {{--                        <br> $34 000--}}
        {{--                        <br> street: Kievska 88--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </section>--}}

        <section class="cards__object">
            <div class="container">
                <h4 class="title">
                    Схожі обьекти
                </h4>
                <ul class="row">
                    @foreach($lastAddedObekts as $key => $item)
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
{{--                                        <li class="object__item">Район:--}}
{{--                                            @foreach($locationData as $key => $loc)--}}
{{--                                                @if($loc->id == $item->location_id)--}}
{{--                                                    @foreach($locationRayon as $key => $rayon)--}}
{{--                                                        @if($rayon->id == $loc->city_rayon_id)--}}
{{--                                                            {{$rayon->rayon_city}}--}}
{{--                                                        @endif--}}
{{--                                                    @endforeach--}}
{{--                                                @endif--}}
{{--                                            @endforeach--}}

{{--                                        </li>--}}
{{--                                        <li class="object__item">К-ть кімнат: {{ $item->count_room }}</li>--}}
{{--                                        <li class="object__item">Опалення: {{ $item->opalenyaName }}</li>--}}
{{--                                        <li class="object__item">Площа: {{ $item->square }}</li>--}}
{{--                                        <li class="object__item">Поверх: {{ $item->level }}--}}
{{--                                            /{{ $item->count_level }}</li>--}}
                                    </ul>
                                </div>
                                <div class="link-open-obekt p-1">
                                    <a href="{{ route('obekt.view', $item->slug) }}" class="btn btn--style"
                                       target="_blank">Дізнатися детальніше</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </section>

    </div>

@endsection
