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
                               placeholder="Пошук за ID об'єкта або номером власника">
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
            Filter by type build, square, price, count room, location
        <hr>
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
                                <a data-fancybox="gallery"
                                   href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                    <img
                                        src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4"
                                        alt="picture" height="50" class="m-1">
                                </a>
                            </div>
                        </td>
                        <td>
                            <span class={{ $item->isPublic?'text-success':'text-sexondary' }}>
                                {{ $item->isPublic?'Опубліковано':'Приховано' }}
                            </span>
                        </td>
                        <td>
                        <span class={{ $item->isPay?'text-success':'text-warning' }}>
                        {{ $item->isPay?'Продано':'В продажу' }}
                        </span>
                        </td>
                        <td>
                            <div class="d-flex p-2">
                                @if($item->isPublic)
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-outline-secondary">
                                        Прииховати
                                    </a>
                                @else
                                    <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-outline-success">
                                        Опублікувати
                                    </a>
                                @endif
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
    </div>

@endsection
