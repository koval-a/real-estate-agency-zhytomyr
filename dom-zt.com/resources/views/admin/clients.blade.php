@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">

        <div class="container-fluid">
            <div class="info-header">
                <h1>Власники (Клієнти)</h1>
                <p class="">Власники нерухомості</p>
                <hr>
            </div>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-5" data-toggle="modal" data-target="#exampleModal">
                Додати
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Новий клієнт</h5>
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

        <table class="table">
            <thead>
            <tr class="bg-secondary text-white">
                <td>
                    #
                </td>
                <td>
                    ID
                </td>
                <td>
                    Ім'я
                </td>
                <td>
                    Телефон
                </td>
                <td>
                    Адреса
                </td>
                <td>
                    Дія
                </td>
            </tr>
            </thead>
            <tbody>
            @foreach($clients as $key => $owner)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $owner->id }}
                    </td>
                    <td>
                        {{ $owner->name }}
                    </td>
                    <td>
                        {{ $owner->phone }}
                    </td>
                    <td>
                        {{ $owner->address }}
                    </td>
                    <td>
{{--                        <a href="{{ route('admin.clients.delete', $owner->id) }}" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>--}}
                        <a href="#" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    </div>


@endsection
