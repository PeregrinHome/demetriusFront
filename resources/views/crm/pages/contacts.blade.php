<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{!! SEO::generate() !!}

<!-- Bootstrap CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="{{ mix('css/all.css') }}" rel="stylesheet">
</head>
<body class="site__body">

{{--<img src="/images/pages/main/index.png" style="position: absolute;top:0;left:51.6%; margin-left: -50%; opacity: .5; z-index:-5">--}}
@includeIf('site.layouts.modules._navbar')


<section class="section__contacts-info overflow-hidden">
    <div class="section__contacts-info-background margin-top-1-rem padding-bottom-6-rem">
        <div class="container">
            <div class="row">
                <div class="col-xl-auto order-1 order-xl-2 margin-bottom-5-rem">
                    <p class="mainpage-span-3 font-oswald text-center">Москва, Волгоградский проспект, 47, <br>м. Текстильщики, БЦ «Cube», <br>подъезд 4, этаж 2</p>
                </div>
                <div class="col order-2 order-xl-1 align-self-end">
                    <p>Запись на обучение <a href="tel:+79057042131" class="contacts__link">+<span class="border-bottom-dashed">7 905 704-21-31</span></a> <br>или <a href="#" class="contacts__link border-bottom-solid">Вконтакте Оксана Вашешникова</a></p>
                </div>
                <div class="col order-3 display-flex align-self-end">
                    <p class="margin-left-auto">Запись на обучение <a href="tel:+79851276390" class="contacts__link">+<span class="border-bottom-dashed">7 985 127-63-90</span></a> <br>или <a href="#" class="contacts__link border-bottom-solid">Вконтакте Татьяна Деметриус</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto padding-top-bottom-2">
                <a href="#" class="btn btn-outline-red_v2 border-width-2">
                    Как к нам пройти
                </a>
            </div>
        </div>
    </div>
</section>
<style>
    .section__contacts-form{
        position: relative;
        z-index: 2;
    }
    .section__footer-socials{
        position: relative;
        z-index: 2;
    }
    .section__map{
        position: relative;
        z-index: 1;
    }
</style>
<section class="section__contacts-form overflow-hidden">
    <h2 class="mainpage-h2">Можно оставить заявку или отзыв</h2>
    <div class="template__orientation-direct-out">
        <div class="template__orientation-direct-in" style="background: white;">
            <div class="template__orientation-direct-compensation pt-0">
                <form>
                    <div class="container">
                        <div class="row color-black">
                            <div class="col-12 col-md-6 offset-md-3">
                                <div class="form-group">
                                    <textarea style="resize: none;" class="box-shadow-none outline-none form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="template__form-inline">
                                    <div class="template__form-inline__item text-nowrap margin-right-1-rem">
                                        <p>Укажите телефон</p>
                                    </div>
                                    <div class="template__form-inline__item margin-right-1-rem">
                                        <div class="template__form-inline__item-input-phone">
                                            <div class="template__form-inline__item-input-phone-wrap">
                                                <div>
                                                    <span>+7</span>
                                                </div>
                                                <div>
                                                    <input type="phone" class="outline-none w-100 border-0">
                                                </div>
                                            </div>
                                            <div class="template__form-inline__item-input-phone__line"></div>
                                        </div>
                                    </div>
                                    <div class="template__form-inline__item text-nowrap">
                                        <p>или почту&nbsp;</p>
                                    </div>
                                    <div class="template__form-inline__item">
                                        <div class="template__form-inline__item-input">
                                            <input type="email" class="outline-none w-100 border-0">
                                            <div class="template__form-inline__item-input__line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <div class="form-group">
                                    <select class="box-shadow-none form-control form-control-sm" id="exampleFormControlSelect1">
                                        <option>Выбрать курс</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-md-9">
                                <div class="padding-top-bottom-right-1 float-right">
                                    <button class="btn btn-outline-red_v2 border-width-2">
                                        Отправить
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;id=section__map-map"></script>
<section class="section__map position-relative overflow-hidden">
    <div id="section__map-map" class="section__map-map"></div>
</section>
@yield('content')
@include('site.layouts.modules.socials')
@include('site.layouts.modules.footer')
<script src="{{ mix('js/all.js') }}"></script>
@stack('scripts')
</body>
</html>
