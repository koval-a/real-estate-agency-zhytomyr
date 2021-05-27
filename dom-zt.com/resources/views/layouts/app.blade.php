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
                            <img src="/custom/icons/logo.png" alt="logo" class="logo__img2 img-fluid" width="100">
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
                                        <a href="tel:+38 (096) 203 02 60" class="nav__link nav__link--tel">+38 (096) 203 02 60</a>
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
        <hr class="border-danger">
        <footer class="footer bg-light">
            <div class="container">
                <div class="footer__block">
                    <div class="footer__logo">
                        <div class="footer__image">
                            <img src="/custom/icons/logo.png" alt="logo" class="img-fluid">
                        </div>
                        <div class="footer__copyright">

                                @if (Route::has('login'))

                                        <a class="text-secondary mr-1" href="{{ route('login') }}">
                                            &#127963;
                                        </a>
                                @endif

                                АН "Житомир" &copy 2017- <?php echo date('Y'); ?>
                        </div>
                        <div class="footer__lav text-left">
                            Всі права захищені.
                        </div>
                    </div>
                    <ul class="footer__contacts-list">
                        <li class="footer__contacts-item">
                            <a class="footer__contacts__link" href="https://goo.gl/maps/9SruKiYB3DcwT1YJ6" target="_blank">
                                {{ Config::get('adminsettings.contact.address')}}
                            </a>
                        </li>
                        <li class="footer__contacts-item">
                            <a class="footer__contacts__link" href="mailto:{{ Config::get('adminsettings.contact.email')}}" target="_blank">
                                {{ Config::get('adminsettings.contact.email')}}
                            </a>
                        </li>
                        <li class="footer__contacts-item">
                            <a class="footer__contacts__link" href="tel:{{ Config::get('adminsettings.contact.phone_1')}}">
                                {{ Config::get('adminsettings.contact.phone_1')}}
                            </a>
                        </li>
                        <li class="footer__contacts-item">
                            <a class="footer__contacts__link" href="tel:{{ Config::get('adminsettings.contact.phone_2')}}">
                                {{ Config::get('adminsettings.contact.phone_2')}}
                            </a>
                        </li>
                        <li class="footer__contacts-item">
                            <a class="footer__contacts__link footer__contacts__link--social__image d-flex align-items-center justify-content-left"
                               href="https://www.facebook.com/%D0%90%D0%9D-%D0%96%D0%B8%D1%82%D0%BE%D0%BC%D0%B8%D1%80-597840607255306/"
                               target="_blank">
                                <img src="/custom/icons/svg__fb.svg" alt="social image facebook" class="social__img1" width="30">
                                <span class="ml-2">Facebook</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="footer__catalog-list">
                        <li class="footer__catalog-item">
                            <a href="/" class="footer__catalog__link">Головна</a>
                        </li>
                        <li class="footer__catalog-item">
                            <a href="/about-us" class="footer__catalog__link">Про нас</a>
                        </li>
                        <li class="footer__catalog-item">
                            <a href="./#services" class="footer__catalog__link">Наші послуги</a>
                        </li>
                        <li class="footer__catalog-item">
                            <a href="/blog" class="footer__catalog__link">Блог</a>
                        </li>
                        <li class="footer__catalog-item">
                            <a href="/contact" class="footer__catalog__link">Контакти</a>
                        </li>
                    </ul>
                    <ul class="footer__info-list">
                        <li class="footer__info-item">
                            <a href="/" class="footer__info__link">Каталог</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="/obekts/flat" class="footer__info__link">Квартири</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="/obekts/house" class="footer__info__link">Приватний сектор</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="/obekts/land" class="footer__info__link">Земельні ділянки</a>
                        </li>
                        <li class="footer__info-item">
                            <a href="/obekts/commercial-real-estate" class="footer__info__link">Комерційна нерухомість</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="container d-flex justify-content-between align-items-center">
                <ul class="list-styke-none m-0">
                    @if (Route::has('login'))
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link p-0 text-secondary" href="{{ route('login') }}">--}}
{{--                                &#127963;--}}
{{--                            </a>--}}
{{--                        </li>--}}
                    @endif

                    @if (Route::has('register'))
                        {{--                        <li class="nav-item">--}}
                        {{--                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                        {{--                        </li>--}}
                    @endif
                </ul>
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    {{--                    Developed on Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}

                    Made with ❤️ by <a href="https://yarik.lukyanchuk.com" style="color: #e12;"> Lukyanchuk </a>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="/custom/js/script.js"></script>
</body>
</html>
