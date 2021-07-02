@extends('layouts.app')

@section('content')

<div class="container">

    <section class="agensy">
        <div class="company__cooperation">
            <div class="container">
                <div class="company__block">
                    <div class="company__block-flex company__block-left">

                        <div class="company__image company__image--cooperation">
                            <img src="/custom/icons/company.png" alt="" class="company__img company__img--cooperation">
                        </div>
                    </div>
                    <div class="company__block-flex company__block-right">
                        <h3 class="title company__title--cooperation">Про нас</h3>
                        <h5>Агенство нерухомості "Житомир"</h5> працює в місті Житомирі з 2017 року.
                        <p class="company__info">
                        {{ Config::get('adminsettings.about_text')}}
                        <hr>
                            Агенство надає всі види послуг в сфері нерухомості. Нас знають як надійних
                            партнерів та
                            професіоналів.</p>
                        <p class="company__info">Наша професійна команда з високим почуттям відповідальносі підбере для Вас
                            квадратні метри
                            нерухомості та допоможуть вийти на новий рівень життя здійснивши Вашу мрію про ідеальний
                            простір!
                        </p>
                        <p class="company__info">Експерти агенства можуть задовольнити потреби найвимогливіших клієнтів,
                            гарантуючи конфіденційність, безпеку, зручність проведення операцій з нерухомістю!</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="team">
        <div class="container">
            <h4 class="title">Наша команда</h4>
            <div class="team__block">

                @foreach($rieltors as $key => $rieltor)

                    <div class="team__person">
                        <div class="team__person-img">
                            <img src="/files/images/users/{{ $rieltor->avatar }}" alt="photo rieltor"
                                 class="team__person-image img-fluid rounded shadow">
                        </div>
                        <div class="team__person--info">
                            <h4 class="team__person__title"> {{ $rieltor->name }}</h4>
                            <h5 class="team__person__subtitle">Експерт з нерухомості</h5>
                            <p class="pt-2">
                                <a class="team__person__link" href="mailto:{{ $rieltor->email }}">{{ $rieltor->email }}</a>
                                <br>
                                <a class="team__person__link" href="tel:{{ $rieltor->phone }}">
                                    {{ $rieltor->phone }}
                                </a>
                            </p>

                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
    <section class="company__direktor">
        <div class="company__block">
            <div class="company__block-flex company__block-left company__block-left--services">
                <h4 class="title">Наші цілі та стратегія</h4>
                <p class="company__info">Агенство надає всі види послуг в сфері нерухомості. Нас знають як надійних
                    партнерів та
                    професіоналів.</p>
                <p class="company__info">Наша професійна команда з високим почуттям відповідальносі підбере для Вас
                    квадратні метри
                    нерухомості та допоможуть вийти на новий рівень життя здійснивши Вашу мрію про ідеальний простір!
                </p>
                <p class="company__info company__info--footer">Наталя Мелай, керівник та засновник Агенства нерухомості
                    Житомир!</p>
            </div>
            <div class="company__block-flex company__block-right">
                <div class="company__image">
                    <img src="/custom/icons/company__info--image.jpeg" alt="Наталя Мелай" class="company__img">
                </div>
            </div>
        </div>
    </section>
    <section class="partners">
        <div class="container">
            <h4 class="title">Наші партнери</h4>

            <div class="slider-parthners row bg-white p-2 rounded shadow">
                <div class="slide col-md-3 d-flex justify-content-center align-items-center m-auto">
                    <img src="/files/images/partners/olx.png" alt="olx" class="img-fluid rounded">
                </div>
                <div class="slide col-md-3 d-flex justify-content-center align-items-center m-auto">
                    <img src="/files/images/partners/mv.png" alt="mustecki-vorota" class="img-fluid">
                </div>
                <div class="slide col-md-3 d-flex justify-content-center align-items-center m-auto">
                    <img src="/files/images/partners/ria.png" alt="dom-ria" class="img-fluid">
                </div>
                <div class="slide col-md-3 d-flex justify-content-center align-items-center m-auto">
                    <img src="/files/images/partners/gc.png" alt="grand-city" class="img-fluid rounded">
                </div>
                <div class="slide col-md-3 d-flex justify-content-center align-items-center m-auto">
                    <img src="/files/images/partners/asc.jpeg" alt="asc" class="img-fluid">
                </div>
                <div class="slide col-md-3 d-flex justify-content-center align-items-center m-auto">
                    <img src="/files/images/partners/pr.jpeg" alt="premium" class="img-fluid">
                </div>
                <div class="slide col-md-3 d-flex justify-content-center align-items-center m-auto bg-success rounded">
                    <img src="/files/images/partners/tb-logo-inverse-spac.svg" alt="tb-logo-inverse-spac" class="img-fluid">
                </div>
        </div>
    </section>

</div>

@endsection
