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
                <h4>Опис про нас</h4>
                <label for="about-us">Про нас</label>
                <textarea name="about_text" id="about_text" cols="30" rows="10" class="form-control" required>
                        {{ Config::get('adminsettings.about_text')}}
                </textarea>

                <div class="row mt-5">
                    <div class="col-md-4">
                        <h4>Контакти</h4>
                        <label for="contact-address">Адреса</label>
                        <input type="text" class="form-control" id="address" required>
                        <label for="contact-address">Телефон (Kyivstar)</label>
                        <input type="tel" class="form-control" id="phoneKyivstar" required>
                        <label for="contact-address">Телефон (Lifecell)</label>
                        <input type="tel" class="form-control" id="phoneLifecell" required>
                        <label for="contact-address">Телефон (Vodafone)</label>
                        <input type="tel" class="form-control" id="phoneVodafone" required>
                        <label for="contact-address">Email</label>
                        <input type="email" class="form-control" id="email" required>
                    </div>
                    <div class="col-md-4">
                        <h4>Соціальні мережі</h4>
                        <label for="contact-social">Instagram</label>
                        <input type="text" class="form-control" id="soicalInstagram" required>
                        <label for="contact-social">Facebook</label>
                        <input type="text" class="form-control" id="soicalFacebook" required>
                        <label for="contact-social">YouTube</label>
                        <input type="text" class="form-control" id="soicalYouTube" required>
                        <label for="contact-social">Twitter</label>
                        <input type="text" class="form-control" id="soicalTwitter" required>
                        <label for="contact-social">Telegram</label>
                        <input type="text" class="form-control" id="soicalTelegram" required>
                        <label for="contact-social">Viber</label>
                        <input type="text" class="form-control" id="soicalViber" required>
                    </div>
                    <div class="col-md-4">
                        <h4>Графік роботи</h4> <br>
                        <h5>Будні</h5>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex">
                                <div class="hours-start">
                                    <span>Початок</span>
                                    <input type="number" class="form-control" min="1" max="24" step="1" id="workBudniStart" required>
                                    <span>Години</span>
                                </div>
                                <div class="minutes-start">
                                    <input type="number" class="form-control" min="1" max="59" step="1"id="workBudniEnd" required>
                                    <span>Хвилини</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="hours-end">
                                    <span>Кінець</span>
                                    <input type="number" class="form-control" min="1" max="24" step="1" id="workBudniStart" required>
                                    <span>Години</span>
                                </div>
                                <div class="minutes-end">
                                    <input type="number" class="form-control" min="1" max="59" step="1"id="workBudniEnd" required>
                                    <span>Хвилини</span>
                                </div>
                            </div>
                        </div>
                        <br>
                        <h5>Вихідні</h5>
                    </div>
                </div>
                <button type="submit" class="btn btn-block w-25 btn-success mt-5 p-2">Зберегти</button>
            </form>

        </div>


    </div>


@endsection
