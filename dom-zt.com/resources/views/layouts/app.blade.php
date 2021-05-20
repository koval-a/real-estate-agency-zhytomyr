<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/custom/css/style.css">
    <link rel="stylesheet" href="/custom/css/blog.css">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <div id="app" class="wrapper">

        <header class="header fixed-top">
            <div class="container-fluid container__header">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm w-100">
                    <div class="container">

                        <a class="navbar-brand align-items-center d-flex" href="{{ url('/') }}">
                            <img src="https://static.tildacdn.com/tild3938-3435-4465-a433-303638313134/123.png" alt="" class="logo__img2 img-fluid" width="100">
{{--                            {{ config('app.name', 'Laravel') }}--}}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav pt-2 ml-auto">
                                <li class="nav__item ">
                                    <a href="/" class="nav__link">Каталог</a>
                                </li>
                                <li class="nav__item">
                                    <a href="{{ route('about') }}" class="nav__link">Про нас</a>
                                </li>
                                <li class="nav__item">
                                    <a href="/#services" class="nav__link">Послуги</a>
                                </li>
                                <li class="nav__item">
                                    <a href="/#reviews" class="nav__link">Відгуки</a>
                                </li>
                                <li class="nav__item">
                                    <a href="{{ route('blog.list') }}" class="nav__link">Блог</a>
                                </li>
                                <li class="nav__item">
                                    <a href="{{ route('contact') }}" class="nav__link">Контакти</a>
                                </li>
{{--                                <li class="nav__item">--}}
{{--                                    <a href="" class="nav__link nav__link--tel">0970010001</a>--}}
{{--                                </li>--}}
                                <!-- Authentication Links -->
                                @guest

                                    <li class="nav__item">
                                        <a href="" class="nav__link nav__link--tel">+380970010001</a>
                                    </li>

                                @else
                                    <li class="nav__item1 nav-item dropdown" style="margin-top: -10px;">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-danger" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                            @if(Auth::user()->is_admin == 1)
                                                <a class="dropdown-item" href="{{ route('admin.home') }}">
                                                    Дашбоард<span class="text-danger"> Адмін</span>
                                                </a>
                                            @else
                                                <a class="dropdown-item" href="{{ route('home') }}">
                                                    Дашбоард<span class="text-danger"> Ріелтор</span>
                                                </a>
                                            @endif

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Вихід') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </nav>

        </header>
{{--        <hr>--}}
        <main class="py-4_ mt-5 pt-5">
            @yield('content')
        </main>
        <hr>
        <footer class="footer">
            <div class="container">
                <div class="footer__block">
                    <div class="footer__logo">
                        <div class="footer__image">
                            <img src="https://static.tildacdn.com/tild3938-3435-4465-a433-303638313134/123.png" alt="агенство нерухомості Житомир" class="footer__img">
                        </div>
                    </div>
                    <ul class="footer__contacts-list">
                        <a class="footer__link--adress" href="https://goo.gl/maps/9SruKiYB3DcwT1YJ6" target="_blank">
                            <li class="footer__item footer__item--adress">
                                {{ Config::get('adminsettings.contact.address')}}
                            </li>
                        </a>
                        <a class="footer__link--mail" href="mailto:{{ Config::get('adminsettings.contact.email')}}" target="_blank">
                            <li class="footer__item footer__item--mail">{{ Config::get('adminsettings.contact.email')}}</li>
                        </a>
                        <a class="footer__link--tel" href="tel:{{ Config::get('adminsettings.contact.phone_1')}}">
                            <li class="footer__item footer__item--nomber">{{ Config::get('adminsettings.contact.phone_1')}}</li>
                        </a>
                        <a class="footer__link--tel" href="tel:{{ Config::get('adminsettings.contact.phone_2')}}">
                            <li class="footer__item footer__item--nomber">{{ Config::get('adminsettings.contact.phone_2')}}</li>
                        </a>
                        <li class="footer__item footer__item--social">
                            <a class="footer__link--social"
                               href="https://www.facebook.com/%D0%90%D0%9D-%D0%96%D0%B8%D1%82%D0%BE%D0%BC%D0%B8%D1%80-597840607255306/"
                               target="_blank">
                        <li class="footer__item social__image">
                            <img src="/custom/icons/svg__fb.svg" alt="" class="social__img">
                        </li>
                        </a>
                        </li>
                    </ul>
                    <ul class="footer__catalog-list">
                        <a href="./index.html" class="footer__link">Головна</a>
                        <a href="./index.html" class="footer__link">Про нас</a>
                        <a href="./index.html" class="footer__link">Наші послуги</a>
                        <a href="./index.html" class="footer__link">Блог</a>
                        <a href="./index.html" class="footer__link">Контакти</a>
                    </ul>
                    <ul class="footer__info-list">
                        <a href="/" class="footer__link">Каталог</a>
                        <a href="./index.html" class="footer__link">Квартири</a>
                        <a href="./index.html" class="footer__link">Приватний сектор</a>
                        <a href="./index.html" class="footer__link">Земельні ділянки</a>
                        <a href="./index.html" class="footer__link">Комерційна нерухомість</a>
                    </ul>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <ul class="list-styke-none d-flex">
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                Developed on Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                <br>
                Made with ❤️ by <a href="https://yarik.lukyanchuk.com" style="color: #e12;"> Lukyanchuk </a>
            </div>
        </footer>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/custom/js/script.js"></script>
</body>
</html>
