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
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
</head>
<body>
    <div id="app" class="wrapper">

        <header class="header">
            <div class="container-fluid container__header">
                <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    <div class="container">

                        <a class="navbar-brand align-items-center d-flex" href="{{ url('/') }}">
                            <img src="https://static.tildacdn.com/tild3938-3435-4465-a433-303638313134/123.png" alt="" class="logo__img2 img-fluid" width="100">
                            {{ config('app.name', 'Laravel') }}
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
                                    <a href="index.html" class="nav__link">Каталог</a>
                                </li>
                                <li class="nav__item">
                                    <a href="about.html" class="nav__link">Про нас</a>
                                </li>
                                <li class="nav__item">
                                    <a href="index.html" class="nav__link">Послуги</a>
                                </li>
                                <li class="nav__item">
                                    <a href="index.html" class="nav__link">Відгуки</a>
                                </li>
                                <li class="nav__item">
                                    <a href="blog.html" class="nav__link">Блог</a>
                                </li>
                                <li class="nav__item">
                                    <a href="contacts.html" class="nav__link">Контакти</a>
                                </li>
                                <li class="nav__item">
                                    <a href="" class="nav__link nav__link--tel">0970010001</a>
                                </li>
                                <!-- Authentication Links -->
                                @guest

                                    <li class="nav__item">
                                        <a href="" class="nav__link nav__link--tel">+380970010001</a>
                                    </li>

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

                                @else
                                    <li class="nav__item1 nav-item dropdown" style="margin-top: -10px;">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
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

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer__block">
                    <div class="footer__logo">
                        <div class="footer__image">
                            <img src="/custom/icons/logo-design.svg" alt="агенство нерухомості Житомир" class="footer__img">
                        </div>
                    </div>
                    <ul class="footer__contacts-list">
                        <a class="footer__link--adress" href="https://goo.gl/maps/9SruKiYB3DcwT1YJ6" target="_blank">
                            <li class="footer__item footer__item--adress">м. Житомир, вул. Леха Качинського, буд. 1, офіс 55
                            </li>
                        </a>
                        <a class="footer__link--mail" href="mailto:zt@agensy.com" target="_blank">
                            <li class="footer__item footer__item--mail">zt@agensy.com</li>
                        </a>
                        <a class="footer__link--tel" href="tel:+3809700010101">
                            <li class="footer__item footer__item--nomber">+3809700010101</li;>
                        </a>
                        <a class="footer__link--tel" href="tel:+3809700010101">
                            <li class="footer__item footer__item--nomber">+3809700010101</li;>
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
                        <a href="./index.html" class="footer__link">Каталог</a>
                        <a href="./index.html" class="footer__link">Квартири</a>
                        <a href="./index.html" class="footer__link">Приватний сектор</a>
                        <a href="./index.html" class="footer__link">Земельні ділянки</a>
                        <a href="./index.html" class="footer__link">Комерційна нерухомість</a>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/custom/js/script.js"></script>
</body>
</html>
