@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <h1>
            Перевірка наявності об'єкта
        </h1>
        <p>
            Перевірка призначена за для запобігання дублювання об'єктів нерухомості. <br>
            Перевірка відбуваться за номером власник, за результатом видається список об'єктів нерухомості, що
            знайдено за введеним номером власника, і якщо потрібного об'єкта немає його можна додати.
        </p>
        <hr>
        <div class="form-check col-md-8 m-auto">
            <form action="{{ route('admin.obekt.is.obekt') }}" method="POST">
                @csrf
                <div class="number-input">
                    <span>Введіть номер власника</span>
                    <input type="text" class="form-control" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');"
                           name="phone_check"
                           id="phone_check">
                </div>
                <div class="pt-2">
                    <button class="btn btn-primary" type="submit">Перевірити</button>
                </div>
            </form>
        </div>
    </div>

@endsection
