@extends('layouts.admin')

@section('content')

    <div class="container-fluid pb-2">

        <h1>Новий об'єкт нерухомості - {{ $categoryData->name }}</h1>
        <hr>
        <form action="{{ route('admin.obekt.insert', $categoryData->slug) }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="obket-info col-md-4 border p-2">
                    <h4>Інформація про об'єкт</h4>
                    <label>Назва нерухомості</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Назва" required>
                    <label>Опис нерухомості</label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Опис"
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
                        @if($categoryData['slug'] != 'land')
                            <div class="opalemya">
                                <label>Тип опалення</label>
                                <select class="form-control" id="opalenyaName" name="opalenyaName">
                                    <option disabled>-Оберіть тип опалення-</option>
                                    <option value="-1" selected>Не обрано</option>
                                    <option value="Автономне">Автономне</option>
                                    <option value="Централізоване">Централізоване</option>
                                </select>
                            </div>
                            <div class="typeWall">
                                <span class="ml-0 pl-0">Тип стін</span>
                                <select name="type_wall_id" id="type_wall_id" class="form-control">
                                    <option value="0" disabled>Оберіть</option>
                                    <option value="-1" selected>Не обрано</option>
                                    @foreach($typeWall as $key => $wall)
                                        <option value="{{ $wall->id }}">{{ $wall->name }}</option>
                                    @endforeach
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
                        <div class="col-md-6">
                            <span>Ціна ($)</span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="price"
                                   id="price" required>
                        </div>
                        <div class="col-md-6">
                            <span>Площа
                                @if($categoryData['slug'] == 'land')
                                    (соток)
                                @else
                                    (м2)
                                @endif
                            </span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="square"
                                   id="square" required>
                        </div>
                    </div>
                    <hr>
                    @switch($categoryData->slug)
                        @case('land')

                        @break
                        @case('flat')
                              <div class="d-flex">
                            <div class="col-md-5">
                                <span>К-ть кімнат</span>
                                <input type="number" min="1" step="1" max="1000" class="form-control" id="count_room" name="count_room">
                            </div>
                            <div class="col-md-3">
                                <span>Поверх</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="level"
                                       id="level" required>
                            </div>
                            <div class="col-md-1 d-flex justify-content-center">
                                <span>/</span>
                            </div>
                            <div class="col-md-3">
                                <span>Поверховість</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="count_level"
                                       id="count_level" required>
                            </div>
                        </div>
                        @break
                        @case('house')
                        <div class="d-flex flex-column">
                            <div class="col-md-6">
                                <span>К-ть кімнат</span>
                                <input type="number" min="1" step="1" max="1000" class="form-control" id="count_room" name="count_room"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                            </div>

                            <div class="col-md-6">
                                <span>К-ть поверхів</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="count_level"
                                       id="count_level" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" required>
                            </div>

                            <div class="col-md-6">
                                <span>Заг. площа ділянки (соток)</span>
                                <input type="number" min="1" step="1" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="square_hause_land" id="square_hause_land" class="form-control" required>
                            </div>
                        </div>
                        @break
                        @case('commercial-real-estate')
                            comercial
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

                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file"> Обрати
                               <input type="file" id="imgMain" name="imgMain">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                    <a data-fancybox="gallery" id='img-upload-a'>
                        <img id='img-upload' alt="Головна фотографія" class="m-1 img-fluid">
                    </a>
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

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="file" name="images[]" id="images" class="btn btn-primary" placeholder="Choose images" multiple>
                                        </div>
                                        @error('images')
                                        <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mt-1 text-center">
                                            <div class="images-preview-div">
                                                <a id="img-upload-a-multi" data-fancybox="gallery">
                                                    <img id="img-upload-multi" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                        </div>
                    </div>
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

                <div class="owner col-md-4 border p-2">

                    <div class="d-flex justify-content-between">
                        <h4>Власник</h4>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="isNewOwner" name="isNewOwner"
                                   onclick="newOwner()">
                            <label class="form-check-label" for="isNewOwner">Додати власника</label>
                        </div>

                    </div>

                    <hr>

                    <script src='/custom/jquery-3.2.1.min.js' type='text/javascript'></script>
                    <script src='/custom/select2/dist/js/select2.min.js' type='text/javascript'></script>
                    <link href='/custom/select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>

                    <!-- Dropdown -->
                    <select id='selUser' class="form-control w-auto" name="owner_id">
                        <option value='0' selected disabled>-Оберіть власника-</option>
                        @foreach($owners as $key => $owner)
                            @if(Cookie::get('owner-id-for-new-obket-form-check-result')?? '' != '')
                                <option value="{{$owner->id}}" selected>{{$owner->name}} ({{$owner->phone}})</option>
                            @else
                                <option value="{{$owner->id}}">{{$owner->name}} ({{$owner->phone}})</option>
                            @endif
                        @endforeach
                    </select>

{{--                    <input type='button' value='Підтвердити' id='but_read' class="btn btn-primary mt-2">--}}

                    <br/>
                    <div id='result'></div>
                    <div class="invisible" id="newOwnerForm" name="newOwnerForm">
                        <h4>Новий власник</h4>
                        <input type="text" name="name_owner" id="name_owner" class="form-control" placeholder="Ім'я">
                        <input type="text" name="phone_owner" id="phone_owner" class="form-control m-1" placeholder="Телефон, формат: 380990123456"
                               maxlength="12"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
{{--                        <input type="text" name="address_owner" id="address_owners" class="form-control" placeholder="Адреса">--}}
                    </div>
                    <!-- Script -->
                    <script>
                        $(document).ready(function(){

                            // Initialize select2
                            $("#selUser").select2();

                            // Read selected option
                            $('#but_read').click(function(){
                                var username = $('#selUser option:selected').text();
                                var userid = $('#selUser').val();

                                $('#result').html("id : " + userid + ", name : " + username);
                            });
                        });
                    </script>
                    <hr>
                    <h4>Ріелтора</h4>
                    <select class="form-control" id="rieltor_id" name="rieltor_id" required>
                        <option>-Оберіть ріелтора-</option>
                        @foreach($rieltors as $key => $rieltor)
                            <option value="{{$rieltor->id}}">{{$rieltor->name}}</option>
                        @endforeach
                    </select>
                    <hr>
                    <h4>Розміщення</h4>
                    <label>Район</label>
                    <select onchange="showList(this)" name="location_rayon_id" id="location_rayon_id" class="form-control">
                        <option disabled selected>Оберіть район</option>
                        @foreach($location[0] as $key => $rayon)
                            <option value="{{$rayon->id}}">{{$rayon->rayon}}</option>
                        @endforeach
                    </select>
                    <label>Місто</label>
                    <select name="location_city_id" id="location_city_id" class="form-control invisible">
                        <option disabled selected>Оберіть місто</option>
                        @foreach($location[1] as $key => $city)
                            <option value="{{$city->id}}">{{$city->city}}</option>
                        @endforeach
                    </select>
                    <label>Район місто</label>
                    <select name="location_city_rayon_id" id="location_city_rayon_id" class="form-control invisible">
                        <option disabled selected>Оберіть район міста</option>
                        @foreach($location[2] as $key => $rayon_city)
                            <option value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>
                        @endforeach
                    </select>
                    <label>Адреса</label>
                    <input type="text" name="address" id="address" class="form-control" placeholder="Адреса">

                    <input type="text" name="note" id="note" class="form-control" placeholder="Нотатка">
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
                var ownerList = document.getElementById("selUser");

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

            function showList(a)
            {
                var x = (a.value || a.options[a.selectedIndex].value);
                var city_name = document.getElementById('location_city_id');
                var rayon_city = document.getElementById('location_city_rayon_id');

                if(x == 51)
                {
                    rayon_city.classList.remove('invisible');
                    rayon_city.classList.add('visible');

                    city_name.classList.remove('visible');
                    city_name.classList.add('invisible');
                }
                else if(x == 75)
                {
                    city_name.classList.remove('invisible');
                    city_name.classList.add('visible');

                    rayon_city.classList.remove('visible');
                    rayon_city.classList.add('invisible');

                } else {
                    city_name.classList.remove('visible');
                    city_name.classList.add('invisible');

                    rayon_city.classList.remove('visible');
                    rayon_city.classList.add('invisible');
                }
            }

            $(document).ready( function() {

                $(document).on('change', '.btn-file :file', function() {
                    var input = $(this),
                        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
                    input.trigger('fileselect', [label]);
                });

                $('.btn-file :file').on('fileselect', function(event, label) {

                    var input = $(this).parents('.input-group').find(':text'),
                        log = label;

                    if( input.length ) {
                        input.val(log);
                    } else {
                        if( log ) alert(log);
                    }

                });
                function readURL(input) {
                    if (input.files && input.files[0]) {
                        var reader = new FileReader();

                        reader.onload = function (e) {
                            $('#img-upload').attr('src', e.target.result);
                            $('#img-upload-a').attr('href', e.target.result);
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imgMain").change(function(){
                    readURL(this);
                });
            });
        </script>

        <hr>

    </div>

@endsection
