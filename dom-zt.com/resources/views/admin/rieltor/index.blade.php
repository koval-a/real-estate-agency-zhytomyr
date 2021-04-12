@extends('layouts.admin')

@section('content')

        <div class="reiltor mt-2 mb-5">
            <h1>Ріелтори</h1>
            <hr>
            <div class="container-fluid">
                <p class="mt-5">Список зареєстрованих реєлторів</p>
            </div>
            {{ $dataRieltors ?? 'Пусто' }}

                @foreach($dataRieltors as $key => $rieltor)
                    <span>
                    {{
                        $rieltor->name
                    }}
                </span>
                @endforeach


        </div>

@endsection
