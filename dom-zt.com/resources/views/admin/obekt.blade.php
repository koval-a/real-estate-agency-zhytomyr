@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>{{$category[1]}}</h1>
        <hr>
        <a href="{{ route('admin.obekt.new', $category[0]) }}" class="btn btn-primary">Додати новий об'єкт</a>
        <hr>
         @if($obekts->count() > 0)
            <div class="all-obekt">

                <table class="table table-striped">
                    <thead class="table">
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
{{--                        <td>--}}
{{--                            ID--}}
{{--                        </td>--}}
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
{{--                            Опис та --}}
                            Фото
                        </td>
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
                                <div class="d-flex p-2">
                                    ID: # {{ $item->id }}
                                    <a href="{{ route('obekt.view', $item->slug) }}" target="_blank">{{ $item->name }}</a>
                                </div>
                            </td>
                            {{--                        <td>--}}
                            {{--                            {{ $item->created_at->format('Y-m-d') }}--}}
                            {{--                        </td>--}}
{{--                            <td>--}}
{{--                                ID: # {{ $item->id }}--}}
{{--                            </td>--}}
                            <td>
                                @foreach($appointment as $key => $appoint)
                                    @if($appoint->id ==  $item->appointment_id)
{{--                                        <span class="text-danger">{{ $appoint->type }}</span>&#128073;--}}
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
{{--                                {{ $item->description }}--}}
                                <div class="d-flex">

                                    @foreach($filesImages as $key => $image)
                                        @if($item->id == $image->obekt_id)
                                            <a data-fancybox="gallery" href="{{ $image->url_img }}">
                                                <img src="{{ $image->url_img }}" alt="picture-{{ $image->id }}" height="50" class="m-1">
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
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-secondary">
                                        Прииховати
                                    </a>
                                @else
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-success">
                                        Опублікувати
                                    </a>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex p-2">

                                    <a href="{{ route('admin.obekt.delete', $item) }}" class="btn btn-danger"><i class="fab fa-trash"></i> Видалити</a>
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
