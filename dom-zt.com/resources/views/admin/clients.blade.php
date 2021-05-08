@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">
        <h1>Клієнти</h1>
        <hr>
        <div class="container-fluid d-flex justify-content-between">
            <p class="mt-5">Власники нерухомості</p>
            <button class="btn btn-success m-3">Додати</button>
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
                        <a href="{{ route('admin.clients.delete', $owner->id) }}" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>



    </div>


@endsection
