@extends('layouts.app')

@section('content')

        <div class="container-fluid">

            <section class="section__hero">
                <div class="container">
                    <div class="hero__row">
                        @foreach($category as $key => $item)
                            <div class="hero__block">
                                <a href="{{ route('category.view', $item->slug) }}" class="hero__link">
                                    <div class="hero__image">
                                        <img src="/custom/icons/{{$item->slug}}.jpeg" alt="" class="hero__img w-100 img-fluid">
                                        <div class="object__text">{{$item->name}}</div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                </div>
            </section>
            <section class="company">
                <div class="container">
                    <div class="company__block">
                        <div class="company__block-flex company__block-left">
                            <div class="company__image">
                                <img src="/custom/icons/annie-nyle-r1suqz8GIN0-unsplash.jpeg" alt="" class="company__img">
                            </div>
                        </div>
                        <div class="company__block-flex company__block-right">
                            <h1 class="company__title title">Агенство нерухомості Житомир</h1>
                            <p class="company__info">
                                Компанія "Агенство нерухомості "Житомир" працює в місті Житомирі з 2017 року.
                            </p>
                            <p class="company__info">Агенство надає всі види послуг в сфері нерухомості. Нас знають як надійних
                                партнерів та
                                професіоналів.</p>
                            <p class="company__info">Наша професійна команда з високим почуттям відповідальносі підбере для Вас
                                квадратні метри
                                нерухомості та допоможуть вийти на новий рівень життя здійснивши Вашу мрію про ідеальний простір!
                            </p>
                            <p class="company__info">Експерти агенства можуть задовольнити потреби найвимогливіших клієнтів,
                                гарантуючи конфіденційність, безпеку, зручність проведення операцій з нерухомістю!</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services" class="company__services">
                <div class="container">
                    <div class="company__block">
                        <div class="company__block-flex company__block-left company__block-left--services">
                            <h2 class="company__title title">Наші послуги</h2>
                            <p class="company__info">
                                Компанія "Агенство нерухомості "Житомир" працює в місті Житомирі з 2017 року.
                            </p>
                            <p class="company__info">Агенство надає всі види послуг в сфері нерухомості. Нас знають як надійних
                                партнерів та
                                професіоналів.</p>
                            <p class="company__info">Наша професійна команда з високим почуттям відповідальносі підбере для Вас
                                квадратні метри
                                нерухомості та допоможуть вийти на новий рівень життя здійснивши Вашу мрію про ідеальний простір!
                            </p>
                            <p class="company__info">Експерти агенства можуть задовольнити потреби найвимогливіших клієнтів,
                                гарантуючи конфіденційність, безпеку, зручність проведення операцій з нерухомістю!</p>
                        </div>
                        <div class="company__block-flex company__block-right">
                            <div class="company__image">
                                <img src="/custom/icons/joel-filipe-RFDP7_80v5A-unsplash.jpeg" alt="" class="company__img">
                            </div>
                        </div>
                    </div>
            </section>
            <section class="company__cooperation">
                <div class="container">
                    <div class="company__block">
                        <div class="company__block-flex company__block-left">

                            <div class="company__image company__image--cooperation">
                                <img src="/custom/icons/company.png" alt="" class="company__img company__img--cooperation">
                            </div>
                        </div>
                        <div class="company__block-flex company__block-right">
                            <h3 class="company__title company__title--cooperation title">Переваги співпраці</h3>

                            <p class="company__info">
                                Компанія "Агенство нерухомості "Житомир" працює в місті Житомирі з 2017 року.
                            </p>
                            <p class="company__info">Агенство надає всі види послуг в сфері нерухомості. Нас знають як надійних
                                партнерів та
                                професіоналів.</p>
                            <p class="company__info">Наша професійна команда з високим почуттям відповідальносі підбере для Вас
                                квадратні метри
                                нерухомості та допоможуть вийти на новий рівень життя здійснивши Вашу мрію про ідеальний простір!
                            </p>
                            <p class="company__info">Експерти агенства можуть задовольнити потреби найвимогливіших клієнтів,
                                гарантуючи конфіденційність, безпеку, зручність проведення операцій з нерухомістю!</p>
                        </div>
                    </div>
                </div>
                <section id="reviews" class="h-100 p-2 bg-warning mt-2 text-center align-items-center d-flex justify-content-center" style="min-height: 400px">
                        <code class="display-1">Google Reviews <br>integration by API</code>
                </section>
            </section>

        </div>

@endsection
