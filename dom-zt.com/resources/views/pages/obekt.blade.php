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
                        <div class="button__link">Назад</div>
                    </a>
                </div>

                @foreach($obekt as $key => $item)

                    <div class="breadcrumb__block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Каталог</a></li>
                            <li class="breadcrumb-item"><a href="#">{{ $item->category_id }}</a></li>
                            <li class="breadcrumb-item active">{{ $item->name }}</li>
                        </ul>
                    </div>

                    <div class="product__main">
                        <div class="product__photo">
                            <h3 class="title__product">{{ $item->name }} (ID: {{ $item->id }})</h3>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/custom/icons/комерція.jpeg" alt="" class="slide__image">
                                    </div>
                                    <div class="swiper-slide">Slide 2</div>
                                    <div class="swiper-slide">Slide 3</div>
                                    <div class="swiper-slide">Slide 4</div>
                                    <div class="swiper-slide">Slide 5</div>
                                    <div class="swiper-slide">Slide 6</div>
                                    <div class="swiper-slide">Slide 7</div>
                                    <div class="swiper-slide">Slide 8</div>
                                    <div class="swiper-slide">Slide 9</div>
                                    <div class="swiper-slide">Slide 10</div>
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                        <div class="product__info">
                            <p class="product__info--prace">Ціна: {{ $item->price }}$</p>
                            <ul class="product-filter__list">
                                <li class="product-filter__item">К-ть кімнат: {{ $item->count_room }}</li>
                                <li class="product-filter__item">Поверх: {{ $item->level }} / {{ $item->count_level }}</li>
                                <li class="product-filter__item">Площа:  {{ $item->square }} m2</li>
                                <li class="product-filter__item">Опалення:
                                    @if($item->isOpalenya == 1)
                                        {{ $item->opalenyaName }}
                                    @else
                                        -
                                    @endif

                                </li>
                                <li class="product-filter__item">Вулиця:
                                    LocationID {{ $item->location_id }}
                                </li>
                            </ul>
                            <div class="product__info--rieltor">
                                <h4 class="rieltor__title">Наталя Мелай RieltorID {{ $item->rieltor_id }}</h4>
                                <p class="product__info--text">
                                    Експерт з нерухомості допоможе знайти вам найкращий варіант з нашої
                                    бази нерухомості обєктів!
                                    Отримайте безкоштовну консультацію за номером телефону:
                                </p>
                                <div class="rieltor__number">
                                    <a href="tel:+3809700010000" class="rieltor__number--link-image">
                                        <div class="phone">
                                            <img src="/custom/icons/call.svg" alt="phone rieltor" class="phone--image">
                                        </div>
                                    </a>
                                    <a href="tel:+3809700010000" class="rieltor__number--link-namber">+3809700010000
                                    </a>
                                </div>
                            </div>
                            <div class="product__info--social">
                                <h5>Поділіться обьектом в соціальних мережах:</h5>
                                <ul class="social__list">
                                    <a href="" class="social__item--link">
                                        <div class="social__item">
                                            <img src="/custom/icons/social__viber.svg" alt="social viber" class="social__item--image">
                                        </div>
                                    </a>
                                    <a href="" class="social__item--link">
                                        <div class="social__item">
                                            <img src="/custom/icons/social__fb.svg" alt="social facebook" class="social__item--image">
                                        </div>
                                    </a>
                                    <a href="" class="social__item--link">
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
                            {{ $item->description }}
                        </p>
                    </div>

                @endforeach
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
                <h3 class="plus__title">Чому нам довіряють?</h3>
                <div class="pluses__block--flex">
                    <div class="pluses__block">
                        <div class="plus__block-title">
                            <div class="plus__img">
                                <img src="/custom/icons/free-icon-layers.svg" alt="" class="plus__image">
                            </div>
                            <h4 class="plus__subtitle">Досвід</h4>
                        </div>
                        <p class="plus__text">
                            За роки діяльності в сфері нерухомості ми отримали унікальний досвід роботи будь-якої складності,
                            що дає нам можливість задовольнити потреби найвибагливішого клієнта!
                        </p>
                    </div>
                    <div class="pluses__block">
                        <div class="plus__block-title">
                            <div class="plus__img">
                                <img src="/custom/icons/free-icon-layers.svg" alt="" class="plus__image">
                            </div>
                            <h4 class="plus__subtitle">Ексклюзивні об'єкти</h4>
                        </div>
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
                            <h4 class="plus__subtitle">Швидкість</h4>
                        </div>
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
                            <h4 class="plus__subtitle">Репутація</h4>
                        </div>
                        <p class="plus__text">
                            Подяки від клієнтів та очолення Житомирського регіонального відділення Асоціації фахівців з
                            нерухомості України - підтверджують нашу бездоганну репутацію.
                        </p>
                    </div>

                </div>
            </div>
        </section>

    </div>




@endsection
