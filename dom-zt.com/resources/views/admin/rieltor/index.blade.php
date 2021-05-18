@extends('layouts.admin')

@section('content')

        <div class="reiltor mt-2 mb-5">
            <h1>Ріелтори</h1>
            <p class="">Список зареєстрованих реєлторів</p>
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Зареєструвати
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Новий Ріелтор</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="POST">
                                <span>input field</span>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                            <button type="button" class="btn btn-primary">Додати</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container-fluid">

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
                            <a href="#" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>

@endsection
