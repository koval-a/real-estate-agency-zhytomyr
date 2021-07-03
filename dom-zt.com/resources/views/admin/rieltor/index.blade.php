@extends('layouts.admin')

@section('content')

        <div class="reiltor mt-2 mb-5">
            <h1>Ріелтори ({{ $count }})</h1>
            <p class="">Список зареєстрованих реєлторів</p>
            <hr>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Зареєструвати
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Новий Ріелтор</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('admin.rieltor.insert') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">

                                <input type="text" name="name"  id="name" class="form-control m-1" required placeholder="Ім'я">
                                <input type="email" name="email"  id="email" class="form-control m-1" required placeholder="Email">
                                <input type="tel" name="phone"  id="phone" class="form-control m-1" required placeholder="Формат: 099-012-3456">
                                <input type="password" name="password"  id="password" class="form-control m-1" required placeholder="Пароль">
                                <h4>Завантажити Фотографію</h4>

                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <span class="btn btn-primary btn-file">
                                            Обрати…
                                                <br><input type="file" id="imgInp" name="imgInp">
                                        </span>
                                    </span>

                                    <input type="text" class="form-control" readonly>
                                </div>

                                <img id='img-upload' width="400" class="mt-5"/>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Закрити</button>
                                <button type="submit" class="btn btn-primary">Додати</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
            <div class="container-fluid">

            <table class="table">
                <thead>
                <tr class="bg-secondary text-white">
                    <td>
                        #
                    </td>
                    <td>
                        Ім'я
                    </td>
                    <td>
                        Контакти
                    </td>
                    <td>
                        Дія
                    </td>
                </tr>
                </thead>
                <tbody>
                @foreach($dataRieltors as $key => $rieltor)
                    <tr>
                        <td>
                            {{ $key + 1 }}
                        </td>
                        <td>
                            <img src="/files/images/users/{{ $rieltor->avatar }}" class="img-fluid rounded-circle" width="75" alt="avatar">
                           {{ $rieltor->name }}
                        </td>
                        <td>
                            Телефон: {{ $rieltor->phone }}
                            <br>
                            Email: {{ $rieltor->email }}
                        </td>
                        <td>
                            <a href="{{ route('admin.rieltor.delete', $rieltor->id) }}" class="btn btn-danger"><i class="fab fa-trash"></i> Видалити</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>



        </div>

        <script>
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
                        }

                        reader.readAsDataURL(input.files[0]);
                    }
                }

                $("#imgInp").change(function(){
                    readURL(this);
                });
            });
        </script>
@endsection
