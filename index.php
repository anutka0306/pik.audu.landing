<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audi Landing</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/fonts.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fontawesome-free-6.0.0-web/css/all.css" type="text/css">
    <link rel="stylesheet" href="slick/slick.css" type="text/css">
    <link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/media.css" type="text/css">

</head>
<body>
<div class="header__wrapper">
    <header class="container-fluid">
        <div class="top-menu container">
            <div class="header__logo">
                <div class="header__logo_audi">
                    <img src="images/AUDI.png">
                </div>
                <img src="images/pik.png">
            </div>
            <div class="header_logo_description">
                Ремонт и обслуживание <br>автомобилей и АУДИ
            </div>
            <div class="header__address">
                <div class="header__address_icon">
                    <img src="images/loc.svg" alt="">
                </div>
                <div class="header_address-address">
                    <p>Москва. Ибрагимова вл.31А</p>
                    <a href="#">Посмотреть на карте</a>
                </div>
            </div>
            <div class="header__audi-partners">
                <img src="images/audi-logo.png" width="67" alt="">
                <span>Партнёры по <br>качеству АУДИ</span>
            </div>
            <div class="header__phone">
                <div class="header__phone_icon">
                    <img src="images/tel-icon.png" alt="">
                </div>
                <div class="header__phone_phone">
                    <a href="tel:+74993911874" class="phone_link">+7 (499) 391-18-74</a>
                    <p class="working-now">Работаем сейчас</p>
                </div>
            </div>
            <div class="header__whatsapp">
                <div class="header__whatsapp_whatsapp"><i class="fa-brands fa-whatsapp"></i></div>
                <a href="#" class="header__callback_btn">Заказать звонок</a>
            </div>
        </div>

        <div class="banner container">
            <div class="row">
                <div class="col-lg-5 col-md-12 banner__left_wrapper">
                    <div class="banner__left-content">
                        <h1>Ремонт и техническое <br>обслуживание в <br>сертифицированном <br>автосервисе Ауди</h1>
                        <div class="banner__left-content_description">
                            Опыт с Ауди более 10 лет <br>Ремонт в день обращения <br>Гарантия до 900 дней
                        </div>
                        <div class="banner__left-content_consult">
                            <span class="consult_text">Дадим бесплатную консультацию <br>по любому вопросу с Ауди</span>
                            <a href="#" class="consult_btn">Отправить</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 banner__right_wrapper">
                    <div class="banner__right-content">

                    </div>
                </div>
            </div>
        </div>


    </header>
<div class="banner-advantages">
    <div class="banner-advantages__item">
        <img src="images/advantage1.svg" alt="#">
        <p>Осмотр ходовой<br>
            части авто<br>
            БЕСПЛАТНО</p>
    </div>
    <div class="banner-advantages__item">
        <img src="images/advantage2.svg" alt="#">
        <p>Компьютерная<br>
            диагностика<br>
            499 р.</p>
    </div>
    <div class="banner-advantages__item">
        <img src="images/advantage3.svg" alt="#">
        <p>Замена <br>масла по <br>цене 499р</p>
    </div>
</div>

</div>

<section class="car-check__request">
    <div class="container">
        <h2>Записаться на проверку</h2>
        <p class="car-check__request_description">Заполните данные для записи</p>
        <form class="car-check__request_form">
            <div class="three-field__line">
                <input type="tel" name="phone" required placeholder="Телефона для связи ( обязательное поле )">
                <input type="text" name="model" placeholder="Модель Вашего авто">
                <select name="is_work_car">
                    <option disabled selected class="option_title">Автомобиль на ходу ?</option>
                    <option value="yes">Да</option>
                    <option value="no">Нет</option>
                </select>
            </div>
            <div class="one-field__textarea">
                <textarea name="problem" placeholder="Опишите свою проблему"></textarea>
            </div>
            <div class="request-form__btn">
                <input type="submit" value="Отправить">
            </div>
        </form>
    </div>
</section>

<section class="make-often">
    <div class="container">
        <h2>Часто делают</h2>
        <div class="make-often__items">
            <div class="make-often__item">
                <a href="#">
                    <img src="images/make_often/mo1.jpg" alt="">
                </a>
                <a href="#" class="make-often__item_title">Ремонт
                    двигателя</a>
                <span class="make-often__item_description">Мотористы с опытом<br>
более 10 лет с Ауди</span>
            </div>

            <div class="make-often__item">
                <a href="#">
                    <img src="images/make_often/mo2.jpg" alt="">
                </a>
                <a href="#" class="make-often__item_title">Диагностика
                    и ремонт электрки</a>
                <span class="make-often__item_description">Диагносты сертифицированные<br>
Ауди + дилерское оборудование</span>
            </div>

            <div class="make-often__item">
                <a href="#">
                    <img src="images/make_often/mo3.jpg" alt="">
                </a>
                <a href="#" class="make-often__item_title">Ремонт
                    подвески</a>
                <span class="make-often__item_description">Сход-развал и специальный<br>
инструмент именно для<br>
автомобилей марки Ауди</span>
            </div>

            <div class="make-often__item">
                <a href="#">
                    <img src="images/make_often/mo4.jpg" alt="">
                </a>
                <a href="#" class="make-often__item_title">Техническое
                    обслуживание</a>
                <span class="make-often__item_description">Замена масла<br>
499р</span>
            </div>

            <div class="make-often__item">
                <a href="#">
                    <img src="images/make_often/mo5.jpg" alt="">
                </a>
                <a href="#" class="make-often__item_title">Ремонт АКПП/
                    Вариаторов/Роботов</a>
                <span class="make-often__item_description">ДСГ 7/6</span>
            </div>
        </div>
    </div>
</section>

<section class="photo-service">
    <div class="container">
        <h2>Фото сервиса</h2>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p class="photo-service__slider_title">
                    Техническая зона
                </p>
                <div class="photo-service__slick1">
                    <img src="images/photo-service/img1.jpg" alt="">
                    <img src="images/photo-service/img2.jpg" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <p class="photo-service__slider_title">
                    Лаунж зона
                </p>
                <div class="photo-service__slick2">
                    <img src="images/photo-service/img2.jpg" alt="">
                    <img src="images/photo-service/img1.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-video">
    <div class="container">
        <h2>Видео с нашей станции</h2>
        <div class="our-video__items">

            <div class="our-video__item">
                <iframe width="360" height="280" src="https://www.youtube.com/embed/mzBhy9Fp4m4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="our-video__item">
                <iframe width="360" height="280" src="https://www.youtube.com/embed/mzBhy9Fp4m4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <div class="our-video__item">
                <iframe width="360" height="280" src="https://www.youtube.com/embed/mzBhy9Fp4m4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

        </div>
    </div>
</section>

<section class="services">
    <div class="container">
        <h2>Все услуги</h2>
        <div class="services__items">
                <div class="services__items_line">
                <div class="services__item">
                    <img src="images/services/to.png" alt="">
                    <span>Техническое обслуживание</span>
                </div>
                <div class="services__item">
                    <img src="images/services/chod-razval.png" alt="">
                    <span>Сход-развал</span>
                </div>
                <div class="services__item">
                    <img src="images/services/detailing.png" alt="">
                    <span>Детейлинг</span>
                </div>
                <div class="services__item">
                    <img src="images/services/diagnostika.png" alt="">
                    <span>Диагностика</span>
                </div>
                <div class="services__item">
                    <img src="images/services/dizel.png" alt="">
                    <span>Ремонт дизельных двигателей</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-dvigatelya.png" alt="">
                    <span>Ремонт двигателя</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-akpp.png" alt="">
                    <span>Ремонт АКПП</span>
                </div>
            </div>
            <div class="services__items_line">
                <div class="services__item">
                    <img src="images/services/rem-elektro.png" alt="">
                    <span>Ремонт электрооборудования</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-hodovoy.png" alt="">
                    <span>Ремонт ходовой</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-podveski.png" alt="">
                    <span>Ремонт подвески</span>
                </div>
                <div class="services__item">
                    <img src="images/services/shinomontag.png" alt="">
                    <span>Шиномонтаж</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-vihlop.png" alt="">
                    <span>Ремонт выхлопной системы</span>
                </div>
                <div class="services__item">
                    <img src="images/services/tormoznaya.png" alt="">
                    <span>Тормозная система</span>
                </div>
                <div class="services__item">
                    <img src="images/services/katalizator.png" alt="">
                    <span>Замена катализатора</span>
                </div>
            </div>


        </div>

        <div class="services__items_mobile">
                <div class="services__item">
                    <img src="images/services/to.png" alt="">
                    <span>Техническое обслуживание</span>
                </div>
                <div class="services__item">
                    <img src="images/services/chod-razval.png" alt="">
                    <span>Сход-развал</span>
                </div>
                <div class="services__item">
                    <img src="images/services/detailing.png" alt="">
                    <span>Детейлинг</span>
                </div>
                <div class="services__item">
                    <img src="images/services/diagnostika.png" alt="">
                    <span>Диагностика</span>
                </div>
                <div class="services__item">
                    <img src="images/services/dizel.png" alt="">
                    <span>Ремонт дизельных двигателей</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-dvigatelya.png" alt="">
                    <span>Ремонт двигателя</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-akpp.png" alt="">
                    <span>Ремонт АКПП</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-elektro.png" alt="">
                    <span>Ремонт электрооборудования</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-hodovoy.png" alt="">
                    <span>Ремонт ходовой</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-podveski.png" alt="">
                    <span>Ремонт подвески</span>
                </div>
                <div class="services__item">
                    <img src="images/services/shinomontag.png" alt="">
                    <span>Шиномонтаж</span>
                </div>
                <div class="services__item">
                    <img src="images/services/rem-vihlop.png" alt="">
                    <span>Ремонт выхлопной системы</span>
                </div>
                <div class="services__item">
                    <img src="images/services/tormoznaya.png" alt="">
                    <span>Тормозная система</span>
                </div>
                <div class="services__item">
                    <img src="images/services/katalizator.png" alt="">
                    <span>Замена катализатора</span>
                </div>


        </div>
    </div>
</section>


<section class="our-works">
    <h2>Примеры работ</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 our-works__image">
                <div class="our-works__slider_img">
                    <img src="images/our-works/work1.jpg" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 our-works__text">
                <div class="our-works__slider_content">
                    <div>
                        <span class="our-works__slider_content_title">
                            Audi A6
                        </span>
                        <span class="our-works__slider_content_subtitle">
                            Что было сделано:
                        </span>
                        <div class="our-works__slider_content_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>


                    <div>
                        <span class="our-works__slider_content_title">
                            Audi A1
                        </span>
                        <span class="our-works__slider_content_subtitle">
                            Что было сделано:
                        </span>
                        <div class="our-works__slider_content_text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </div>
                    </div>

                </div>

                <div class="our-works__consult">
                    <span>Получить бесплатную консультацию</span>
                    <div class="request-form__btn">
                        <input type="submit" value="Отправить">
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="general-prices">
    <div class="container">
        <h2>Цены на основной ряд услуг</h2>
        <table class="table table-hover table-custom">
        <thead>
        <tr>
            <th scope="col">Название услуги</th>
            <th scope="col">Стоимость</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        <tr>
            <th scope="row">Название услуги</th>
            <td>20 000 Р</td>
        </tr>
        </tbody>
    </table>
    </div>
</section>

<section class="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 about-text__container">
                <h2>Собственный склад <br>запчастей. В наличии более <br>10 000 позиций</h2>
                <div class="about__content">
                    <p>За плечами мастеров автосервиса ПИК лежит 10-летний опыт обслуживания автомобилей марки Лексус</p>
                    <p>Мы оперативно выявим и устраним любую поломку, восстановим или заменим поврежденные детали, а также проведем регулярное ТО. В нашем сервисном центре есть склад с запчастями от проверенных производителей.</p>
                </div>
                <div class="our-works__consult">
                    <span>Получить бесплатную консультацию</span>
                    <div class="request-form__btn">
                        <input type="submit" value="Отправить">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 about-video__container">
                <div class="about__video">
                    <iframe width="570" height="428" src="https://www.youtube.com/embed/3WKhK9_jkI0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="numbers">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Мы в цифрах</h2>
            </div>
            <div class="col-lg-12 numbers__container">
                <div class="number1">
                    <span class="number__number">
                        2010
                    </span>
                    <span class="number__description">
                        Год основания
компании
                    </span>
                </div>
                <div class="number2">
                    <span class="number__number">
                        14
                    </span>
                    <span class="number__description">
                        Подъемников
в работе
                    </span>
                </div>
                <div class="number3">
                    <span class="number__number">
                        100%
                    </span>
                    <span class="number__description">
                        Сотрудников имеют
более 5 лет опыта
                    </span>
                </div>
                <div class="number4">
                    <span class="number__number">
                        60
                    </span>
                    <span class="number__description">
                        Сотрудников
в штате
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="diagnostic-callback">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Запишитесь на диагностику прямо сейчас</h2>
            </div>
            <div class="col-12 diagnostic-callback__form">
                <form method="post">
                    <input type="text" name="name" placeholder="Ваше имя">
                    <input type="tel" name="phone" placeholder="Номер телефона">
                    <input type="submit" value="Отправить">
                </form>
            </div>
            <div class="col-12 diagnostic-callback__footer">
                <div class="header__phone_icon">
                    <img src="images/tel-icon.png" alt="">
                </div>
                <span class="header__phone_icon_text">или позвоните нам по номеру +7 (499) 391-18-74</span>
                <div class="header__whatsapp_whatsapp"><i class="fa-brands fa-whatsapp"></i></div>
                <span class="header__whatsapp_whatsapp_text">Мы в WhatsApp</span>
            </div>
        </div>
    </div>
</section>

<section class="team">
    <div class="container">
        <h2>Сотрудники отвечающие за отдел Audi</h2>
        <div class="team__wrapper">
            <div class="team__item">
                <img src="images/team/team1.png" alt="">
                <span class="team__item_name">Имя Фамилия</span>
                <div class="team__item_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua. </div>
            </div>
            <div class="team__item">
                <img src="images/team/team2.png" alt="">
                <span class="team__item_name">Имя Фамилия</span>
                <div class="team__item_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua. </div>
            </div>
            <div class="team__item">
                <img src="images/team/team3.png" alt="">
                <span class="team__item_name">Имя Фамилия</span>
                <div class="team__item_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua. </div>
            </div>
            <div class="team__item">
                <img src="images/team/team4.png" alt="">
                <span class="team__item_name">Имя Фамилия</span>
                <div class="team__item_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua. </div>
            </div>
            <div class="team__item">
                <img src="images/team/team5.png" alt="">
                <span class="team__item_name">Имя Фамилия</span>
                <div class="team__item_description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua. </div>
            </div>
        </div>
    </div>
</section>

<section class="reviews">
    <div class="container">
        <div class="row">
            <div class="col-12 reviews__title">
                <h2>Отзывы наших клиентов</h2>
            </div>
            <div class="col-12 reviews__links">
                <ul class="nav nav-tabs reviews__tablist" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab" aria-controls="all" aria-selected="true">Все отзывы</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="google-tab" data-bs-toggle="tab" data-bs-target="#google" type="button" role="tab" aria-controls="google" aria-selected="false">Google Maps</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="gis-tab" data-bs-toggle="tab" data-bs-target="#gis" type="button" role="tab" aria-controls="gis" aria-selected="false">2ГИС</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="yandexmap-tab" data-bs-toggle="tab" data-bs-target="#yandexmap" type="button" role="tab" aria-controls="yandexmap" aria-selected="false">Яндекс.Карты</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <div class="all-reviews">
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="google" role="tabpanel" aria-labelledby="google-tab">
                        <div class="google-reviews">
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="gis" role="tabpanel" aria-labelledby="gis-tab">
                        <div class="gis-reviews">
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yandexmap" role="tabpanel" aria-labelledby="yandexmap-tab">
                        <div class="yandex-reviews">
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                            <div class="reviews__slider_item">
                                <div class="reviews__slider_item_header">
                                    <div class="reviews__slider_item_icon">
                                        <span>ИФ</span>
                                    </div>
                                    <div class="reviews__slider_item_name">
                                        <span>Имя Фамилия</span>
                                        <span>24 июня</span>
                                    </div>
                                    <div class="reviews__slider_item_rating">
                                        <div class="reviews__slider_item_stars">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                            <img src="images/icons/star.svg" alt="">
                                        </div>
                                        <span class="reviews__slider_item_rate">5.0</span>
                                    </div>
                                </div>

                                <div class="reviews__slider_item_body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                                </div>

                                <div class="reviews__slider_item_link">
                                    <a href="#" target="_blank">Отзыв из 2ГИС</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="offers">
    <div class="container">
        <h2>Изучите наши актуальные акции</h2>
        <div class="offers__container">
            <div class="offers__item">
                <div class="offers__item_content">
                    <span class="offer_name">
                        Название акции
                    </span>
                    <span class="offer_subtitle">
                        ЗАМЕНА МАСЛА в АКПП
                    </span>
                    <span class="offer_price">от 9500 руб</span>
                </div>
                <div class="offers__item_button">
                    <a class="offer_btn">Записаться</a>
                </div>
            </div>
            <div class="offers__item">
                <div class="offers__item_content">
                    <span class="offer_name">
                        Название акции
                    </span>
                    <span class="offer_subtitle">
                        ЗАМЕНА МАСЛА в АКПП
                    </span>
                    <span class="offer_price">от 9500 руб</span>
                </div>
                <div class="offers__item_button">
                    <a class="offer_btn">Записаться</a>
                </div>
            </div>
            <div class="offers__item">
                <div class="offers__item_content">
                    <span class="offer_name">
                        Название акции
                    </span>
                    <span class="offer_subtitle">
                        ЗАМЕНА МАСЛА в АКПП
                    </span>
                    <span class="offer_price">от 9500 руб</span>
                </div>
                <div class="offers__item_button">
                    <a class="offer_btn">Записаться</a>
                </div>
            </div>
            <div class="offers__item">
                <div class="offers__item_content">
                    <span class="offer_name">
                        Название акции
                    </span>
                    <span class="offer_subtitle">
                        ЗАМЕНА МАСЛА в АКПП
                    </span>
                    <span class="offer_price">от 9500 руб</span>
                </div>
                <div class="offers__item_button">
                    <a class="offer_btn">Записаться</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="certificates">
    <div class="container">
        <h2>Сертификаты</h2>
        <div class="certificates__slider">
            <div class="certificate">
                <img src="images/certificates/cert1.png" alt="">
            </div>
            <div class="certificate">
                <img src="images/certificates/cert2.png" alt="">
            </div>
            <div class="certificate">
                <img src="images/certificates/cert3.png" alt="">
            </div>
            <div class="certificate">
                <img src="images/certificates/cert1.png" alt="">
            </div>
            <div class="certificate">
                <img src="images/certificates/cert2.png" alt="">
            </div>
        </div>
    </div>
</section>

<section class="faq">
    <div class="container">
        <h2>Часто задаваемые вопросы</h2>
        <div class="accordion faq-accordion" id="accordionExample">
            <div class="accordion-item">
                <p class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Можно ли находиться рядом с автомобилем?
                    </button>
                </p>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Не можно, а нужно. Мы сами вас пригласим, проведём к автомобилю, прямо на машине покажем результаты диагностики и объясним что нужно делать. Самое главное — не стоять у механика за спиной во время работы и не подходить ближе очерченной линии. Технику безопасности никто не отменял, люди способны потерять 4 пальца на руке за несколько секунд. Запомните, что ремонтная зона не потенциально, а фактически опасна. Нахождение в цеху не повод подходить к другим автомобилям, вам самим не понравится если посторонние люди будут что-то высматривать и выискивать у вас.

                            Мы отвечаем за вас, когда вы находитесь у нас в цеху, и обязаны наблюдать за вами. Совершенно очевидно, что это не добавляет нам скорости в части проведения работ. Когда вы в цеху, все механики и мастера одним глазом обязаны за вами приглядывать. Это тормозит не только ваш ремонт, но и ремонт всех окружающих автомобилей.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Почему мы интересуемся VIN-номером авто?

                    </button>
                </p>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Зачем вам СТС?

                    </button>
                </p>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Зачем вам мои права?
                    </button>
                </p>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        Зачем вам история моего обслуживания?
                    </button>
                </p>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                        Со своими запчастями можно?
                    </button>
                </p>
                <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                        А если с автомобилем что-то случится?

                    </button>
                </p>
                <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                        Есть ли комната ожидания?
                    </button>
                </p>
                <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                        Колёса тянете пистолетом или нет?

                    </button>
                </p>
                <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                        Откуда берутся цены на работы?
                    </button>
                </p>
                <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <p class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                        Есть ли у вас специнструмент?
                    </button>
                </p>
                <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <h2>Полезный блог</h2>
        <div class="blog__container">
            <div class="blog__item">
                <div class="blog__item_img">
                    <img src="images/blog/blog1.png" alt="">
                </div>
                <span class="blog__item_name">Название новости</span>
                <div class="blog__item_short-text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua. orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua.</p>
                </div>
                <a href="#" class="blog__item_link">Читать подробнее</a>
            </div>
            <div class="blog__item">
                <div class="blog__item_img">
                    <img src="images/blog/blog2.png" alt="">
                </div>
                <span class="blog__item_name">Название новости</span>
                <div class="blog__item_short-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua.
                </div>
                <a href="#" class="blog__item_link">Читать подробнее</a>
            </div>
            <div class="blog__item">
                <div class="blog__item_img">
                    <img src="images/blog/blog3.png" alt="">
                </div>
                <span class="blog__item_name">Название новости</span>
                <div class="blog__item_short-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua.
                </div>
                <a href="#" class="blog__item_link">Читать подробнее</a>
            </div>
            <div class="blog__item">
                <div class="blog__item_img">
                    <img src="images/blog/blog4.png" alt="">
                </div>
                <span class="blog__item_name">Название новости</span>
                <div class="blog__item_short-text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolorem gna aliqua.
                </div>
                <a href="#" class="blog__item_link">Читать подробнее</a>
            </div>
        </div>
    </div>
</section>

<section class="map">
    <div class="container-fluid">
        <div class="map_map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A73b3d9302430dbd16e73d420280df1ed2f897383e0ea597c9c1f857762c58504&amp;width=100%25&amp;height=550&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>

        <div class="map__address">
            <div class="map__address_item">
                <span class="map__address_name">
                    Станция 1
                </span>
                <div class="map__address_address">
                    <div class="header__address_icon">
                        <img src="images/loc.svg" alt="">
                    </div>
                    <div class="map__address_address_text">
                        <span>Москва. Ибрагимова вл.31А</span>
                        <a href="https://yandex.ru/maps/213/moscow/?from=api-maps&ll=37.724954%2C55.791185&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3A73b3d9302430dbd16e73d420280df1ed2f897383e0ea597c9c1f857762c58504&z=15">Посмотреть на карте</a>
                    </div>
                </div>

                <div class="map__address_phone">
                    <div class="header__phone_icon">
                        <img src="images/tel-icon.png" alt="">
                    </div>
                    <div class="map__address_phone_text">
                        <a href="tel:+74993911874">+7 (499) 391-18-74</a>
                        <p class="working-now">Работаем сейчас</p>
                    </div>
                </div>

                <a href="#" class="map__callback_btn">Заказать обратный звонок</a>

            </div>

            <div class="map__address_item">
                <span class="map__address_name">
                    Станция 2
                </span>
                <div class="map__address_address">
                    <div class="header__address_icon">
                        <img src="images/loc.svg" alt="">
                    </div>
                    <div class="map__address_address_text">
                        <span>Москва. Ибрагимова вл.31А</span>
                        <a href="https://yandex.ru/maps/213/moscow/?from=api-maps&ll=37.724954%2C55.791185&mode=usermaps&origin=jsapi_2_1_79&um=constructor%3A73b3d9302430dbd16e73d420280df1ed2f897383e0ea597c9c1f857762c58504&z=15">Посмотреть на карте</a>
                    </div>
                </div>

                <div class="map__address_phone">
                    <div class="header__phone_icon">
                        <img src="images/tel-icon.png" alt="">
                    </div>
                    <div class="map__address_phone_text">
                        <a href="tel:+74993911874">+7 (499) 391-18-74</a>
                        <p class="working-now">Работаем сейчас</p>
                    </div>
                </div>

                <a href="#" class="map__callback_btn">Заказать обратный звонок</a>

            </div>
        </div>
    </div>
</section>

<footer class="container-fluid footer">
    <div class="top-menu container">
        <div class="header__logo">
            <div class="header__logo_audi">
                <img src="images/AUDI.png">
            </div>
            <img src="images/pik.png">
        </div>
        <div class="header_logo_description">
            Ремонт и обслуживание <br>автомобилей и АУДИ
        </div>
        <div class="header__audi-partners">
            <img src="images/audi-logo.png" width="67" alt="">
            <span>Партнёры по <br>качеству АУДИ</span>
        </div>
        <div class="header__phone">
            <div class="header__phone_icon">
                <img src="images/tel-icon.png" alt="">
            </div>
            <div class="header__phone_phone">
                <a href="tel:+74993911874" class="phone_link">+7 (499) 391-18-74</a>
                <p class="working-now">Работаем сейчас</p>
            </div>
        </div>
        <div class="header__whatsapp">
            <a href="#" class="header__callback_btn">Заказать обратный звонок</a>
        </div>
    </div>
    <div class="copiright">
        <span>Все права защищены. 2022</span>
    </div>
</footer>


    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script type="text/javascript" src="slick/slick.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/custom.js" type="text/javascript"></script>
</body>
</html>