@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">

        <div class="container-fluid">
            <a href="{{ route('admin.clients') }}" class="btn btn-primary mb-4">Назад</a>
            <div class="info-header">
                <h1>Видалення власника <span class="text-danger">{{ $owner->name }}</span></h1>
            </div>
            <hr>

            <div class="col-md-8 m-auto">
                <form action="{{ route('admin.clients.delete', $owner->id) }}" method="POST">
                    @csrf
                    <div class="confirm">
                        <div class="text-information">
                            <div class="info-data p-3">
                                <h2 class="display-4 text-danger"> <i class="bi bi-info-circle-fill"></i> Зверніть увагу!</h2>
                            </div>
                            <p>
                                При видаленні власника, автоматично видаляться всі об'єкти нерухомості, що з ним пов'язані.
                            </p>
                            <p>
                                Об'єкт (об'єкти) нерухомості власника які будуть видалені:
                            </p>
                        </div>
                        <hr>
                        <div class="obekts-list">
                            @foreach($obekts as $key => $item)
                                <div class="d-flex justify-content-between p-2 border border-danger rounded m-1">
                                    <span class="col-md-1 p-2">ID: {{ $item->id }}</span>
                                    <span class="col-md-3 p-2">{{ $item->name }}</span>
                                    <span class="col-md-2 p-2">
                                        #
                                        @foreach($data[0] as $category)
                                            @if($category->id == $item->category_id)
                                                {{ $category->name }}
                                            @endif
                                        @endforeach
                                    </span>
                                    <span class="col-md-2 p-2">$ {{ $item->price }}</span>
                                    <div class="col-md-4 d-flex">
                                        <span class="p-2">
                                            @foreach($data[1] as $rayon)
                                                @if($rayon->id == $item->location_rayon_id)
                                                    {{ $rayon->rayon }}
                                                @endif
                                            @endforeach
                                        </span>
                                        <span class="p-2">
                                            @foreach($data[2] as $city)
                                                @if($city->id == $item->location_city_id)
                                                    {{ $city->city }}
                                                @endif
                                            @endforeach
                                        </span>
                                        <span class="p-2">
                                            @foreach($data[3] as $rayon_city)
                                                @if($rayon_city->id == $item->location_rayon_city_id)
                                                    {{ $rayon_city->rayon_city }}
                                                @endif
                                            @endforeach
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="confirm" name="confirm">
                            <label class="form-check-label" for="flexCheckChecked">
                                Я прочитав попередження, так згоден на видалення <span class="text-danger">{{ $owner->name }}</span>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="btn-update">
                        <button type="submit" class="btn btn-danger">Видалити</button>
                        <a href="{{ route('admin.clients') }}" class="btn btn-secondary">Відмінити</a>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
