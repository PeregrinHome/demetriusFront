@extends('site.layouts.app')

@section('content')

    <section class="contacts__info overflow-hidden">
        <div class="contacts__info--background contacts__info--orientation">
            <div class="container">
                <div class="row">
                    <div class="contacts__info__block-center col-xl-auto order-1 order-xl-2">
                        <p class="contacts__info__block-center--text mainpage-span-3 font-pt-sans text-center">Москва, Волгоградский проспект, 47, <br>м. Текстильщики, БЦ «Cube», <br>подъезд 4, этаж 2</p>
                    </div>
                    <div class="contacts__info__block-left col-md order-2 order-xl-1 align-self-end">
                        <p class="contacts__info__block-left--text">Запись на обучение <a href="tel:+79057042131" class="contacts__link">+<span class="border-bottom-dashed">7 905 704-21-31</span></a> <br>или <a href="#" class="contacts__link border-bottom-solid">Вконтакте Оксана Вашешникова</a></p>
                    </div>
                    <div class="contacts__info__block-right col-md order-3 display-flex align-self-end">
                        <p class="contacts__info__block-right--text">Запись моделей <a href="tel:+79851276390" class="contacts__link">+<span class="border-bottom-dashed">7 985 127-63-90</span></a> <br>или <a href="#" class="contacts__link border-bottom-solid">Вконтакте Татьяна Деметриус</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-auto padding-top-bottom-2">
                    <a href="#" class="btn btn-outline-red_v2 border-width-2" data-toggle="modal" data-target="#exampleModalCenter">
                        Как к нам пройти
                    </a>
                </div>
            </div>
        </div>
    </section>
    <style>
        .contacts__form{
            position: relative;
            z-index: 2;
        }
        .section__footer-socials{
            position: relative;
            z-index: 2;
        }
        .contacts__map{
            position: relative;
            z-index: 1;
        }
    </style>
    <section class="contacts__form overflow-hidden">
        <h2 class="mainpage-h2 text-regular font-oswald">Можно оставить заявку или отзыв</h2>
        <div class="template__orientation-direct-out">
            <div class="template__orientation-direct-in" style="background: white;">
                <div class="template__orientation-direct-compensation template__orientation-direct-compensation--contacts-fix">
                    <form>
                        <div class="container">
                            <div class="row color-black">
                                <div class="col-12 col-md-6 offset-md-3">
                                    <div class="form-group">
                                        <textarea style="resize: none;" class="box-shadow-none outline-none form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>


                                    {{--<div class="template__form-inline">--}}
                                    {{--<div class="template__form-inline__item text-nowrap margin-right-1-rem">--}}
                                    {{--<p>Укажите телефон</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="template__form-inline__item margin-right-1-rem">--}}
                                    {{--<div class="template__form-inline__item-input-phone">--}}
                                    {{--<div class="template__form-inline__item-input-phone-wrap">--}}
                                    {{--<div>--}}
                                    {{--<span>+7</span>--}}
                                    {{--</div>--}}
                                    {{--<div>--}}
                                    {{--<input type="phone" class="outline-none w-100 border-0">--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="template__form-inline__item-input-phone__line"></div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="template__form-inline__item text-nowrap">--}}
                                    {{--<p>или почту&nbsp;</p>--}}
                                    {{--</div>--}}
                                    {{--<div class="template__form-inline__item">--}}
                                    {{--<div class="template__form-inline__item-input">--}}
                                    {{--<input type="email" class="outline-none w-100 border-0">--}}
                                    {{--<div class="template__form-inline__item-input__line"></div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}

                                    <div class="row">
                                        <div class="col-6 col-xl-3 padding-right-left-0-xl text-nowrap">
                                            <p>Укажите телефон</p>
                                        </div>
                                        <div class="col-6 col-xl-4 padding-left-0-xl padding-right-2-xl">
                                            <div class="template__form-inline__item-input-phone">
                                                <div class="template__form-inline__item-input-phone-wrap">
                                                    <div>
                                                        <span>+7&nbsp;</span>
                                                    </div>
                                                    <div>
                                                        <input type="tel" class="phone-mask2 outline-none w-100 border-0">
                                                    </div>
                                                </div>
                                                <div class="template__form-inline__item-input-phone__line"></div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-xl-2 padding-right-left-0-xl text-nowrap text-right">
                                            <p>или почту&nbsp;</p>
                                        </div>
                                        <div class="col-6 col-xl-3 padding-right-left-0-xl">
                                            <div class="template__form-inline__item-input">
                                                <input type="email" class="outline-none w-100 border-0">
                                                <div class="template__form-inline__item-input__line"></div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <div class="col-12 col-md-3">
                                    <div class="form-group template__select">
                                        <select class="box-shadow-none form-control form-control-sm" id="exampleFormControlSelect1">
                                            <option>Выбрать курс</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                        {{--<div class="template__select--arrow"></div>--}}
                                    </div>
                                </div>
                                <div class="col-12 col-md-9">
                                    <div class="padding-top-bottom-1 float-right">
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

    <section class="contacts__map position-relative overflow-hidden">
        <a href="https://yandex.ru/maps/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;source=constructorStatic" target="_blank"><div id="contacts__map--map--md" class="contacts__map--map contacts__map--map--md images-cover" style="background-image: url('https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;width=600&amp;height=450&amp;lang=ru_RU');"></div></a>
        <div id="contacts__map--map" class="contacts__map--map hidden-md"></div>
    </section>

    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="howToGet__modal-content modal-content">
                <div class="modal-body">
                    <p class="font-pt-sans articlepage-p text-center padding-top-bottom-2 text-italic">
                        <span style="color: #B61D8E;">м. Текстильщики,</span> Волгоградский проспект, 47, подъезд 4, 2 этаж, Бизнец-центр «Cube» <br>От метро пешком 5 минут
                    </p>
                    <div class="howToGet__image"><img src="/images/pages/contacts/1.png" alt="1"></div>
                    <p class="font-pt-sans articlepage-p text-center padding-top-1-bottom-2 text-italic">Последний вагон из центра налево</p>
                    <div class="howToGet__image"><img src="/images/pages/contacts/2.png" alt="2"></div>
                    <p class="font-pt-sans articlepage-p text-center padding-top-1-bottom-2 text-italic">Выход на Шоссейную улицу, 8</p>
                    <div class="howToGet__image"><img src="/images/pages/contacts/3.png" alt="3"></div>
                    <p class="font-pt-sans articlepage-p text-center padding-top-1-bottom-2 text-italic">Выходите к дороге</p>
                    <div class="howToGet__image"><img src="/images/pages/contacts/4.png" alt="4"></div>
                    <p class="font-pt-sans articlepage-p text-center padding-top-1-bottom-2 text-italic">Поворачиваете направо и идете прямо вдоль дороги под мост</p>
                    <div class="howToGet__image"><img src="/images/pages/contacts/5.png" alt="5"></div>
                    <br>
                    <div class="howToGet__image"><img src="/images/pages/contacts/6.png" alt="6"></div>
                    <br>
                    <div class="howToGet__image"><img src="/images/pages/contacts/7.png" alt="7"></div>
                    <br>
                    <div class="howToGet__image"><img src="/images/pages/contacts/8.png" alt="8"></div>
                    <p class="font-pt-sans articlepage-p text-center padding-top-1-bottom-2 text-italic">Подъезд 4. <br>
                        На здании вывеска «Волгоградский проспект, 47»</p>
                    <div class="howToGet__image"><img src="/images/pages/contacts/9.png" alt="9"></div>
                    <p class="font-pt-sans articlepage-p text-center padding-top-1-bottom-2 text-italic">Мы на втором этаже, справа от лестницы. <br>
                        Там мы вас ждем!</p>


                </div>
            </div>
        </div>
    </div>

    <script>
        function dhtmlLoadScript(url)
        {
            var e = document.createElement("script");
            e.src = url;
            e.type="text/javascript";
            document.getElementsByTagName("body")[0].appendChild(e);
        }
    </script>
@endsection