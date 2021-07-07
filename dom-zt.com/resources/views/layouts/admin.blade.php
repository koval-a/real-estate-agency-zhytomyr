<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - АГЕНТСТВО НЕРУХОМОСТІ ЖИТОМИР</title>
    <!-- Icon -->
    <link rel="shortcut icon" href="https://static.tildacdn.com/tild3938-3435-4465-a433-303638313134/123.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Bootsrap Icons -->
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">

    <link rel="stylesheet" href="/assets/css/app.css">

    <!--Custom Style -->
    <link rel="stylesheet" href="/custom/css/rieltor.css">
    <link rel="stylesheet" href="/custom/css/blog.css">

    <!-- Select2  -->

    <!-- JQuery -->
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

    <!-- -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

</head>

<body>
<div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo pt-5">
                            <a href="/"><img src="https://static.tildacdn.com/tild3938-3435-4465-a433-303638313134/123.png" alt="Logo" srcset="" class="img-fluid w-100 h-auto"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">

                        <li class="sidebar-title">
                            <div class="d-flex justify-content-between">
                                <img src="/files/images/users/{{ Auth::user()->avatar }}" alt="avatar" class="img-fluid w-25 avatar avatar-xl border">
                              <div>
                                  <span>{{ Auth::user()->name }}</span> <br>
                                  <span class="text-secondary">{{ Auth::user()->email }}</span>
                              </div>
                            </div>
                        </li>

                        <li class="sidebar-title">Меню</li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.home') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Панель</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Обєкти нерухомості</span>
                            </a>
                            <ul class="submenu">
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.view', 'flat') }}">Квартири</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.view', 'house') }}">Будинки</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.view', 'commercial-real-estate') }}">Комерційна нерухомість</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.view', 'land') }}">Земельні ділянки</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ route('admin.allView') }}">Всі об'єкти нерухомості</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.rieltors') }}" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>Рієлтори</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.clients') }}" class='sidebar-link'>
                                <i class="bi bi-person"></i>
                                <span>Власники</span>
                            </a>
                        </li>

{{--                        <li class="sidebar-item  ">--}}
{{--                            <a href="{{ route('admin.note') }}" class='sidebar-link'>--}}
{{--                                <i class="bi bi-sticky-fill"></i>--}}
{{--                                <span>Нотатки</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li class="sidebar-title">Блог</li>

{{--                        <li class="sidebar-item  ">--}}
{{--                            <a href="application-email.html" class='sidebar-link'>--}}
{{--                                <i class="bi bi-tag-fill"></i>--}}
{{--                                <span>Категоії</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.blog') }}" class='sidebar-link'>
                                <i class="bi bi-file-text-fill"></i>
                                <span>Пости</span>
                            </a>
                        </li>

{{--                        <li class="sidebar-item  ">--}}
{{--                            <a href="application-gallery.html" class='sidebar-link'>--}}
{{--                                <i class="bi bi-image-fill"></i>--}}
{{--                                <span>Галерея</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li class="sidebar-title">Налаштування</li>

{{--                        <li class="sidebar-item  ">--}}
{{--                            <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>--}}
{{--                                <i class="bi bi-bar-chart-fill"></i>--}}
{{--                                <span>Статистика</span>--}}
{{--                            </a>--}}
{{--                        </li>--}}

                        <li class="sidebar-item  ">
                            <a href="{{ route('admin.settings') }}" class='sidebar-link'>
                                <i class="bi bi-puzzle-fill"></i>
                                <span>Інформація</span>
                            </a>
                        </li>


                        <li class="sidebar-title">
                            Аккаунт
                        </li>

                        <li class="sidebar-item">
                            <a class="text-danger sidebar-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class="bi bi-door-open text-danger"></i> <span>Вихід</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <div class="row py-2">
                <div class="col-xl-12">
                    @if(Session::get('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close btn btn-light m-2" data-dismiss="alert">&times;</button>{{Session::get('success')}}
                        </div>
                    @elseif(Session::get('failed'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close btn btn-light m-2" data-dismiss="alert">&times;</button>{{Session::get('failed')}}
                        </div>
                    @elseif(Session::get('error'))
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close btn btn-light m-2" data-dismiss="alert">&times;</button>{{Session::get('error')}}
                        </div>
                    @endif
                </div>
            </div>
            <div class="bg-transparent d-flex justify-content-between p-3 rounded">
                <div class="btn-go-to-dashboard">
                    <a href="{{ route('admin.home') }}" class="p-2 font-bold border btn btn-primary rounded"><i class="bi bi-grid-fill"></i> На головну</a>
                </div>
                <div class="d-flex">
                    <a href="/" class="btn btn-primary m-1">В каталог</a>
                    <a href="/obekts/flat" class="btn btn-outline-primary m-1">Квартири</a>
                    <a href="/obekts/house" class="btn btn-outline-info m-1">Пр. сектор</a>
                    <a href="/obekts/land" class="btn btn-outline-success m-1">Земля</a>
                    <a href="/obekts/commercial-real-estate" class="btn btn-outline-danger m-1">Ком. нерх.</a>
                </div>
            </div>
            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted pt-5">
                    <div class="float-start">
                        <p><?php echo date('Y');?> &copy; АН "ЖИТОМИР"</p>
{{--                        {{ config('app.name') }}--}}
                    </div>
                    <div class="float-end">
                        <p>Зроблено з <span class="text-danger"><i class="bi bi-heart"></i></span> від <a
                                href="http://yarik.lukyanchuk.com">Я.Лук'янчук</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>

{{--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>--}}

{{--    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>--}}

    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/popper.min.js"></script>
{{--    <script src="/assets/vendors/apexcharts/apexcharts.js"></script>--}}
{{--    <script src="/assets/js/pages/dashboard.js"></script>--}}

    <script src="/assets/js/main.js"></script>
</body>

</html>
