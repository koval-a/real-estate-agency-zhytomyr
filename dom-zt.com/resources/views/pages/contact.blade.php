@extends('layouts.app')

@section('content')
<div class="container-fluid1">
    <style>
        .filter-div, .obekts-div {
            height: 70vh;
        }
        .filters-parameters {
            height: 50vh;
        }
        .filters-parameters, .obekts-div {
            overflow: scroll;
        }
        .btn-select {
            text-align: center;
            width: 20vw;
            height: 10vh;
        }
    </style>
    <section class="obekts-by-category">
        <div class="header-obekts-by-category pl-4">
            <h1 class="title- text-danger font-bold text-uppercase display-4">Title Category</h1>
        </div>
        <div class="container-fluid d-flex justify-content-between">
            <div class="col-md-3 p-2">
                <div class="p-3 filter-div shadow rounded shadow bg-white">
                    <h3>Filters</h3>
                    <hr>
                    <div class="filters-parameters p-3">
                        filters parameters

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                        </p>
                    </div>
                    <div class="btn-select d-flex flex-column rounded bg-white">
                        <button class="p-2 btn-block bg-danger text-white rounded m-auto">Set</button>
                        <a href="#" class="p-2 text-secondary">Clear</a>
                    </div>
                </div>

            </div>
            <div class="col-md-9 p-2">
                <div class="p-3 obekts-div shadow rounded shadow bg-white-">
                    obekts

                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error ex in maiores nam neque officia quibusdam voluptas. Cum cupiditate esse hic illo iste possimus praesentium quod reiciendis sunt totam, unde?
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts">
        <div class="container">
            <h1 class="title mt-5">Контакти</h1>
            <ul class="d-flex justify-content-between footer__contacts-list">
                <li class="footer__contacts-item">
                    <a class="footer__contacts__link" href="https://goo.gl/maps/9SruKiYB3DcwT1YJ6" target="_blank">
                        {{ Config::get('adminsettings.contact.address')}}
                    </a>
                </li>
                <li class="footer__contacts-item">
                    <a class="footer__contacts__link" href="mailto:{{ Config::get('adminsettings.contact.email')}}" target="_blank">
                        {{ Config::get('adminsettings.contact.email')}}
                    </a>
                </li>
                <li class="footer__contacts-item">
                    <a class="footer__contacts__link text-danger" href="tel:{{ Config::get('adminsettings.contact.phone_1')}}">
                        {{ Config::get('adminsettings.contact.phone_1')}}
                    </a> <br> <br>
                    <a class="footer__contacts__link text-danger" href="tel:{{ Config::get('adminsettings.contact.phone_2')}}">
                        {{ Config::get('adminsettings.contact.phone_2')}}
                    </a>
                </li>

                <li class="footer__contacts-item">
                    <a class="footer__contacts__link footer__contacts__link--social__image d-flex align-items-center justify-content-left"
                       href="https://www.facebook.com/%D0%90%D0%9D-%D0%96%D0%B8%D1%82%D0%BE%D0%BC%D0%B8%D1%80-597840607255306/"
                       target="_blank">
                        <img src="/custom/icons/svg__fb.svg" alt="social image facebook" class="social__img1" width="30">
                        <span class="ml-2">Facebook</span>
                    </a>
                </li>
            </ul>
            <h5 class="title text-secondary">Ріелтори</h5>
            <ul class="contacts__list row">

                @foreach($rieltors as $key => $rieltor)
                    <li class="contacts__item col-md-3 p-2">
                        <div class="h4__contacts__name">
                            <h4>{{ $rieltor->name }}</h4>
                        </div>
                        <div class="contacts__number">
                            <a href="tel:{{ $rieltor->phone }}">
                                {{ $rieltor->phone }}
                            </a>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>

    </section>
    <section class="mape">
        <div class="container">
            <h5 class="title text-secondary">Ми на мапі</h5>
            <span> {{ Config::get('adminsettings.contact.address')}}</span>
            <iframe class="w-100 pt-5" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2551.0840543782706!2d28.6556872!3d50.2530144!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x278b654460b1fa40!2z0JDQs9C10L3RgdGC0LLQviDQvdC10YDRg9GF0L7QvNC-0YHRgtGWINCW0LjRgtC-0LzQuNGA!5e0!3m2!1sru!2sua!4v1622477891707!5m2!1sru!2sua" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
</div>
@endsection
