@extends('layouts.rieltor')

@section('content')

    <div class="reiltor">

        <h1>Привіт, {{Auth::user()->name}}!</h1>
        <span>Ріелтор # {{Auth::user()->id}}</span>
    </div>

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-content mb-5">

                <div class="row">
                    <div class="col-6 col-lg-2 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon purple">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Profile Views</h6>
                                        <h6 class="font-extrabold mb-0">112.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon blue">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Followers</h6>
                                        <h6 class="font-extrabold mb-0">183.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon green">
                                            <i class="iconly-boldAdd-User"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Following</h6>
                                        <h6 class="font-extrabold mb-0">80.000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                        <div class="card">
                            <div class="card-body px-3 py-4-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="stats-icon red">
                                            <i class="iconly-boldBookmark"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <h6 class="text-muted font-semibold">Saved Post</h6>
                                        <h6 class="font-extrabold mb-0">112</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 col-md-6">
                        <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-xl border">
                                        <img src="/files/images/users/{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">{{ Auth::user()->name }}</h5>
                                        <h6 class="text-muted mb-0">
                                            <a href="#" class="text-danger">Вихід</a>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6 col-lg-6 col-md-6">

                        <div class="item-rieltor-obekt">
                            <h3 class="text-light1">Квартири</h3>
                            <img src="https://media-exp1.licdn.com/dms/image/C561BAQFAKxecRx6LCw/company-background_10000/0/1583261816136?e=2159024400&v=beta&t=sqoDq4EQZkPGQ3_t9a2huGdQTWAPztn1wCL8NETsp-4" alt="flat" class="shadow img-fluid rounded">
                        </div>

                    </div>

                    <div class="col-6 col-lg-6 col-md-6">

                        <div class="item-rieltor-obekt">
                            <h3 class="text-light">Будинки</h3>
                            <img src="https://q4g9y5a8.rocketcdn.me/wp-content/uploads/2020/02/home-banner-2020-02-min.jpg" alt="house" class="shadow img-fluid rounded">
                        </div>

                    </div>

                    <div class="col-6 col-lg-6 col-md-6">

                        <div class="item-rieltor-obekt">
                            <h3>Земельні ділянки</h3>
                            <img src="https://www.futurity.org/wp/wp-content/uploads/2020/01/land-use-biodiversity_1600.jpg" alt="land" class="shadow img-fluid rounded">
                        </div>

                    </div>

                    <div class="col-6 col-lg-6 col-md-6">

                        <div class="item-rieltor-obekt">
                            <h3 class="text-light">Комерційна нерухомість</h3>
                            <img src="https://officesnapshots.com/wp-content/uploads/2021/02/fca-eisner-amper-f.oudeman-med-05.jpg" alt="commere-estate" class="shadow img-fluid rounded">
                        </div>

                    </div>
                </div>

    </div>

@endsection

