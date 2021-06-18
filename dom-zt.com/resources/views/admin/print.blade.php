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

        <div class="container row">
            @foreach($obekts as $key => $item)

                <div class="d-flex justify-content-between border m-2 p-3">
                    <div class="image col-md-2">
                        <img src="{{$item->main_img}}" alt="obekt-image" class="img-fluid rounded">
                    </div>
                    <div class="first col-md-4">
                        <div class="header-information">
                            <span>ID:{{ $item->id }}</span>
                            <br>
                            <span class="text-secondary">Дата: {{ $item->created_at->format('Y-m-d') }}</span>
                        </div>

                        <div class="status">
                            @if($item->isPublic)
                                @if($item->isPay)
                                    <span class="bg-danger text-light rounded p-1">
                                            Продано
                                        </span>
                                @else
                                    <span class="bg-success text-light rounded p-1">
                                            В продажу
                                        </span>
                                @endif
                            @else
                                <span class="text-secondary">Не опубліковано</span>
                            @endif
                        </div>

                        <h3>{{ $item->name }}</h3>

                        <div class="d-flex justify-content-between">
                            <span>Ціна: $ <i class="text-danger">{{ $item->price }}</i></span>
                            <br>
                            <span>Площа: {{ $item->square }} m2</span>
                        </div>

                        <span>Тип: </span>
                        @foreach($appointment as $key => $appoint)
                            @if($appoint->id ==  $item->appointment_id)
                                {{ $appoint->name }}
                            @endif
                        @endforeach

                    </div>

                    <div class="mid col-md-6">

                        <div class="location-info">
                            <span>Розміщення: </span>
                            <div class="location">
                                @if($item->rayon_name != 'м.Житомир')
                                    <span>р-н </span>
                                @endif
                                {{ $item->rayon_name }}
                                @if($item->city_name != '-')
                                    {{ $item->city_name }}
                                @endif
                            </div>
                        </div>
                        <div class="description">
                            <span>Опис</span>
                            <p>
                                {{ $item->description }}
                            </p>
                        </div>
                        @foreach($owners as $key => $owner)
                            @if( $item->owner_id == $owner->id)
                                <div class="owner-info">
                                    <span>Власник:</span> <br>
                                    {{ $owner->name }}
                                    <br>
                                    {{ $owner->phone }}
                                </div>
                            @endif
                        @endforeach
                    </div>

                </div>

            @endforeach
        </div>
    </div>


@endsection
