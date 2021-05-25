@extends('layouts.app')

@section('content')
<div class="container">
    <section class="contacts">
        <div class="container">
            <h1 class="title mt-5">Контакти</h1>
            <span>Ріелтори</span>
            <ul class="contacts__list row">

                @foreach($rieltors as $key => $rieltor)
                    <li class="contacts__item col-md-3 p-2">
                        <div class="h4__contacts__name">
                            {{ $rieltor->name }}
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
            <span>Ми на мапі</span>
            <div class="google__mape">
                <img src="/custom/icons/google mape.png" alt="" class="google__mape-image img-fluid">
            </div>
        </div>
    </section>
</div>
@endsection
