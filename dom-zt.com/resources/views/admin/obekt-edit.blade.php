@extends('layouts.admin')

@section('content')

    <div class="container-fluid pb-2">

        <h1>Редарування об'єкту нерухомості - {{ $obekt->name }}</h1>
        <hr>
        <form action="{{ route('admin.obekt.updated', $obekt->id) }}" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
            @csrf
            <div class="row p-3">
                <div class="obket-info col-md-4 border p-2">
                    <h4>Інформація про об'єкт</h4>
                    <label>Назва нерухомості</label>
                    <input type="text" name="name" id="name" value="{{ $obekt->name }}" class="form-control" placeholder="Назва" required>
                    <label>Опис нерухомості</label>
                    <textarea name="description" id="description" class="form-control" rows="3" placeholder="Опис"
                              required>
                        {{ $obekt->description }}
                    </textarea>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <div class="type-build">
                            <label>Тип нерухомості</label>
                            <select name="appointment_id" id="appointment_id" class="form-control" required>
                                <option disabled>Оберіть тип нерухомості</option>
                                @foreach($typeBuild as $key => $type)
                                    @if($setCurrentSelected[0] == $type->id)
                                        <option value="{{$type->id}}" selected>{{$type->name}}</option>
                                    @else
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        @if($obekt->slug != 'land')
                            <div class="opalemya">
                                <label>Тип опалення</label>
                                <select class="form-control" id="opalenyaName" name="opalenyaName">
                                    <option disabled>-Оберіть тип опалення-</option>
                                    <option value="Автономне">Автономне</option>
                                    <option value="Централізоване">Централізоване</option>
                                </select>
                            </div>
                            <div class="typeWall">
                                <span class="ml-0 pl-0">Тип стін</span>
                                <select name="typeWall" id="typeWall" class="form-control">
                                    <option value="0" disabled selected>Оберіть</option>
                                    @foreach($typeWall as $key => $wall)
                                        <option value="{{ $wall->name }}">{{ $wall->name }}</option>
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
                                   id="price" value="{{ $obekt->price }}" required>
                        </div>
                        <div class="col-md-6">
                            <span>Площа (м2)</span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="square"
                                   id="square" value="{{ $obekt->square }}" required>
                        </div>
                    </div>
                    <hr>
                    @switch($obekt->slug)
                        @case('land')
                        land
                        @break
                        @case('flat')
                        <div class="d-flex">
                            <div class="col-md-5">
                                <span>К-ть кімнат</span>
                                <select class="form-control" id="count_room" name="count_room">
                                    <option>-Оберіть к-ть кімнат-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4+</option>
                                </select>
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
                        <div class="d-flex">
                            <div class="col-md-6">
                                <span>К-ть кімнат</span>
                                <select class="form-control" id="count_room" name="count_room">
                                    <option>-Оберіть к-ть кімнат-</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4+</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <span>К-ть поверхів</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="count_level"
                                       id="count_level" required>
                            </div>
                        </div>
                        @break
                        @case('commercial-real-estate')
                        comercial
                        @break

                    @endswitch
                </div>

                <div class="location col-md-4 border p-2">
                    <h4>Фотографії</h4>
                    <hr>
                    <span>Поточні фотографії</span> <hr>
                    <div class="row">
                        <div class="main-photo col-md-4">
                            <img src="{{$obekt->main_img}}" alt="current photo" width="100">
                            <span>Головна</span>
                        </div>
                        <div class="more-photo col-md-8">
                            <div class="row">
                                @foreach($filesImages as $key => $image)
                                    @if($obekt->id == $image->obekt_id)
                                        <img src="{{ $image->url_img }}" alt="image-{{$image->id}}" class="img-thumbnail w-25">
                                    @endif
                                @endforeach
                            </div>
                            <span>Додаткові</span>
                        </div>
                    </div>

                    <hr>
                    <span>Нові фотографії</span>
                    <hr>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-light btn-file">
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
                                        <input type="file" name="images[]" id="images" placeholder="Choose images" multiple>
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

                <div class="owner col-md-4 border p-2">
                    <h4>Власник</h4>
                    <div class="d-flex justify-content-between">
                        <select class="form-control" id="owner_id" name="owner_id">
                            <option disabled>-Оберіть власника-</option>
                            @foreach($owners as $key => $owner)
                                @if($setCurrentSelected[1] == $owner->id)
                                    <option value="{{$owner->id}}" selected>{{$owner->name}}</option>
                                @else
                                    <option value="{{$owner->id}}">{{$owner->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <h4>Ріелтор</h4>
                    <select class="form-control" id="rieltor_id" name="rieltor_id" required>
                        <option>-Оберіть ріелтора-</option>
                        @foreach($rieltors as $key => $rieltor)
                            @if($setCurrentSelected[2] == $rieltor->id)
                                <option value="{{$rieltor->id}}" selected>{{$rieltor->name}}</option>
                            @else
                                <option value="{{$rieltor->id}}">{{$rieltor->name}}</option>
                            @endif
                        @endforeach
                    </select>
                    <hr>
                    <h4>Розміщення: <span class="text-danger">{{$setCurrentSelected[3]}}, {{$setCurrentSelected[4]}}</span></h4>
                    <span>Оберіть нове або залишіть поле без змін</span>
                    <br>
                    <label>Район</label>
                    <select onchange="showList(this)" name="location_rayon_id" id="location_rayon_id" class="form-control">
                        <option disabled selected>Оберіть район</option>
                        @foreach($location[0] as $key => $rayon)
                           <option value="{{$rayon->id}}">{{$rayon->rayon}}</option>
                        @endforeach
                    </select>
                    {{--                    <label>Місто</label>--}}
                    <select name="location_city_id" id="location_city_id" class="form-control invisible">
                        <option disabled selected>Оберіть місто</option>
                        @foreach($location[1] as $key => $city)
                            <option value="{{$city->id}}">{{$city->city}}</option>
                        @endforeach
                    </select>
                    {{--                    <label>Район місто</label>--}}
                    <select name="location_rayon_city_id" id="location_rayon_city_id" class="form-control invisible">
                        <option disabled selected>Оберіть район міста</option>
                        @foreach($location[2] as $key => $rayon_city)
                            <option value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="insert-button">
                <hr>
                <button type="submit" class="btn btn-primary btn-block w-25">Оновити дані</button>
            </div>
        </form>
        <script>
            function showList(a)
            {
                var x = (a.value || a.options[a.selectedIndex].value);
                var city_name = document.getElementById('location_city_id');
                var rayon_city = document.getElementById('location_rayon_city_id');

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
