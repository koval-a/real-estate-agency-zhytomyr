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
                    <input type="text" name="title" id="title" class="form-control" placeholder="Назва" required>
                    <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Опис" required></textarea>

                    <hr>

                    <div class="d-flex">
                        <div class="col-md-3">
                            <span>Ціна ($)</span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="price" id="price" required>
                        </div>
                        <div class="col-md-3">
                            <span>Площа (м2)</span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="square" id="square" required>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="col-md-6">
                            <span>К-ть кімнат</span>
                            <select class="form-control" id="count_room">
                                <option>-Оберіть к-ть кімнат-</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4+</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <span>Поверх</span>
                            <input type="number" class="form-control" min="1" step="1" max="1000" name="level" id="level" required>
                        </div>

                        <div class="col-md-3">
                            <span>Всього</span>
                            <input type="number" class="form-control" min="1" step="1" max="1000" name="count_level" id="count_level" required>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between pb-3">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isOpalenya" name="isOpalenya" onclick="myFunction()" required>
                            <label class="form-check-label" for="isOpalenya">Наявність опалення</label>
                        </div>
                        <select class="form-control w-50 invisible" id="type_opalenya" name="type_opalenya">
                            <option disabled>-Оберіть тип опалення-</option>
                            <option value="Автономне">Автономне</option>
                            <option value="Централізоване">Централізоване</option>
                            <option value="Відсутнє">Відсутнє</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isNewBuild" name="isNewBuild" checked required>
                            <label class="form-check-label" for="isNewBuild">Нова будівля(Новостройка)</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isPublic" name="isPublic" checked required>
                            <label class="form-check-label" for="isPublic">Публічність об'єкта</label>
                        </div>
                    </div>
                </div>
                <div class="location col-md-4 border p-2">
                    <h4>Фотографії</h4>
                </div>
                <div class="owner col-md-4 border p-2">
                    <h4>Власник</h4>
                    <select class="form-control" id="owner_id">
                        <option>-Оберіть власника-</option>
                    </select>

                    <h4>Ріелтора</h4>
                    <select class="form-control pt-5" id="rieltor_id">
                        <option>-Оберіть ріельтора-</option>
                    </select>
                </div>
            </div>
            <div class="insert-button">
                <hr>
                <button type="submit" class="btn btn-success btn-block w-25">Зберегти</button>
            </div>
        </form>
        <script>

            function myFunction() {
                // Get the checkbox
                var checkBox = document.getElementById("isOpalenya");

                // If the checkbox is checked, display the output text
                if (checkBox.checked == true){
                    document.getElementById('type_opalenya').classList.remove('invisible');
                    document.getElementById('type_opalenya').classList.add('visible');
                } else {
                    document.getElementById('type_opalenya').classList.remove('visible');
                    document.getElementById('type_opalenya').classList.add('invisible');
                }
            }

        </script>

        <hr>

    </div>


@endsection
