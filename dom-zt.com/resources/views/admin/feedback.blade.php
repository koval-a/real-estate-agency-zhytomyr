@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">

        <div class="container-fluid">
            <div class="info-header">
                <h1>Відгуки ({{ $feedback->count() }})</h1>
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
                            Дата
                        </td>
                        <td>
                            Автор
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
                            <td class="col-md-1">
                                {{ $key + 1 }}
                            </td>
                            <td>
                                @if($commnent->public == 0)
                                    <span class="text-secondary"> Прихований  </span>
                                @else
                                    <span class="text-success"> Опублікуваний </span>
                                @endif
                            </td>
                            <td>
                                {{ $commnent->date }}
                            </td>
                            <td>
                                {{ $commnent->name }}
                                <br>
                                {{ $commnent->email }}
                            </td>
                            <td>
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
