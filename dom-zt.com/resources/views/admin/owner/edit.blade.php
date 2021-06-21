@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">

        <div class="container-fluid">
            <a href="{{ route('admin.clients') }}" class="btn btn-primary mb-4">Назад</a>
            <div class="info-header">
                <h1>Редагування {{ $owner->name }}</h1>
            </div>
            <hr>

            <div class="col-md-8 m-auto">
                <form action="{{ route('admin.clients.updated', $owner->id) }}" method="POST">
                    @csrf
                    <div class="filed-update">
                        <span>Ім'я та Прізвище</span>
                        <input type="text" name="name"  id="name" class="form-control m-1"  value="{{ $owner->name }}">
                        <span>Телефон</span>
                        <input type="tel" name="phone"  id="phone" class="form-control m-1"  value="{{ $owner->phone }}">

                    </div>
                    <div class="btn-update p-2">
                        <button type="submit" class="btn btn-primary">Оновити</button>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
