@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">

        <div class="container-fluid">
            <div class="info-header">
                <h1>Власники ({{ $count }})</h1>
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
                        <form action="{{ route('admin.clients.insert') }}" method="POST">
                            @csrf
                            <div class="modal-body">

                                    <input type="text" name="name"  id="name" class="form-control m-1" required placeholder="Ім'я">
                                    <input type="text" name="phone"  id="phone" class="form-control m-1"  required placeholder="Формат: 0990123456"
                                           maxlength="12"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
{{--                                    <input type="text" name="address"  id="address" class="form-control m-1" required placeholder="Адреса">--}}

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                                <button type="submit" class="btn btn-primary">Додати</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            @if($clients->count() > 0)

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
                            Телефон
                        </td>
                        <td>
                            Дія
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($clients as $key => $owner)
                        <tr>
                            <td class="col-md-1">
                                {{ $key + 1 }}
                            </td>
                            <td>
                                {{ $owner->name }} <br>
                                ID: {{ $owner->id }}
                            </td>
                            <td>
                                {{ $owner->phone }}
                            </td>
                            <td class="col-md-3">
                                <a href="{{ route('admin.clients.edit', $owner->id) }}" class="btn btn-primary">Редагувати</a>
                                <a href="{{ route('admin.clients.delete.confirm', $owner->id) }}" class="btn btn-danger">Видалити</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                {{ $clients->links() }}
                <hr>
            @else
                <span class="p-3">Записів немає.</span>
            @endif
        </div>


    </div>


@endsection
