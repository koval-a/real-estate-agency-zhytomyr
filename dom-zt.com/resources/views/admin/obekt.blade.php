@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <h1>{{$category[1]}}</h1>
        <hr>
        <a href="{{ route('admin.obekt.new', $category) }}" class="btn btn-success">Додати новий об'єкт</a>
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
                        <span class={{ $item->isPublic?'text-success':'text-warning' }}>
                        {{ $item->isPublic?'Опубліковано':'Приховано' }}
                        </span>
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
@endsection
