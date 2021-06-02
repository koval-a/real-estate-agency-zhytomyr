@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>{{$category[1]}}</h1>
        <hr>
        <a href="{{ route('admin.obekt.new', $category[0]) }}" class="btn btn-success">Додати новий об'єкт</a>
        <hr>
         @if($obekts->count() > 0)
            <div class="all-obekt">

                <table class="table table-striped">
                    <thead class="table-dark">
                    <tr class="bg-secondary text-white">
                        <td>
                            #
                        </td>
                        <td>
                            Власник
                        </td>
                        <td>
                            Назва
                        </td>
                        {{--                    <td>--}}
                        {{--                        Дата--}}
                        {{--                    </td>--}}
                        <td>
                            ID
                        </td>
                        <td>
                            Тип об'єкту
                        </td>
                        <td>
                            Ціна ($)
                        </td>
                        <td>
                            Площа (m2)
                        </td>
                        <td>
                            Опис
                        </td>
                        <td>
                            Видимість
                        </td>
                        <td>
                            Статус
                        </td>
                        <td>
                            Дія
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($obekts as $key => $item)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                @foreach($owners as $key => $owner)
                                    @if( $item->owner_id == $owner->id)
                                        {{ $owner->name }}
                                        <br>
                                        tel.:{{ $owner->phone }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('obekt.view', $item->slug) }}" target="_blank">{{ $item->name }}</a>
                            </td>
                            {{--                        <td>--}}
                            {{--                            {{ $item->created_at->format('Y-m-d') }}--}}
                            {{--                        </td>--}}
                            <td>
                                ID: # {{ $item->id }}
                            </td>
                            <td>
                                @foreach($appointment as $key => $appoint)
                                    @if($appoint->id ==  $item->appointment_id)
                                        <span class="text-danger">{{ $appoint->type }}</span>&#128073;
                                        {{ $appoint->name }}
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                {{ $item->price }}
                            </td>
                            <td>
                                {{ $item->square }}
                            </td>
                            <td>
                                {{ $item->description }}
                                <div class="d-flex">

                                    @foreach($filesImages as $key => $image)
                                        @if($item->id == $image->obekt_id)
                                            <a data-fancybox="gallery" href="/{{ $image->url_img }}">
                                                <img src="/{{ $image->url_img }}" alt="picture-{{ $image->id }}" height="50" class="m-1">
                                            </a>
                                        @endif
                                    @endforeach
                                </div>
                            </td>
                            <td>
                                <span class={{ $item->isPublic?'text-success':'text-sexondary' }}>
                                    {{ $item->isPublic?'Опубліковано':'Приховано' }}
                                </span>
                                @if($item->isPublic)
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-outline-secondary">
                                        Прииховати
                                    </a>
                                @else
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-outline-success">
                                        Опублікувати
                                    </a>
                                @endif
                            </td>
                            <td>
                                <span class={{ $item->isPay?'text-success':'text-warning' }}>
                                {{ $item->isPay?'Продано':'В продажу' }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex p-2">

                                    <a href="#" class="btn btn-danger"><i class="fab fa-trash"></i> Видалити</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <hr>
            {{ $obekts->links() }}
            <hr>
        <table class="table">
            <thead>
            <tr class="bg-secondary text-white">
                <td>
                    #
                </td>
                <td>
                    Дата
                </td>
                <td>
                    Назва
                </td>
                {{--                    <td>--}}
                {{--                       Тип об'єкту--}}
                {{--                    </td>--}}
                <td>
                    Ціна ($)
                </td>
                <td>
                    Площа (m2)
                </td>
                <td>
                    Опис
                </td>
                <td>
                    Public
                </td>
                <td>
                    isPay
                </td>
                <td>
                    Дія
                </td>
            </tr>
            </thead>
            <tbody>
            @foreach($obekts as $key => $item)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $item->created_at->format('Y-m-d') }}
                    </td>
                    <td>
                        <a href="{{ route('obekt.view', $item->slug) }}" target="_blank">{{ $item->name }}</a>
                    </td>
                    {{--                        <td>--}}
                    {{--                            {{ $item->type_house }}--}}
                    {{--                        </td>--}}
                    <td>
                        {{ $item->price }}
                    </td>
                    <td>
                        {{ $item->square }}
                    </td>
                    <td>
                        {{ $item->description }}
                        <div class="d-flex">
                            @foreach($filesImages as $key => $image)
                                @if($item->id == $image->obekt_id)
                                    <a data-fancybox="gallery" href="/{{ $image->url_img }}">
                                        <img src="/{{ $image->url_img }}" alt="picture-{{ $image->id }}" height="50" class="m-1">
                                    </a>
                                @endif
                            @endforeach
                        </div>
                    </td>
                    <td>
                        @if($item->isPublic)
                            <span class="text-success">
                                Опубліковано
                            </span>
                            <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-outline-secondary">
                                Прииховати
                            </a>
                        @else
                            <span class="text-secondary">
                                Приховано
                            </span>
                            <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-outline-success">
                                Опублікувати
                            </a>
                        @endif
                    </td>
                    <td>
                        <span class={{ $item->isPay?'text-success':'text-warning' }}>
                        {{ $item->isPay?'Продано':'В продажу' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.obekt.delete', $item) }}" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
            <hr>
            {{ $obekts->links() }}
            <hr>
         @else
            <span class="p-3">Записів немає.</span>
        @endif
    </div>
@endsection
