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
                    <label>Назва нерухомості</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Назва" required>
                    <label>Опис нерухомості</label>
                    <textarea name="desc" id="desc" class="form-control" rows="3" placeholder="Опис"
                              required></textarea>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="type-build">
                            <label>Тип нерухомості</label>
                            <select name="appointment_id" id="appointment_id" class="form-control" required>
                                <option disabled>Оберіть тип нерухомості</option>
                                @foreach($typeBuild as $key => $type)
                                    <option value="{{$type->id}}"> {{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($category[0] != 'land')
                        <div class="opalemya">
                            <label>Тип опалення</label>
                            <select class="form-control" id="type_opalenya" name="type_opalenya">--}}
                                <option disabled>-Оберіть тип опалення-</option>
                                <option value="Автономне">Автономне</option>
                                <option value="Централізоване">Централізоване</option>
                            </select>
                        </div>
                        @endif
                    </div>
                    <hr>
                    <div class="form-check form-switch mt-2">
                        <input class="form-check-input" type="checkbox" id="isPublic" name="isPublic" checked
                               required>
                        <label class="form-check-label" for="isPublic">Публічність об'єкта</label>
                    </div>
                    <hr>
                    <div class="d-flex">
                        <div class="col-md-3">
                            <span>Ціна ($)</span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="price"
                                   id="price" required>
                        </div>
                        <div class="col-md-3">
                            <span>Площа (м2)</span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="square"
                                   id="square" required>
                        </div>
                    </div>
                    <hr>
                    @switch($category[0])
                        @case('land')
                        @break
                        @case('flat')

                        @break
                        @case('house')
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
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="level"
                                       id="level" required>
                            </div>

                            <div class="col-md-3">
                                <span>Всього</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="count_level"
                                       id="count_level" required>
                            </div>
                        </div>
                        @break
                        @case('commercial-real-estate')

                        @break
                        @default
                        <div class="col-md-3">
                            <span>Даної категорії немає!</span>
                        </div>

                    @endswitch
                </div>

                <div class="location col-md-4 border p-2">
                    <h4>Фотографії</h4>
                    <hr>

                    <img
                        src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4"
                        class="img-fluid rounded shadow" alt="main image">
                    <hr>


                    <span>Додаткові фото</span>
                    <style>
                        .images-preview-div img
                        {
                            padding: 10px;
                            max-width: 100px;
                        }
                    </style>
                    <div class="card">
                        <div class="card-body">
                            <form name="images-upload-form" method="POST"  action="{{ url('upload-multiple-image-preview') }}" accept-charset="utf-8" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" name="images[]" id="images" placeholder="Choose images" multiple >
                                        </div>
                                        @error('images')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-1 text-center">
                                            <div class="images-preview-div"> </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary" id="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                    <script >
                        $(function() {
// Multiple images preview with JavaScript
                            var previewImages = function(input, imgPreviewPlaceholder) {
                                if (input.files) {
                                    var filesAmount = input.files.length;
                                    for (i = 0; i < filesAmount; i++) {
                                        var reader = new FileReader();
                                        reader.onload = function(event) {
                                            $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                                        }
                                        reader.readAsDataURL(input.files[i]);
                                    }
                                }
                            };
                            $('#images').on('change', function() {
                                previewImages(this, 'div.images-preview-div');
                            });
                        });
                    </script>
                </div>
{{--                    <div class="row">--}}
{{--                        <div class="col-md-3">--}}
{{--                            <a data-fancybox="gallery"--}}
{{--                               href="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4">--}}
{{--                                <img--}}
{{--                                    src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4"--}}
{{--                                    alt="picture" height="50" class="m-1">--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
               
                <div class="owner col-md-4 border p-2">
                    <h4>Власник</h4>
                    <div class="d-flex justify-content-between">

                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isNewOwner" name="isNewOwner"
                                   onclick="newOwner()" required>
                            <label class="form-check-label" for="isNewOwner">Додати власника</label>
                        </div>
                        <select class="form-control w-50" id="owner_list" name="owner_list">
                            <option disabled>-Оберіть власника-</option>
                            @foreach($owners as $key => $owner)
                                <option value="{{$owner->id}}">{{$owner->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="invisible" id="newOwnerForm" name="newOwnerForm">
                        <h4>Новий власник</h4>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Ім'я">
                        <input type="tel" name="phone" id="phone" class="form-control" placeholder="Телефон: 0990091910">
                        <input type="text" name="address" id="address" class="form-control" placeholder="Адреса">
                    </div>
                    <hr>
                    <h4>Ріелтора</h4>
                    <select class="form-control" id="rieltor_id" required>
                        <option>-Оберіть ріелтора-</option>
                        @foreach($rieltors as $key => $rieltor)

                            <option value="$rieltor->id">{{$rieltor->name}}</option>
                        @endforeach
                    </select>
                    <hr>
                    <h4>Розміщення</h4>
                    <label>Район</label>
                    <select name="location_rayon_id" id="location_rayon_id" class="form-control">
                        <option disabled>Оберіть район</option>
                        @foreach($location[0] as $key => $rayon)
                            <option value="{{$rayon->id}}">{{$rayon->rayon}}</option>
                        @endforeach
                    </select>
                    <label>Місто</label>
                    <select name="location_rayon_id" id="location_rayon_id" class="form-control">
                        <option disabled>Оберіть місто</option>
                        @foreach($location[1] as $key => $city)
                            <option value="{{$city->id}}">{{$city->city}}</option>
                        @endforeach
                    </select>
                    <label>Район місто</label>
                    <select name="location_rayon_id" id="location_rayon_id" class="form-control">
                        <option disabled>Оберіть район міста</option>
                        @foreach($location[2] as $key => $rayon_city)
                            <option value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>
                        @endforeach
                    </select>
                    <label>Адреса</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Адреса">

                </div>
            </div>
            <div class="insert-button">
                <hr>
                <button type="submit" class="btn btn-success btn-block w-25">Зберегти</button>
            </div>
        </form>
        <script>
            function newOwner() {

                var isNewOwner = document.getElementById("isNewOwner");
                var ownerList = document.getElementById("owner_list");

                if (isNewOwner.checked == true) {
                    ownerList.disabled = true;
                    document.getElementById('newOwnerForm').classList.remove('invisible');
                    document.getElementById('newOwnerForm').classList.add('visible');
                } else {
                    ownerList.disabled = false;
                    document.getElementById('newOwnerForm').classList.remove('visible');
                    document.getElementById('newOwnerForm').classList.add('invisible');
                }
            }

        </script>

        <hr>

    </div>


@endsection
