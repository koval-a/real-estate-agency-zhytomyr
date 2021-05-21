@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <h1>Всі об'єкти нерухомості</h1>
        <hr>
        <div class="row">
            <div class="search-bar col-md-8">

                <form action="" method="GET" class="d-flex justify-content-center">

                    <input type="text" class="form-control" name="search-text" id="search-text" placeholder="Пошук об'єкта за ID, номером телефону власника">
                    <button class="btn btn-primary w-25">Пошук</button>

                </form>

            </div>

            <div class="link-all-obekt col-md-4">
                <a href="{{ route('admin.allView') }}" class="btn btn-danger">Всі об'єкти нерухомості</a>
            </div>
        </div>
        <hr>
        <form action="{{ route('admin.search') }}" method="POST" role="search">
            @csrf
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                       placeholder="Search users"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>
        </form>
        <hr>
        <div class="all-obekt">

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
                                <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                                </a>
                                <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                                </a>
                                <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                                </a>
                                <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                                </a>
                                <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                                </a>
                            </div>
                        </td>
                        <td>
                            @if($item->isPublic)
                                <span class="text-success">
                                Опубліковано
                            </span>
                                <a href="{{route('admin.notPublic', $item->id)}}" class="btn btn-outline-secondary">
                                    Прииховати
                                </a>
                                {{--                            <a href="#" class="btn btn-outline-secondary">--}}
                                {{--                                Прииховати--}}
                                {{--                            </a>--}}
                            @else
                                <span class="text-secondary">
                                Приховано
                            </span>
                                <a href="{{route('admin.isPublic', $item->id)}}" class="btn btn-outline-success">
                                    Опублікувати
                                </a>
                                {{--                            <a href="#" class="btn btn-outline-success">--}}
                                {{--                                Опублікувати--}}
                                {{--                            </a>--}}
                            @endif

                            {{--                        <span class={{ $item->isPublic?'text-success':'text-warning' }}>--}}
                            {{--                        {{ $item->isPublic?'Опубліковано':'Приховано' }}--}}
                            {{--                        </span>--}}
                        </td>
                        <td>
                        <span class={{ $item->isPay?'text-success':'text-warning' }}>
                        {{ $item->isPay?'Продано':'В продажу' }}
                        </span>
                        </td>
                        <td>
                            <a href="#" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
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
