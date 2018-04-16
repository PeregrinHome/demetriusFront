@extends('site.layouts.app')

@section('content')

    <section class="position-relative overflow-hidden pb-5">

        <div class="container pt-5 mt-3">
            <div class="row">
                <div class="col-12 padding-bottom-2-rem d-flex justify-content-center">
                    <div class="template__control template__control--inline justify-content-center">
                        <div class="template__control--inline__item">
                            <input checked value="{{ route('events') }}" onchange="document.location.href = this.value;" type="radio" id="radio_all" name="events" class="template__control--inline__item--radio-checkbox__input">
                            <label class="template__control--inline__item--radio-checkbox__label" for="radio_all">Все</label>
                        </div>
                        <div class="template__control--inline__item">
                            <input value="{{ route('events') }}" onchange="document.location.href = this.value;" type="radio" id="radio_menhaircut" name="events" class="template__control--inline__item--radio-checkbox__input">
                            <label class="template__control--inline__item--radio-checkbox__label" for="radio_menhaircut">Мастер-классы</label>
                        </div>
                        <div class="template__control--inline__item">
                            <input value="{{ route('events') }}" onchange="document.location.href = this.value;" type="radio" id="radio_womenhaircut" name="events" class="template__control--inline__item--radio-checkbox__input">
                            <label class="template__control--inline__item--radio-checkbox__label" for="radio_womenhaircut">Тренинги</label>
                        </div>
                        <div class="template__control--inline__item">
                            <input value="{{ route('events') }}" onchange="document.location.href = this.value;" type="radio" id="radio_kurs1" name="events" class="template__control--inline__item--radio-checkbox__input">
                            <label class="template__control--inline__item--radio-checkbox__label" for="radio_kurs1">В салонах</label>
                        </div>
                        <div class="template__control--inline__item norma--right">
                            <input value="{{ route('events') }}" onchange="document.location.href = this.value;" type="radio" id="radio_kurs2" name="events" class="template__control--inline__item--radio-checkbox__input">
                            <label class="template__control--inline__item--radio-checkbox__label" for="radio_kurs2">В городах</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="mainpage-h2 font-oswald pb-3">предстоящие события</h2>

        <div class="template__arrow-blog-left-universal overflow-hidden">

            <div class="template__orientation-backward-out template__arrow-blog-left-universal--fix-orientation-backward-out" style="margin-bottom: -1rem;">
                <div class="template__orientation-backward-in bg-white">
                    <div class="template__orientation-backward-compensation template__arrow-blog-left-universal--fix-orientation-backward-compensation"></div>
                </div>
            </div>
            <div class="template__arrow-blog-left__container pattern-bg-red-v2 h-auto">
                <div class="template__arrow-blog-left__container__title">
                    <p class="mainpage-span-3 color-white font-pt-sans text-center pb-0 pt-5 mb-0 mt-0">8 сентября, пт</p>
                    <h1 class="slim-mainpage-h1 color-white font-oswald">8-летие demetrius</h1>
                    <p class="articlepage-p4 color-white font-pt-sans text-center pb-5 mb-0">
                        МК Дмитрия Вашешникова. <br>
                        Обучение с Заряной Семенюк, Анной Темир и Еленой Марейчевой. <br>
                        И кое-что еще!
                    </p>
                </div>
            </div>

            <div class="template__orientation-direct-out template__arrow-blog-left-universal--fix-orientation-direct-out">
                <div class="template__orientation-direct-in bg-white">
                    <div class="template__orientation-direct-compensation template__arrow-blog-left-universal--fix-orientation-direct-compensation"></div>
                </div>
            </div>
        </div>

        <div class="template__grid-posts pt-3 mt-3">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end hover-box--md" style="background-image:url('/images/pages/event-blog/2.png');">
                                             <div class="hover-box__target mb-4">
                                                 <a href="http://demetrius.ru/educations/74" class="btn btn-danger btn-primary--gradient">
                                                     Записаться сейчас
                                                 </a>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end hover-box--md" style="background-image:url('/images/pages/event-blog/2.png');">
                                             <div class="hover-box__target mb-4">
                                                 <p class="btn btn-default btn-disabled cursor-pointer">
                                                     Мест нет
                                                 </p>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-default btn-main-black btn-with-icon">
                            <span>Еще</span> <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="position-relative overflow-hidden pb-5">
        <h2 class="mainpage-h2 font-oswald mb-0 pb-3">Архив событий</h2>

        <div class="template__grid-posts pt-0">
            <div class="container">




                <div class="row">
                    <div class="col-12 text-center">
                        <p class="articlepage-p3 pt-3 pb-3">2017</p>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="row">
                    <div class="col-12 text-center">
                        <p class="articlepage-p3 pt-3 pb-3">2016</p>
                    </div>
                </div>

                <div class="row justify-content-center">

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 zoomIn animated">
                        <div class="template__grid-posts__item">
                            <div class="template__grid-posts__item__wrap-img">
                                <div class="template__item-responsive template__item-responsive--size-1k1">
                                    <div class="template__item-responsive--content">
                                        <a class="text-decoration-none" href="#">
                                            <div class="template__grid-posts__item__img images-cover d-flex justify-content-center align-items-end" style="background-image:url('/images/pages/event-blog/2.png');">
                                                <div class="template__grid-posts__item__label">
                                                    <div class="template__grid-posts__item__label--text">
                                                        Петропавловск-Камчатский
                                                    </div>
                                                    <div class="template__grid-posts__item__label--angle"></div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="template__grid-posts__item__text bg-black">
                                <p class="articlepage-p4 color-white font-pt-sans text-uppercase margin-none padding-1-rem">Мастер-класс
                                    <br>Дианы болдыревой <br>
                                    «идеальное каре»
                                </p>
                                <p class="articlepage-p4 color-white font-pt-sans margin-none margin-top-auto padding-left-1-rem padding-right-1-rem">
                                    6 сентября, ср
                                </p>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="row">
                    <div class="col-12 text-center">
                        <button class="btn btn-default btn-main-black btn-with-icon">
                            <span>Еще</span> <i class="fa fa-cog fa-spin" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative overflow-hidden pb-5">

        <h2 class="mainpage-h2 font-oswald mb-0 pb-0 position-relative z-index-6">О событиях</h2>

        <div class="template__arrow-blog-left-universal" style="position: relative; width: 102%; left: -1%;">

            <div class="template__orientation-direct-out template__arrow-blog-left-universal--fix-orientation-direct-out" style="margin-top: -4rem;">
                <div class="template__orientation-direct-in bg-white">
                    <div class="template__orientation-direct-compensation template__arrow-blog-left-universal--fix-orientation-direct-compensation"></div>
                </div>
            </div>

            <div class="template__arrow-blog-left-universal__block padding-top-bottom-3-rem">
                <div class="pattern-bg-gray2">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-md-8 pt-5 pb-5">
                                <p class="font-pt-sans">
                                    Школа Demetrius не просто обучает. Мы создаём события в парикмахерской среде.
                                    Благодаря нам в Россию пришло образование от самых выдающихся преподавателей-парикмахеров со всего мира, и мы готовы поделиться им с вами. Наш профиль – это уроки для парикмахеров, мастер-классы, тренинги, шоу и съёмки коллекций. Получив бесценный опыт от иностранных партнеров, мы знаем, как спланировать и организовать мероприятие в соответствие с самыми высокими мировыми стандартами.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="template__orientation-backward-out template__arrow-blog-left-universal--fix-orientation-backward-out template__arrow-blog-left-universal--fix-1">
                <div class="template__orientation-backward-in bg-white">
                    <div class="template__orientation-backward-compensation template__arrow-blog-left-universal--fix-orientation-backward-compensation"></div>
                </div>
            </div>
        </div>

        <div class="position-relative z-index-6 text-center" style="top: -2rem;">
            <a href="#" class="btn btn-danger btn-primary--gradient">
                Заказать событие
            </a>
        </div>

    </section>

    <section class="position-relative overflow-hidden">
        <h2 class="mainpage-h2 font-oswald position-relative z-index-6">Путь чемпиона</h2>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center">
                        Идеальные условия для оценки своих сил. Любой, даже выступающий в конкурсе впервые, <br>
                        сможет преодолеть страх соревнований, получит непредвзятую оценку собственного <br>
                        мастерства и экспертную помощь лучших мастеров страны.
                    </p>
                </div>
            </div>
        </div>
        <div class="w-100 position-relative">
            <img class="events-footer--img" src="/images/static/pc.png" alt="">
            <div class="events-footer--text text-center">
                <p>
                    <b>
                        Путь чемпиона - твой шанс проявить себя! <br>
                        24 ноября 2017 года!
                    </b>
                </p>
                <div class="text-center">
                    <a href="#" class="btn btn-danger btn-primary--gradient">
                        Участвовать
                    </a>
                </div>
            </div>
        </div>
    </section>

    <style>
        .section__footer-socials{
            margin-top: -2rem;
            z-index: 1;
        }

        @media (min-width: 2000px) {
            .section__footer-socials{
                margin-top: -5rem;
            }
        }
    </style>

@endsection