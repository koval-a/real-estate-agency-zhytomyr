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

                    <div class="breadcrumb__block">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Каталог</a></li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    {{ $category ->name }}
                                </a>
                            </li>
                            <li class="breadcrumb-item active">{{ $obekt->name }}</li>
                        </ul>
                    </div>

                    <div class="product__main">
                        <div class="product__photo">
                            <h3 class="title__product">{{ $obekt->name }} (ID: {{ $obekt->id }})</h3>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/custom/icons/комерція.jpeg" alt="image" class="slide__image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img alt="image" class="slide__image" src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/custom/icons/комерція.jpeg" alt="image" class="slide__image">
                                    </div>
                                    <div class="swiper-slide">
                                        <img alt="image" class="slide__image" src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/custom/icons/комерція.jpeg" alt="image" class="slide__image">
                                    </div>
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
                                <li class="product-filter__item">К-ть кімнат: {{ $obekt->count_room }}</li>
                                <li class="product-filter__item">Поверх: {{ $obekt->level }} / {{ $obekt->count_level }}</li>
                                <li class="product-filter__item">Площа:  {{ $obekt->square }} m2</li>
                                <li class="product-filter__item">Опалення:
                                    @if($obekt->isOpalenya == 1)
                                        {{ $obekt->opalenyaName }}
                                    @else
                                        -
                                    @endif

                                </li>
                                <li class="product-filter__item">Вулиця:
{{--                                    LocationID {{ $obekt->location_id }}--}}
                                    {{ $dataLocation[4] }} <br>
                                    ({{ $dataLocation[3] }}) <br>
                                    note: {{ $dataLocation[5] }} <br>
                                    {{ $dataLocation[0] }},
                                    {{ $dataLocation[1] }},
                                    {{ $dataLocation[2] }}
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
                                    <a href="tel: {{ $rieltor->phone }}" class="rieltor__number--link-namber">
                                       {{ $rieltor->phone }}
                                    </a>
                                </div>
                            </div>
                            <div class="product__info--social">
                                <h5>Поділіться обьектом в соціальних мережах:</h5>
                                <a href="https://www.facebook.com/sharer/sharer.php?u=google.com&display=popup"> Подіитись </a>
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
                            {{ $obekt->description }}
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
                <h3 class="plus__title">Чому нам довіряють?</h3>
                <div class="pluses__block--flex">
                    <div class="pluses__block">
                        <div class="plus__block-title">
                            <div class="plus__img">
                                <img src="/custom/icons/free-icon-layers.svg" alt="" class="plus__image">
                            </div>

                        </div>
                        <h4 class="plus__subtitle">Досвід</h4>
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

                        </div>
                        <h4 class="plus__subtitle">Ексклюзивні об'єкти</h4>
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

        <section class="last-addedd">
            <h2>Новинки</h2>
            <div class="row">
                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">
                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">

                    <div class="text-left">
                        <h5 class="mt-2"><a href="#">Title</a></h5>
                        <br> level: 1
                        <br> $34 000
                        <br> street: Kievska 88
                    </div>
                </div>
                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">
                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">

                    <div class="text-left">
                        <h5 class="mt-2"><a href="#">Title</a></h5>
                        <br> level: 1
                        <br> $34 000
                        <br> street: Kievska 88
                    </div>
                </div>
                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">
                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">

                    <div class="text-left">
                        <h5 class="mt-2"><a href="#">Title</a></h5>
                        <br> level: 1
                        <br> $34 000
                        <br> street: Kievska 88
                    </div>
                </div>
                <div class="col-md-3 text-center bg-light1 shadow p-2 shadow m-auto">
                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="blog-image" class="rounded shadow m-auto" width="200px">

                    <div class="text-left">
                        <h5 class="mt-2"><a href="#">Title</a></h5>
                        <br> level: 1
                        <br> $34 000
                        <br> street: Kievska 88
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
