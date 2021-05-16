@extends('layouts.admin')

@section('content')

    <div class="container-fluid pb-2">

        <h1>Новий об'єкт нерухомості - {{ $category[1] }}</h1>

        <hr>

        <form action="{{ route('admin.obekt.insert', $category[0]) }}" method="POST">
            @csrf
            <div class="row">
                <div class="obket-info col-md-4 border p-2">
                    <h4>Інформація про об'єкт</h4>
                    <input type="text" name="title" id="title" class="form-control">
                </div>
                <div class="location col-md-4 border p-2">
                    <h4>Фотографії</h4>
                </div>
                <div class="owner col-md-4 border p-2">
                    <h4>Власник</h4>

                    <h4>Ріелтора</h4>
                </div>
            </div>
            <div class="insert-button">
                <button type="submit" class="btn btn-success btn-block w-25">Зберегти</button>
            </div>
        </form>

        <hr>

    </div>

@endsection
