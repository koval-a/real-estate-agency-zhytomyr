@extends('layouts.admin')

@section('content')

    <div class="reiltor mt-2 mb-5">

        <div class="container-fluid">
            <a href="{{ route('admin.clients') }}" class="btn btn-primary mb-4">Назад</a>
            <div class="info-header">
                <h1>Видалення власника <span class="text-danger">{{ $owner->name }}</span></h1>
            </div>
            <hr>

            <div class="col-md-8 m-auto">
                <form action="{{ route('admin.clients.delete', $owner->id) }}" method="GET">
                    @csrf
                    <div class="confirm">
                        <div class="text-information">
                            <div class="info-data p-3">
                                <h2 class="display-4 text-danger"> <i class="bi bi-info-circle-fill"></i> Попередження.</h2>
                            </div>
                            <p>
                                При видаленні власника, автоматично видаляться всі об'єкти нерухомості, що з ним пов'язані.
                                Тобто ті в яких він зазначений як власник об'єкта нерухомості.
                            </p>
                            <p>
                                Незалежно від того, що певний об'єкт нерухомості власника міг бути видалений раніше.
                            </p>
                        </div>
                        <hr>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="confirm" name="confirm">
                            <label class="form-check-label" for="flexCheckChecked">
                                Я прочитав попередження, так згоден на видалення <span class="text-danger">{{ $owner->name }}</span>
                            </label>
                        </div>
                    </div>
                    <hr>
                    <div class="btn-update">
                        <button type="submit" class="btn btn-danger">Видалити</button>
                        <a href="{{ route('admin.clients') }}" class="btn btn-secondary">Відмінити</a>
                    </div>
                </form>
            </div>

        </div>

    </div>

@endsection
