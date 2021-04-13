@extends('layouts.rieltor')

@section('content')

    <div class="container-fluid mb-5">

        <h1>Нотатки</h1>
        <hr>
        <table class="table">
            <thead>
                <tr class="bg-secondary text-white">
                    <td>
                        #
                    </td>
                    <td>
                        Назва
                    </td>
                    <td>
                        Дата
                    </td>
                    <td>
                        Об'єкт
                    </td>
                    <td>
                        Текст
                    </td>
                    <td>
                        Дія
                    </td>
                </tr>
            </thead>
            <tbody>
            @foreach($notes as $key => $note)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        Нотатка # {{ $note->id }}
                    </td>
                    <td>
                        {{ $note->date_publish }}
                    </td>
                    <td>
                       {{ $note->obekt_id }}
                        <br> <code> Вставити назву посиланням </code>
                    </td>
                    <td>
                        {{ $note->note_text }}
                    </td>
                    <td>
                        <a href="#" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if($notes->isEmpty())
            <span class="mt-5 p-2 rounded text-white bg-warning">У вас немає нотаток</span>
            <a href="#" class="btn btn-primary shadow">Додати нотатку</a>
        @endif
    </div>

@endsection
