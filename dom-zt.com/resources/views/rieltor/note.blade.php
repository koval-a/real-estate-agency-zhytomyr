@extends('layouts.rieltor')

@section('content')

    <div class="container-fluid mb-5">

        <h1>Нотатки</h1>
        <hr>

        @if (Session::has('message_alert_success'))
            <div class="alert alert-success p-2">
                {{ Session::get('message_alert_success') }}
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
        @elseif(Session::has('message_alert_error'))
            <div class="alert alert-danger p-2">
                {{ Session::get('message_alert_error') }}
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
        @elseif(Session::has('message_alert_info'))
            <div class="alert alert-info p-2">
                {{ Session::get('message_alert_info') }}
                <button type="button" class="btn-close" aria-label="Close"></button>
            </div>
        @endif

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
                        <a href="/obekts/{$slug}">
                           {{ $note->obekt_id }}
                            <br> <code> Вставити назву посиланням </code>
                        </a>
                    </td>
                    <td>
                        {{ $note->note_text }}
                    </td>
                    <td>
                        <a href="{{ route('rieltor.note.delete', $note->id) }}" class="btn btn-outline-danger"><i class="fab fa-trash"></i> Видалити</a>
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
