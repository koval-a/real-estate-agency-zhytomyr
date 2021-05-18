@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>{{ $category->name }}</h1>

        <hr>

        <div class="filter">
            <form action="" method="GET" class="d-flex justify-content-between">
                @csrf
                <div class="parameters">
                    <select class="form-control">
                        <option value="1">1</option>
                        <option value="1">1</option>
                    </select>
                </div>
                <div class="btn-set-filter">
                    <button type="submit" class="btn btn-primary">Застосувати</button>
                </div>
            </form>
        </div>

        <hr>

        <div class="row">
            @foreach($obekts as $key => $item)

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
                                    @foreach($location as $key => $loc)
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

                {{--                <span class={{ $item->isPay?'text-success':'text-warning' }}>--}}
                {{--                        {{ $item->isPay?'Продано':'В продажу' }}--}}
                {{--                        </span>--}}

            @endforeach
        </div>

    </div>
@endsection
