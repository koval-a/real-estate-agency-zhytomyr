@extends('layouts.admin')

@section('content')

        <div class="reiltor mt-2 mb-5">
            <h1>Ріелтори</h1>
            <hr>
            <div class="container-fluid d-flex justify-content-between">
                <p class="mt-5">Список зареєстрованих реєлторів</p>
                <button class="btn btn-success m-3">Зареєструвати</button>
            </div>

            <table class="table">
                <thead>
                <tr class="bg-secondary text-white">
                    <td>
                        #
                    </td>
                    <td>
                        Ім'я
                    </td>
                    <td>
                        Контакти
                    </td>
                    <td>
                        Дія
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($dataRieltors as $key => $rieltor)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            <img src="/files/images/users/{{ $rieltor->avatar }}" class="img-fluid" width="150" alt="avatar">
                           {{ $rieltor->name }}
                        </td>
                        <td>
                            Телефон: {{ $rieltor->phone }}
                            <br>
                            Email: {{ $rieltor->email }}
                        </td>
                        <td>
                            <a href="" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>

@endsection
