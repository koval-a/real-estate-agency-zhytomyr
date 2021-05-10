@extends('layouts.admin')

@section('content')
    <style>
        .btn-file {
            position: relative;
            overflow: hidden;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;
            min-width: 100%;
            min-height: 100%;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }
    </style>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<div class="container-fluid">
    <div class="top-bar mb-5">

        <h1>Новий пост</h1>
        <hr>
        <div class="row py-2">
            <div class="col-xl-6">
                @if(Session::get('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('success')}}
                    </div>

                @elseif(Session::get('failed'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>{{Session::get('failed')}}
                    </div>
                @endif
            </div>
        </div>
        <form action="{{ route('admin.blog.insert') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
                <div class="col-md-8">

                        <h4>Заголовок</h4>
                        <input type="text" class="form-control" name="title" id="title" required>
                        <br>
                        <h4>Текст</h4>
                        <textarea name="text" id="text" cols="30" rows="10" class="form-control" required></textarea>
                        <br>
                        <h4>Slug</h4>
                        <span><b>Slug</b> - Посилання для відображення посту на сайті, на анг.мові вводить, пробіли заміняти на "-".</span>
                        <input type="text" class="form-control" name="slug" id="slug" required>
                        <button type="submit" class="btn btn-success mt-5 p-3">Опублікувати</button>

                </div>
                <div class="col-md-3">
                    <h4>Завантажити картинку</h4>

                    <div class="input-group">
                        <span class="input-group-btn">
                            <span class="btn btn-primary btn-file">
                                Обрати… <input type="file" id="imgInp" name="imgInp" required>
                            </span>
                        </span>
                        <input type="text" class="form-control" readonly>
                    </div>

                    <img id='img-upload' width="400" class="mt-5"/>

                </div>

        </div>
        </form>
    </div>

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
