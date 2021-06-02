@extends('layouts.app')

@section('content')

    <div class="container">

        <section class="product">
            <div class="container ">
                <div class="button__back">
                    <a href="" class="back__link">
                        <svg class="strelka-left-4" viewBox="0 0 100 85">
                            <polygon
                                points="58.263,0.056 100,41.85 58.263,83.641 30.662,83.641 62.438,51.866 0,51.866 0,31.611 62.213,31.611 30.605,0 58.263,0.056">
                            </polygon>
                        </svg>
                        <div class="button__link">
                            <a href="/obekts/{{ $category ->slug }}">Назад</a>
                        </div>
                    </a>
                </div>

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
                            <li class="p-2">&#128073;</li>
                            <li class="bg-danger1 p-2 rounded mr-1"><a href="/obekts/{{ $category ->slug }}" class="text-danger">{{ $category ->name }}</a></li>
                            <li class="p-2">&#128073;</li>
                            <li class="bg-danger rounded p-2 active">
                                <a href="/obekt/{{ $obekt->slug }}" class="text-white">{{ $obekt->name }}</a>
                            </li>
                        </ul>
                    </div>

                    <div class="product__main">
                        <div class="product__photo">
                            <h3 class="title__product">{{ $obekt->name }} (ID: {{ $obekt->id }})</h3>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/files/images/obekts/{{ $category ->slug }}/{{ $obekt->slug }}/{{ $obekt->main_img }}" alt="main image" class="slide__image img-fluid w-100 h-auto">
                                    </div>
                                    @foreach($filesImages as $key => $image)
                                        @if($obekt->id == $image->obekt_id)
                                            <a data-fancybox="gallery" href="{{ $image->url_img }}">
                                                <img src="{{ $image->url_img }}" alt="picture-{{ $image->id }}" height="50" class="m-1">
                                            </a>
{{--                                            <div class="swiper-slide">--}}
{{--                                                <img src="{{ $image->url_img }}" alt="image-{{$image->id}}" class="slide__image img-fluid w-100 h-auto">--}}
{{--                                            </div>--}}
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
                                <li class="product-filter__item">
                                    <span class="text-secondary"> К-ть кімнат: </span>
                                    {{ $obekt->count_room }}</li>
                                <li class="product-filter__item">
                                    <span class="text-secondary">Поверх:</span>
                                     {{ $obekt->level }} / {{ $obekt->count_level }}</li>
                                <li class="product-filter__item">
                                    <i class="bi bi-bricks"></i>
                                    <span class="text-secondary">Площа: </span>
                                      {{ $obekt->square }} m2</li>
                                <li class="product-filter__item">
                                    <span class="text-secondary">Опалення:  </span>
                                    {{ $obekt->opalenyaName }} </li>
                                <li class="product-filter__item">
                                    <span class="text-secondary">Вулиця: </span>
{{--                                    LocationID {{ $obekt->location_id }}--}}
                                    {{ $dataLocation[4] }} <br>
                                    ({{ $dataLocation[3] }}) <br>
                                    note: {{ $dataLocation[5] }} <br>
                                    {{ $dataLocation[0] }},
                                    {{ $dataLocation[1] }},
                                    {{ $dataLocation[2] }}
                                </li>
                                <li>
                                    <span class="text-secondary">Дата публікації: </span>{{ $obekt->created_at->format('Y-m-d') }}
                                </li>
                            </ul>
                            <div class="product__info--rieltor">
                                <h4 class="rieltor__title"> {{ $rieltor->name }}</h4>
                                <a href="tel: {{ $rieltor->phone }}" class="rieltor__number--link-namber">
                                    {{ $rieltor->phone }}
                                </a>
                                <br>
                                <br>
                                <p class="product__info--text">
                                    Експерт з нерухомості допоможе знайти вам найкращий варіант!
                                    Отримайте безкоштовну консультацію за номером телефону:
                                    <a href="tel: {{ $rieltor->phone }}" class="rieltor__number--link-namber">
                                        {{ $rieltor->phone }}
                                    </a>
                                </p>
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
                                    <a href="viber://forward?text=http://127.0.0.1:8000/obekt/{{$obekt->slug}}" class="social__item--link" target="_blank">
                                        <div class="social__item">
                                            <img src="/custom/icons/social__viber.svg" alt="social viber" class="social__item--image">
                                        </div>
                                    </a>
                                    <a href="{{ $shareButtonLink[0] }}" class="social__item--link" target="_blank">
                                        <div class="social__item">
                                            <img src="/custom/icons/social__fb.svg" alt="social facebook" class="social__item--image">
                                        </div>
                                    </a>
                                    <a href="{{ $shareButtonLink[1] }}" class="social__item--link" target="_blank">
                                        <div class="social__item">
                                            <img src="https://image.flaticon.com/icons/png/512/124/124021.png" alt="social twitter" class="social__item--image rounded">
                                        </div>
                                    </a>
                                    <a href="{{ $shareButtonLink[3] }}" class="social__item--link" target="_blank">
                                        <div class="social__item">
                                            <img src="https://pics.freeicons.io/uploads/icons/png/19979306911530099344-512.png" alt="social whatsapp" class="social__item--image rounded">
                                        </div>
                                    </a>
                                    <a href="{{ $shareButtonLink[2] }}" class="social__item--link" target="_blank">
                                        <div class="social__item">
                                            <img src="/custom/icons/social__telegram.svg" alt="social telegram" class="social__item--image">
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

                <div class="button__back">
                    <a href="" class="back__link">
                        <svg class="strelka-left-4" viewBox="0 0 100 85">
                            <polygon
                                points="58.263,0.056 100,41.85 58.263,83.641 30.662,83.641 62.438,51.866 0,51.866 0,31.611 62.213,31.611 30.605,0 58.263,0.056">
                            </polygon>
                        </svg>
                        <div class="button__link">Повернутися до інших об'єктів</div>
                    </a>
                </div>

            </div>
        </section>

        <section class="plus">
            <div class="container">
                <h3 class="plus__title title">Чому нам довіряють?</h3>
                <div class="pluses__block--flex">
                    <div class="pluses__block">
                        <div class="plus__block-title">
                            <div class="plus__img m-auto">
                                <img src="/custom/icons/free-icon-layers.svg" alt="" class="plus__image">
                            </div>

                        </div>
                        <div class="plus__subtitle">
                            <h4 class="title">Досвід</h4>
                        </div>
                        <p class="plus__text">
                            За роки діяльності в сфері нерухомості ми отримали унікальний досвід роботи будь-якої складності,
                            що дає нам можливість задовольнити потреби найвибагливішого клієнта!
                        </p>
                    </div>
                    <div class="pluses__block align-center">
                        <div class="plus__block-title">
                            <div class="plus__img m-auto">
                                <img src="/custom/icons/free-icon-layers.svg" alt="" class="plus__image">
                            </div>

                        </div>
                        <h4 class="plus__subtitle text-center">Ексклюзивні об'єкти</h4>
                        <p class="plus__text">
                            Наша компанія постійно нараховує сотні ексклюзивних об'єктів
                            як в місті Житомирі так і Житомирському районі, власники яких довірили продаж тільки нам.
                        </p>
                    </div>
                    <div class="pluses__block">
                        <div class="plus__block-title">
                            <div class="plus__img">
                                <img src="/custom/icons/free-icon-layers.svg" alt="" class="plus__image">
                            </div>

                        </div>
                        <h4 class="plus__subtitle">Швидкість</h4>
                        <p class="plus__text">
                            Завдяки нашій роботі Ви зможете прискорити пошук нерухомості, покупців та швидко зареєструвати
                            угоду!
                        </p>
                    </div>
                    <div class="pluses__block">
                        <div class="plus__block-title">
                            <div class="plus__img">
                                <img src="/custom/icons/free-icon-layers.svg" alt="" class="plus__image">
                            </div>

                        </div>
                        <h4 class="plus__subtitle">Репутація</h4>
                        <p class="plus__text">
                            Подяки від клієнтів та очолення Житомирського регіонального відділення Асоціації фахівців з
                            нерухомості України - підтверджують нашу бездоганну репутацію.
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
                                        <li class="object__item">Район:
                                            @foreach($locationData as $key => $loc)
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
                                    <a href="{{ route('obekt.view', $item->slug) }}" class="btn btn--style" target="_blank">Дізнатися детальніше</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </section>

    </div>

@endsection
