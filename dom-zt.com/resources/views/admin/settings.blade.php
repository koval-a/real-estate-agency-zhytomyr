@extends('layouts.admin')

@section('content')

    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Налаштування</h3>
    </div>
    <div class="page-content mb-5">

        <div class="form-info-save">

            <form action="" method="POST">
                @csrf
                <h4><i class="bi bi-textarea"></i> Опис про нас</h4>
                <label for="about-us">Про нас</label>
                <textarea name="about_text" id="about_text" cols="30" rows="10" class="form-control" required>
                        {{ Config::get('adminsettings.about_text')}}
                </textarea>

                <div class="row mt-5">
                    <div class="col-md-4">
                        <h4><i class="bi bi-envelope"></i> Контакти</h4>
                        <label for="contact-address">Адреса</label>
                        <input type="text" class="form-control" id="address" value=" {{ Config::get('adminsettings.contact.address')}}" required>
                        <label for="contact-address">Телефон #1</label>
                        <input type="tel" class="form-control" id="phoneKyivstar"  value=" {{ Config::get('adminsettings.contact.phone_1')}}" required>
                        <label for="contact-address">Телефон #2</label>
                        <input type="tel" class="form-control" id="phoneLifecell"  value=" {{ Config::get('adminsettings.contact.phone_2')}}" required>
{{--                        <label for="contact-address">Телефон (Vodafone)</label>--}}
{{--                        <input type="tel" class="form-control" id="phoneVodafone" required>--}}
                        <label for="contact-address">Email</label>
                        <input type="email" class="form-control" id="email"  value=" {{ Config::get('adminsettings.contact.email')}}" required>
                    </div>
                    <div class="col-md-4">
                        <h4><i class="bi bi-link"></i> Соціальні мережі</h4>
{{--                        <label for="contact-social"><i class="bi bi-instagram"></i> Instagram</label>--}}
{{--                        <input type="text" class="form-control" id="soicalInstagram" required>--}}
                        <label for="contact-social"><i class="bi bi-facebook"></i> Facebook</label>
                        <input type="text" class="form-control" id="soicalFacebook"  value=" {{ Config::get('adminsettings.social.facebook')}}" required>
{{--                        <label for="contact-social"><i class="bi bi-youtube"></i> YouTube</label>--}}
{{--                        <input type="text" class="form-control" id="soicalYouTube" required>--}}
{{--                        <label for="contact-social"><i class="bi bi-twitter"></i> Twitter</label>--}}
{{--                        <input type="text" class="form-control" id="soicalTwitter" required>--}}
{{--                        <label for="contact-social"><i class="bi bi-telegram"></i> Telegram</label>--}}
{{--                        <input type="text" class="form-control" id="soicalTelegram" required>--}}
{{--                        <label for="contact-social">Viber</label>--}}
{{--                        <input type="text" class="form-control" id="soicalViber" required>--}}
                    </div>
{{--                    <div class="col-md-4">--}}
{{--                        <h4><i class="bi bi-clock"></i> Графік роботи</h4> <br>--}}
{{--                        <h5>Будні</h5>--}}

{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <span>Початок</span>--}}
{{--                            <span>Кінець</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="hours-start">--}}
{{--                                    <input type="number" class="form-control" min="1" max="24" step="1" id="workBudniStart" required>--}}
{{--                                    <span>Години</span>--}}
{{--                                </div>--}}
{{--                                <div class="minutes-start">--}}
{{--                                    <span> </span>--}}
{{--                                    <input type="number" class="form-control" min="0" max="59" step="1"id="workBudniEnd" required>--}}
{{--                                    <span>Хвилини</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="img">--}}

{{--                            </div>--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="hours-end">--}}
{{--                                    <input type="number" class="form-control" min="1" max="24" step="1" id="workBudniStart" required>--}}
{{--                                    <span>Години</span>--}}
{{--                                </div>--}}
{{--                                <div class="minutes-end">--}}

{{--                                    <input type="number" class="form-control" min="0" max="59" step="1"id="workBudniEnd" required>--}}
{{--                                    <span>Хвилини</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <br>--}}
{{--                        <h5>Вихідні</h5>--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="hours-start">--}}
{{--                                    <input type="number" class="form-control" min="1" max="24" step="1" id="workBudniStart" required>--}}
{{--                                    <span>Години</span>--}}
{{--                                </div>--}}
{{--                                <div class="minutes-start">--}}
{{--                                    <span> </span>--}}
{{--                                    <input type="number" class="form-control" min="0" max="59" step="1"id="workBudniEnd" required>--}}
{{--                                    <span>Хвилини</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="img">--}}

{{--                            </div>--}}
{{--                            <div class="d-flex">--}}
{{--                                <div class="hours-end">--}}
{{--                                    <input type="number" class="form-control" min="1" max="24" step="1" id="workBudniStart" required>--}}
{{--                                    <span>Години</span>--}}
{{--                                </div>--}}
{{--                                <div class="minutes-end">--}}

{{--                                    <input type="number" class="form-control" min="0" max="59" step="1"id="workBudniEnd" required>--}}
{{--                                    <span>Хвилини</span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
                <button type="submit" class="btn btn-block w-25 btn-success mt-5 p-2">Зберегти</button>
            </form>

        </div>


    </div>


@endsection
