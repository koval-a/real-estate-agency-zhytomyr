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
                    <ul class="breadcrumb pl-2 pt-2 pb-2">
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
                        <p class="product__info--prace">
                            Ціна: {{ number_format($obekt->price, 2, '.', ',') }}$
                        </p>
                        <ul class="product-filter__list p-0">

                            @if( $category->slug  != 'land')
                                @if( $category->slug != 'commercial-real-estate')
                                    <li class="product-filter__item">
                                        <span class="text-secondary"> К-ть кімнат: </span>
                                        {{ $obekt->count_room?? '' }}
                                    </li>
                                @endif

                                <li class="product-filter__item">
                                    <span class="text-secondary">Опалення:  </span>
                                    {{ $obekt->opalenyaName ?? ''}} </li>
                            @endif

                            @if( $category->slug  == 'flat' )
                                <li class="product-filter__item">
                                    <span class="text-secondary">Поверх:</span>
                                    {{ $obekt->level ?? '' }} / {{ $obekt->count_level ?? '' }}
                                </li>
                            @elseif( $category ->slug  == 'house' )
                                <li class="product-filter__item">
                                    <span class="text-secondary">Поверхів:</span>
                                    {{ $obekt->count_level ?? '' }}
                                </li>
                                <li class="product-filter__item">
                                    <span class="text-secondary">Заг.площа ділянки:</span>
                                    {{ $obekt->square_hause_land ?? '' }} соток
                                </li>
                            @else

                            @endif
                            <li class="product-filter__item">
                                @if( $category->slug  == 'flat' or $category->slug  == 'house')

                                    <span class="text-secondary">Тип: </span>
                                @else
                                    <span class="text-secondary">Призначення: </span>
                                @endif
                                {{$appointment->name ?? '' }}
                            </li>

                            <li class="product-filter__item">
                                <span class="text-secondary"> Тип стін: </span>
                                {{ $typeWall[0] ?? '' }}
                            </li>

                            <li class="product-filter__item">
                                <span class="text-secondary">Площа: </span>
                                {{ $obekt->square ?? '' }} m2
                            </li>

                            <li class="product-filter__item">
                                <span class="text-secondary">Розташування: </span> <br><br>
                                {{ $locationFull[0] ?? '' }},
                                {{ $locationFull[1] ?? '' }}
                                {{ $locationFull[2] ?? '' }}
                            </li>
                                <hr>
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
                                {{ $rieltor->phone ?? '' }}
                            </a>
                            <hr>
                        </div>
                        @if(Auth::user())
                            <div class="note">
                                <span>Нотатка</span>
                                <div class="bg-warning shadow rounded p-2 m-1">
                                    {{ $obekt->note ?? '' }}
                                </div>
                                <span>Адреса</span>
                                <div class="bg-warning shadow rounded p-2 m-1">
                                    {{ $obekt->address ?? ''}}
                                </div>
                            </div>
                        @endif

                        <div class="copy-shaere-link">
                            <!-- The text field is hidden -->
                            <input type="text" value="{{$shareButtonLink[4]}}" id="myInput" class="invisible">
                            <!-- The button used to copy the text -->
                            <button onclick="myFunction()" class="btn btn-secondary w-100 p-2">Скопіювати URL</button>
                            <script>
                                function myFunction() {
                                    /* Get the text field */
                                    var copyText = document.getElementById("myInput");

                                    /* Select the text field */
                                    copyText.select();
                                    copyText.setSelectionRange(0, 99999); /* For mobile devices */

                                    /* Copy the text inside the text field */
                                    document.execCommand("copy");

                                    /* Alert the copied text */
                                    alert("Посилання скопійовано: " + copyText.value);
                                }
                            </script>
                        </div>

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

        <section class="company-plus">
            <div class="container">
                <h3 class="plus__title title">Чому нам довіряють?</h3>
                <div class="pluses__block--flex">
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <img src="/files/images/safetly/security.svg" alt="security-image" class="img-fluid  w-50">
                        </div>
                        <h4 class="text-danger text-uppercase display-">Безпека</h4>
                        <p class="text-justify">
                            Гарантуємо надійний юридичний супровід при купівлі-продажу нерухомості.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <img src="/files/images/safetly/experience.svg" alt="security-image" class="img-fluid  w-50">
                        </div>
                        <h4 class="text-danger text-uppercase display-">Досвід</h4>
                        <p class="text-justify">
                            З вашою нерухомістю працють кваліфіковані експерти з нерухомості, які мають великий досвід
                            роботи з нерухомістю.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <img src="/files/images/safetly/quality.svg" alt="security-image" class="img-fluid w-50">
                        </div>
                        <h4 class="text-danger text-uppercase display-">Прозорість</h4>
                        <p class="text-justify">
                            Надаємо всю необхідну клієнту інформацію за будь-якому етапі співпраці.
                        </p>
                    </div>
                    <div class="pluses__block text-center">
                        <div class="p-2">
                            <img src="/files/images/safetly/honesty.svg" alt="security-image" class="img-fluid w-50">
                        </div>
                        <h4 class="text-danger text-uppercase display-">Якість</h4>
                        <p class="text-justify">
                            Ми працюємо виключно в інтересах клієнта, що підтверджують сотні позитивних відгуків від
                            наших клієнтів.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="cards__object">
            <div class="container">
                <h4 class="title">
                    Схожі об'єкти
                </h4>
                <ul class="row">
                    @foreach($lastAddedObekts as $key => $item)
                        <div class="col-md-3">
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
                                    </div>

                                </a>
                                <div class="object__text--promo p-1">
                                    <ul class="object__list">
                                        <li class="object__item object__item--title title_">
                                            {{ Str::limit($item->name, 20) }}
                                        </li>
                                        <li class="object__item object__item--prace">
                                            $ {{ number_format($item->price, 2, '.', ',') }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="link-open-obekt p-1">
                                    <a href="{{ route('obekt.view', $item->slug, $filterData[9]='Back') }}"
                                       class="btn btn--style">Детальніше</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </ul>
            </div>
        </section>

    </div>

@endsection
