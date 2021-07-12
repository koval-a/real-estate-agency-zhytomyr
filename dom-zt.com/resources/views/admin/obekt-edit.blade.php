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
                        <div class="type-build col-md-4">
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
                                    @if($obekt->opalenyaName == 'Автономне')
                                        <option value="-1">Не обрано</option>
                                        <option value="Автономне" selected>Автономне</option>
                                        <option value="Централізоване">Централізоване</option>
                                    @elseif($obekt->opalenyaName == 'Централізоване')
                                        <option value="-1">Не обрано</option>
                                        <option value="Автономне">Автономне</option>
                                        <option value="Централізоване" selected>Централізоване</option>
                                    @else
                                        <option value="-1" selected>Не обрано</option>
                                        <option value="Автономне">Автономне</option>
                                        <option value="Централізоване">Централізоване</option>
                                    @endif
                                </select>
                            </div>
                            <div class="typeWall">
                                <span class="ml-0 pl-0">Тип стін</span>
                                <select name="type_wall_id" id="type_wall_id" class="form-control">
                                    @foreach($typeWall as $key => $wall)
                                        <option value="{{$wall->id}}" {{ $setCurrentSelected[6]->id == $wall->id?'selected':''}}>{{$wall->name}}</option>
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
                            <span>Площа
                                @if($categorySlug == 'land')
                                    (соток)
                                @else
                                    (м2)
                                @endif
                            </span>
                            <input type="number" class="form-control" min="1" step="1" max="99999999999" name="square"
                                   id="square" value="{{ $obekt->square }}" required>
                        </div>
                    </div>
                    <hr>
                    @switch($categorySlug)
                        @case('land')
                        land
                        @break
                        @case('flat')
                        <div class="d-flex">
                            <div class="col-md-5">
                                <span>К-ть кімнат</span>
                                <input type="number" min="1" step="1" max="1000" class="form-control" id="count_room" name="count_room" value="{{ $obekt->count_room }}">
                            </div>
                            <div class="col-md-3">
                                <span>Поверх</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="level"
                                       id="level" value="{{ $obekt->level }}">
                            </div>
                            <div class="col-md-1 d-flex justify-content-center">
                                <span>/</span>
                            </div>
                            <div class="col-md-3">
                                <span>Поверховість</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" name="count_level"
                                       id="count_level" value="{{ $obekt->count_level }}">
                            </div>
                        </div>
                        @break
                        @case('house')
                        <div class="d-flex">
                            <div class="col-md-4">
                                <span>К-ть кімнат</span>
                                <input type="number" min="1" step="1" max="1000" class="form-control" id="count_room" name="count_room"  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" value="{{ $obekt->count_room }}">
                            </div>

                            <div class="col-md-4">
                                <span>К-ть поверхів</span>
                                <input type="number" class="form-control" min="1" step="1" max="1000" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="count_level"
                                       id="count_level" value="{{ $obekt->count_level }}">
                            </div>
                            <div class="col-md-4">
                                <span>Заг. площа ділянки</span>
                                <input type="number" min="1" step="1" maxlength="12" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" name="square_hause_land" id="square_hause_land" class="form-control" value="{{ $obekt->square_hause_land }}">
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
                    <span>Поточна головна фотографія</span> <hr>
                    <div class="row">
                        <div class="main-photo col-md-4">
                            <img src="{{$obekt->main_img}}" alt="current photo" width="300">
                        </div>
                    </div>
                    <hr>
                    <span>Нова фотографія</span>
                    <hr>
                    <a data-fancybox="gallery" id='img-upload-a'>
                        <img id='img-upload' src="/files/images/default/obekt.jpeg" alt="picture" class="m-1 img-fluid" width="300">
                    </a>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">Оберіть зображення
                               <input type="file" id="imgMain" name="imgMain">
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>
                </div>

                <div class="owner col-md-4 border p-2">

                    <div class="d-flex justify-content-between">
                        <h4>Власник</h4>
                        @foreach($owners as $key => $owner)
                            @if($setCurrentSelected[1] == $owner->id)
                               <span class="text-danger">{{$owner->name}}</span>
                            @endif
                        @endforeach
                    </div>
                    <hr>
                    <script src='/custom/jquery-3.2.1.min.js' type='text/javascript'></script>
                    <script src='/custom/select2/dist/js/select2.min.js' type='text/javascript'></script>
                    <link href='/custom/select2/dist/css/select2.min.css' rel='stylesheet' type='text/css'>

                    <!-- Dropdown -->
                    <select id='selUser' class="form-control w-auto" name="owner_id">
                        <option value='0' selected disabled>-Оберіть нового власника-</option>
                        @foreach($owners as $key => $owner)
                            @if($setCurrentSelected[1] == $owner->id)
                                <span class="text-danger">
                                    <option value="{{$owner->id}}" selected>{{$owner->name}} ({{$owner->phone}})</option>
                                </span>
                            @else
                                <option value="{{$owner->id}}">{{$owner->name}} ({{$owner->phone}})</option>
                            @endif

                        @endforeach
                    </select>

{{--                    <input type='button' value='Підтвердити' id='but_read' class="btn btn-primary mt-2">--}}

                    <br/>
                    <div id='result'></div>

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
                    <h4>Розміщення поточне:</h4>
                    <div class="d-flex">

                        <div class="rayon">
                            <input type="text" name="rayonCurrentName" id="rayonCurrentName" value="{{$setCurrentSelected[3]->rayon ?? ''}}" class="form-control" readonly>
                            <input type="text" class="invisible" id="rayonCurrent" name="rayonCurrent" value="{{$setCurrentSelected[3]->id ?? ''}}">
                        </div>
                        @if($setCurrentSelected[4]->city ?? '' != '')
                           <div class="city">
                               <input type="text" name="cityCurrentName" id="cityCurrentName" value="{{$setCurrentSelected[4]->city ?? ''}}" class="form-control" readonly>
                               <input type="text" class="invisible" id="cityCurrent" name="cityCurrent" value="{{$setCurrentSelected[4]->id ?? ''}}">
                           </div>
                        @else
                            <div class="rayon_city">
                                <input type="text" class="invisible" id="rayonCityCurrent" name="rayonCityCurrent" value="{{$setCurrentSelected[5]->id ?? ''}}">
                                <input type="text" name="rayonCityCurrentName" id="rayonCityCurrentName" value="{{$setCurrentSelected[5]->rayon_city ?? ''}}" class="form-control" readonly>
                            </div>
                        @endif

                    </div>
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
                    <select name="location_city_rayon_id" id="location_city_rayon_id" class="form-control invisible" style="margin-top: -30px">
                        <option disabled selected>Оберіть район міста</option>
                        @foreach($location[2] as $key => $rayon_city)
                            <option value="{{$rayon_city->id}}">{{$rayon_city->rayon_city}}</option>
                        @endforeach
                    </select>

                    <label>Адреса</label>
                    <input type="text" name="address" id="address" class="form-control" value="{{$obekt->address }}">

                    <input type="text" name="note" id="note" class="form-control" value="{{ $obekt->note }}">
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
