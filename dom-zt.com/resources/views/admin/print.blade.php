@extends('layouts.print')

@section('content')

    <div class="d-flex p-2">
        @if(Auth::user()->is_admin == 1)
            <a href="{{ route('admin.view', $category[0]) }}" class="btn btn-primary">Назад</a>
        @else
            <a href="{{ route('rieltor.view', $category[0]) }}" class="btn btn-primary">Назад</a>
        @endif
    </div>

    <div class="information text-center p-3">
        <h3>Попередній перегляд</h3>
    </div>

    <div id="div_print" class="border border-danger p-3">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <img src="/custom/icons/logo.png" alt="logo" class="logo__img2 img-fluid" width="100">
            </div>
            <div class="date-info pt-3 text-right">
                {{ $category[1] }} <br>
                <?php echo date('d-m-Y'); ?>
            </div>
        </div>
        <hr>
        <div class="container pt-2">
            @if($obekts->count() > 0)
                <div class="all-obekt">

                    <table class="table table-striped">
                        <thead class="table-dark">
                        <tr class="bg-secondary text-white">
                            <td>#</td>
                            <td>ID</td>
                            <td>Тип</td>
                            <td>Розміщення</td>
                            <td>Ціна ($)</td>
                            <td>Площа (m2)</td>
                            <td>Опис</td>
                            <td>Нотатка</td>
                            <td>Власник</td>
                            <td>Ріелтор</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($obekts as $key => $item)
                            <tr>
                                <td>
                                    {{ $key + 1 }}
                                </td>
                                <td>
                                    {{ $item->id }}
                                </td>
                                <td>
{{--                                    {{ $category[0] }}--}}
                                    @switch($category[0])
                                        @case('land')
                                        Земля
                                        @break
                                        @case('house')
                                        Будинок
                                        @break
                                        @case('flat')
                                        Квартира
                                        @break
                                        @case('commercial-real-estate')
                                        Комерційна нерухомість
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <i class="bi bi-map"></i>
                                    @foreach($locationRayon as $name)
                                        @if($name->id == $item->location_rayon_id)
                                            @if($name->rayon != 'м.Житомир')
                                                <span>р-н </span>
                                            @endif
                                            {{ $name->rayon }}
                                        @endif
                                    @endforeach
                                    <br>
                                    <i class="bi bi-map-fill"></i>
                                    @foreach($locationCity as $name)
                                        @if($name->id == $item->location_city_id)
                                            {{ $name->city }}
                                        @endif
                                    @endforeach
                                    @foreach($locationCityRayon as $name)
                                        @if($name->id == $item->location_city_rayon_id)
                                            {{ $name->rayon_city }}
                                        @endif
                                    @endforeach
                                    <br>
                                    <i class="bi bi-house"></i>
                                    {{ $item->address }}
                                </td>
                                <td>
                                    $ {{ $item->price }}
                                </td>
                                <td>
                                    {{ $item->square }} m2
                                </td>
                                <td>
                                    {{ Str::limit($item->description, 50) }}
                                </td>
                                <td>
                                    {{ $item->note }}
                                </td>
                                <td>
                                    @foreach($owners as $key => $owner)
                                        @if( $item->owner_id == $owner->id)
                                            <i class="bi bi-person"></i>{{ $owner->name }}
                                            <br>
                                            <i class="bi bi-phone"></i>{{ $owner->phone }}
                                        @endif
                                    @endforeach
                                </td>
                                <td>
                                    @foreach($rieltor as $user)
                                        @if($item->rieltor_id == $user->id)
                                            <i class="bi bi-person"></i>{{ $user->name }}
                                            <br>
                                            <i class="bi bi-phone"></i>{{ $user->phone }}
                                        @endif
                                    @endforeach
                                </td>
{{--                                <td>--}}
{{--                                    @if($item->isPublic)--}}
{{--                                        @if($item->isPay)--}}
{{--                                            <span class="bg-success text-light p-2 m-2 rounded">--}}
{{--                                           <i class="bi bi-check-circle-fill"></i>  Продано--}}
{{--                                        </span>--}}
{{--                                        @else--}}
{{--                                            <span class="bg-dark text-light p-2 m-2 rounded">--}}
{{--                                            <i class="bi bi-cart-fill"></i> В продажу--}}
{{--                                        </span>--}}
{{--                                        @endif--}}
{{--                                    @else--}}
{{--                                        <span class="text-secondary"> <i class="bi bi-info-circle-fill"></i> Не опубліковано</span>--}}
{{--                                    @endif--}}

{{--                                </td>--}}


                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                <hr>
                {{ $obekts->links() }}
                <hr>
            @else
                <span class="p-3">Записів не знайдено.</span>
            @endif
        </div>
    </div>


@endsection
