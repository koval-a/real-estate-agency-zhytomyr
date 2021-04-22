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
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">


    <link rel="stylesheet" href="/custom/css/rieltor.css">
</head>

<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="/"><img src="https://static.tildacdn.com/tild3938-3435-4465-a433-303638313134/123.png" alt="Logo" srcset="" class="img-fluid w-100 h-auto"></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Меню</li>

                    <li class="sidebar-item">
                        <a href="/manage/rieltor/dashboard" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Панель</span>
                        </a>
                    </li>

                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-stack"></i>
                            <span>Обєкти нерухомості</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="component-alert.html">Квартири</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-badge.html">Будинки</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-breadcrumb.html">Комерційна нерухомість</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="component-breadcrumb.html">Земельні ділянки</a>
                            </li>
                        </ul>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="/manage/rieltor/my-note" class='sidebar-link'>
                            <i class="bi bi-sticky-fill"></i>
                            <span>Нотатки</span>
                        </a>
                    </li>

                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <div id="main">

        @yield('content')

        <footer class="mt-5 pt-5">
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p><?php echo date('Y');?> &copy; {{ config('app.name') }} - АГЕНТСТВО НЕРУХОМОСТІ ЖИТОМИР</p>
                </div>
                <div class="float-end">
                    <p> Зроблено з <span class="text-danger"><i class="bi bi-heart"></i></span> від <a
                            href="http://yarik.lukyanchuk.com">Я.Лук'янчук</a></p>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>

<script src="/assets/vendors/apexcharts/apexcharts.js"></script>
<script src="/assets/js/pages/dashboard.js"></script>

<script src="/assets/js/main.js"></script>
</body>

</html>
