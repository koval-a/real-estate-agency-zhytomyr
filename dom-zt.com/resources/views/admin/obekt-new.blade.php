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
                    <br>
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
                    @if($category[0] != 'land')
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
                        </select>
                    </div>
                    @else
                        Земля
                    @endif
                    <div class="d-flex justify-content-between">
                        @if($category[0] != 'land')
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isNewBuild" name="isNewBuild" checked required>
                            <label class="form-check-label" for="isNewBuild">Нова будівля(Новостройка)</label>
                        </div>
                        @endif
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isPublic" name="isPublic" checked required>
                            <label class="form-check-label" for="isPublic">Публічність об'єкта</label>
                        </div>
                    </div>
                </div>

                <div class="location col-md-4 border p-2">
                    <h4>Фотографії</h4>
                    <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" class="img-fluid rounded shadow" alt="main image">
                    <hr>
                    <span>Додаткові фото</span>
                    <div class="row">
                        <div class="col-md-3">
                            <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a data-fancybox="gallery" href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">
                                <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="picture" height="50" class="m-1">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="owner col-md-4 border p-2">
                    <h4>Власник</h4>
                    <div class="d-flex justify-content-between">
                        <select class="form-control w-50" id="owner_id">
                            <option>-Оберіть власника-</option>
                            @foreach($owners as $key => $owner)

                                <option value="$owner->id">{{$owner->name}}</option>
                            @endforeach
                        </select>
{{--                        <div class="form-check form-switch">--}}
{{--                            <input class="form-check-input" type="checkbox" id="newOwner" name="newOwner" onclick="newOwner()">--}}
{{--                            <label class="form-check-label" for="newOwner">Новий власник</label>--}}
{{--                        </div>--}}
                    </div>
                    <div class="invisible" id="isNewOwner" name="isNewOwner">
                        <h4>Новий власник</h4>
                    </div>
                    <hr>
                    <h4>Ріелтора</h4>
                    <select class="form-control" id="rieltor_id" required>
                        <option>-Оберіть ріелтора-</option>
                        @foreach($rieltors as $key => $rieltor)

                            <option value="$rieltor->id">{{$rieltor->name}}</option>
                        @endforeach
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

            function newOwner(){
                //owner_id newOwner

                var isNewOwner = document.getElementById("newOwner");

                if (isNewOwner.checked == true){
                    isNewOwner.disabled = true;
                    document.getElementById('isNewOwner').classList.remove('invisible');
                    document.getElementById('isNewOwner').classList.add('visible');
                } else {
                    isNewOwner.disabled = false;
                    document.getElementById('isNewOwner').classList.remove('visible');
                    document.getElementById('isNewOwner').classList.add('invisible');
                }
            }

        </script>

        <hr>

    </div>


@endsection
