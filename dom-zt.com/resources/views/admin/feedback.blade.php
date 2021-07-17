@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">

        <div class="container-fluid">
            <div class="info-header">
                <h1>Відгукі ({{ $feedback->count() }})</h1>
                <hr>
                <button type="button" class="btn btn-primary m-auto" data-toggle="modal" data-target="#exampleModal">
                    Додати
                </button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Новий відгук</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('admin.feedback.insert') }}" method="POST">
                                @csrf
                                <div class="modal-body">

                                    <input type="text" name="name"  id="name" class="form-control m-1" required placeholder="Ім'я">
                                    <input type="email" name="email"  id="email" class="form-control m-1" required placeholder="E-mail">
                                    <textarea name="commnet" id="commnet" cols="30" rows="10" class="form-control" required placeholder="Відгук"></textarea>
                                    <input type="number" name="starts"  id="starts" class="form-control m-1"  required placeholder="Оцінка від 1 до 5"
                                           step="1" min="1" max="5">

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                                    <button type="submit" class="btn btn-primary">Додати</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>

        <div class="">
            @if($feedback->count() > 0)

                <table class="table">
                    <thead>
                    <tr class="bg-secondary text-white">
                        <td>
                            #
                        </td>
                        <td>
                            Статус
                        </td>
                        <td>
                            Автор
                        </td>
                        <td>
                            Оцінка
                        </td>
                        <td>
                            Коментар
                        </td>
                        <td>
                            Дія
                        </td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($feedback as $key => $commnent)
                        <tr>
                            <td>
                                {{ $key + 1 }}
                            </td>
                            <td>
                                @if($commnent->public == 0)
                                    <span class="text-secondary"> Прихований  </span>
                                @else
                                    <span class="text-success"> Опублікуваний </span>
                                @endif
                                <br>
                                Додано з {{ $commnent->date }}
                            </td>
                            <td>
                                {{ $commnent->name }}
                                <br>
                                {{ $commnent->email }}
                            </td>
                            <td>
                                {{ $commnent->starts }} / 5
                            </td>
                            <td class="col-md-4">
                                {{ $commnent->commnet }}
                            </td>
                            <td>

                                <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        Виконати
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        @if($commnent->public == 1)
                                            <a href="{{ route('admin.feedback.private', $commnent->id) }}" class="dropdown-item text-secondary">
                                                <i class="bi bi-eye-slash"></i> Приховати
                                            </a>
                                        @else
                                            <a href="{{ route('admin.feedback.public', $commnent->id) }}" class="dropdown-item text-success"><i class="bi bi-eye"></i> Опублікувати</a>
                                        @endif

                                        <a href="{{ route('admin.feedback.delete', $commnent->id) }}" class="dropdown-item text-danger"><i class="bi bi-trash"></i> Видалити</a>

                                    </ul>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <hr>
                {{ $feedback->links() }}
                <hr>
            @else
                <span class="p-3">Коментарів немає.</span>
            @endif
        </div>


    </div>


@endsection
