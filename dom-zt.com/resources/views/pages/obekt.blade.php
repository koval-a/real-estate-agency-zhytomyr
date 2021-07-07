@extends('layouts.app')

@section('content')

    <div class="container">

        <section class="product">
            <div class="container ">
                <div class="button__back row align-items-center">
                    <a href="" class="back__link">
                        <svg class="strelka-left-4" viewBox="0 0 100 85">
                            <polygon
                                points="58.263,0.056 100,41.85 58.263,83.641 30.662,83.641 62.438,51.866 0,51.866 0,31.611 62.213,31.611 30.605,0 58.263,0.056">
                            </polygon>
                        </svg>
                        <div class="button__link">
                            <a href="{{ route('category.view', $category->slug) }}">Назад до об'єктів</a>
                        </div>
                    </a>
                </div>

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
                    <div class="product__info shadow rounded border-light">
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
                                {{ $dataLocation[0] ?? ''}},
                                {{ $obekt->rayon_name }},
                                {{ $obekt->city_name }}
                            </li>
                            <li class="product-filter__item">
                                    <span class="text-secondary">Дата публікації: </span>{{ $obekt->created_at->format('Y-m-d') }}
                            </li>
                            <li class="product-filter__item">
                                <span class="text-secondary">Код об'єкта: </span>{{ $obekt->id }}
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

                        <div class="note">
                            <span>Нотатка</span>
                            @if(Auth::user())
                                {{ $dataLocation[5] ?? ''}}
                            @endif
                            <div class="bg-warning shadow rounded p-2 m-1">
                                {{ $obekt->note }}
                            </div>
                            <span>Адреса</span>
                            <div class="bg-warning shadow rounded p-2 m-1">
                                {{ $obekt->address }}
                            </div>
                        </div>

                        {{--                        <div class="product__info--social">--}}
                        {{--                            --}}{{--                                <h5>Поділіться обьектом в соціальних мережах:</h5>--}}
                        {{--                            <h5 class="mr-2">Поділитися:</h5>--}}
                        {{--                            <ul class="social__list d-flex justify-content-between">--}}
                        {{--                                <a href="viber://forward?text=http://127.0.0.1:8000/obekt/{{$obekt->slug}}"--}}
                        {{--                                   class="social__item--link" target="_blank">--}}
                        {{--                                    <div class="social__item">--}}
                        {{--                                        <img src="/custom/icons/social__viber.svg" alt="social viber"--}}
                        {{--                                             class="social__item--image rounded-circle">--}}
                        {{--                                    </div>--}}
                        {{--                                </a>--}}
                        {{--                                <a href="{{ $shareButtonLink[0] }}" class="social__item--link" target="_blank">--}}
                        {{--                                    <div class="social__item">--}}
                        {{--                                        <img src="/custom/icons/social__fb.svg" alt="social facebook"--}}
                        {{--                                             class="social__item--image">--}}
                        {{--                                    </div>--}}
                        {{--                                </a>--}}
                        {{--                                <a href="{{ $shareButtonLink[1] }}" class="social__item--link" target="_blank">--}}
                        {{--                                    <div class="social__item">--}}
                        {{--                                        <img src="https://image.flaticon.com/icons/png/512/124/124021.png"--}}
                        {{--                                             alt="social twitter" class="social__item--image rounded">--}}
                        {{--                                    </div>--}}
                        {{--                                </a>--}}
                        {{--                                <a href="{{ $shareButtonLink[3] }}" class="social__item--link" target="_blank">--}}
                        {{--                                    <div class="social__item">--}}
                        {{--                                        <img--}}
                        {{--                                            src="https://pics.freeicons.io/uploads/icons/png/19979306911530099344-512.png"--}}
                        {{--                                            alt="social whatsapp" class="social__item--image rounded">--}}
                        {{--                                    </div>--}}
                        {{--                                </a>--}}
                        {{--                                <a href="{{ $shareButtonLink[2] }}" class="social__item--link" target="_blank">--}}
                        {{--                                    <div class="social__item">--}}
                        {{--                                        <img src="/custom/icons/social__telegram.svg" alt="social telegram"--}}
                        {{--                                             class="social__item--image rounded-circle">--}}
                        {{--                                    </div>--}}
                        {{--                                </a>--}}
                        {{--                            </ul>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
                <div class="product__info shadow rounded border-light">
                    <h4 class="product__info--title">Опис об'єкта</h4>
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
                            <img src="/files/images/safetly/security.svg" alt="security-image" class="img-fluid">
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Безпека</h4>
                        <p class="text-justify">
                            Гарантуємо надійний юридичний супровід при купівлі-продажу нерухомості.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <img src="/files/images/safetly/experience.svg" alt="security-image" class="img-fluid">
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Досвід</h4>
                        <p class="text-justify">
                            З вашою нерухомістю працють кваліфіковані експерти з нерухомості, які мають великий досвід
                            роботи з нерухомістю.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <img src="/files/images/safetly/quality.svg" alt="security-image" class="img-fluid">
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Прозорість</h4>
                        <p class="text-justify">
                            Надаємо всю необхідну клієнту інформацію за будь-якому етапі співпраці.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <img src="/files/images/safetly/honesty.svg" alt="security-image" class="img-fluid">
                        </div>
                        <h4 class="text-danger text-uppercase display-5">Якість</h4>
                        <p class="text-justify">
                            Ми працюємо виключно в інтересах клієнта, що підтверджують сотні позитивних відгуків від
                            наших клієнтів.
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
                    Схожі об'єкти
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
