@extends('layouts.app')

@section('content')
<div class="container">
    <section class="agensy">
        <div class="container">
            <div class="agensy__block">
                <div class="agensy__text">
                    <h5 class="agensy__subtitle">Про компанію</h5>
                    <h2 class="agensy__title">"Агенство нерухомості Житомир"</h2>
                    <p class="agensy__about">
                        {{ Config::get('adminsettings.about_text')}}
                        <hr>
                        Агентство нерухомості "Житомир" – сучасна та активна компанія. Ми успішно
                        працюємо та розвиваємось на ринку нерухомості в місті займаючи лідерські позиції продажів та
                        отримуючи позитивні відгуки задоволених клієнтів.

                        Агентство нерухомості "Житомир" надає професійні послуги в сфері нерухомості.

                        Компанія є членом Асоціації фахівців з нерухомості України.
                    </p>
                </div>
                <div class="agensy__img">
                    <img src="/custom/icons/company.png" alt="" class="agensy__image">
                </div>
            </div>
        </div>

    </section>



    <section class="team">
        <div class="container">
            <h4 class="team__title title">Наша команда</h4>
            <div class="team__block row m-auto">
                @foreach($rieltors as $key => $rieltor)

                <div class="team__person m-auto col-md-3 p-1">
                    <div class="team__person-img">
                        <img src="/files/images/users/{{ $rieltor->avatar }}" alt="photo rieltor"
                             class="team__person-image">
                    </div>
                    <div class="team__person--info">
                        <h4 class="team__person__title">  {{ $rieltor->name }} </h4>
                        <h5 class="team__person__subtitle">Експерт з нерухомості</h5>
                        <p>
                            {{ $rieltor->email }}
                        </p>
                        <a class="team__person__link" href="tel:{{ $rieltor->phone }}">
                            {{ $rieltor->phone }}
                        </a>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <section class="awards">
        <div class="container">
            <h4 class="awards__title title">Наші нагороди</h4>

        </div>
    </section>

    <section class="partners">
        <div class="container">
            <h4 class="partners__title">Наші партнери</h4>

        </div>

    </section>
</div>
@endsection
