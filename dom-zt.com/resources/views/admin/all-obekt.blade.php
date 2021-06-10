@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <h1>Всі об'єкти нерухомості</h1>
        <hr>
        <div class="row">
            <div class="col-md-2">
                <button onclick="window.print()" class="btn btn-light">Друк</button>
            </div>
            <div class="search-bar col-md-6">

                <form action="{{ route('admin.search') }}" method="POST" role="search">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" name="q"
                               placeholder="Пошук за ID об'єкта">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-danger">
                                Пошук
                            </button>
                        </span>
                    </div>
                </form>

            </div>

            <div class="link-all-obekt col-md-4">
                <a href="{{ route('admin.allView') }}" class="btn btn-primary">Очистити</a>
            </div>
        </div>
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
                    <td>
                        Тип об'єкту
                    </td>
                    <td>
                        Ціна ($)
                    </td>
                    <td>
                        Площа (m2)
                    </td>
{{--                    <td>--}}
{{--                        Опис та --}}
{{--                        Фото--}}
{{--                    </td>--}}
                    <td>
                        Видимість
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
                            @if($item->isPay)
                                <span class="bg-success text-light p-2 m-2 rounded">
                                            Продано
                                        </span>
                            @else
                                <span class="bg-warning text-light p-2 m-2 rounded">
                                            В продажу
                                        </span>
                            @endif
                            <div class="d-flex1 p-2">
                                ID: # {{ $item->id }}<br>
                                <a href="{{ route('obekt.view', $item->slug) }}" target="_blank">{{ $item->name }}</a>
                            </div>

                        </td>
                        {{--                        <td>--}}
                        {{--                            {{ $item->created_at->format('Y-m-d') }}--}}
                        {{--                        </td>--}}
                        <td>
                            @foreach($appointment as $key => $appoint)
                                @if($appoint->id ==  $item->appointment_id)
{{--                                    <span class="text-danger">{{ $appoint->type }}</span>&#128073; <br>--}}
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
{{--                        <td>--}}
{{--                            {{ $item->description }}--}}
{{--                            <div class="d-flex">--}}

{{--                                @foreach($filesImages as $key => $image)--}}
{{--                                    @if($item->id == $image->obekt_id)--}}
{{--                                        <a data-fancybox="gallery" href="{{ $image->url_img }}">--}}
{{--                                            <img src="{{ $image->url_img }}" alt="picture-{{ $image->id }}" height="50" class="m-1">--}}
{{--                                        </a>--}}
{{--                                    @else--}}
{{--                                        <span>Немає фото.</span>--}}
{{--                                        @break--}}
{{--                                    @endif--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </td>--}}
                        <td>
                            <span class={{ $item->isPublic?'text-success':'text-sexondary' }}>
                                <i class="bi bi-{{ $item->isPublic?'eye':'eye-slash' }}"></i>
                            </span>
                        </td>
                        <td>
                            <div class="d-flex p-2">
                                @if($item->isPublic)
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-secondary">
                                        <i class="bi bi-eye-slash"></i>
                                    </a>
                                @else
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-success">
                                       <i class="bi bi-eye"></i>
                                    </a>
                                @endif
                                <a href="#" class="btn btn-primary"><i class="bi bi-pencil"></i></a>
                                <a href="{{ route('admin.obekt.delete', $item) }}" class="btn btn-danger p-1"><i class="bi bi-trash"></i></a>
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
        @else
            <span class="p-3">Записів немає.</span>
        @endif
    </div>

@endsection
