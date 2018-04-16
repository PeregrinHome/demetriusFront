<?php
/**
 * @var \App\Models\Users\Trainer $trainer
 * @var \App\Models\Users\User $user
 */
?>
@extends('layouts.app')

@section('content')
    <section class="trainer overflow-hidden">
        <div class="trainer__baner overflow-hidden">

            <div class="container trainer__baner__content">
                <div class="trainer__baner__content__title">
                    <div class="trainer__baner__title__name color-red slim-mainpage-h1-special-v2 font-oswald">
                        {{ $user->getName() ?? null }}
                    </div>
                    <div class="trainer__baner__title__position h2 font-oswald text-uppercase text-regular">
                        Тренер по женским стрижкам
                    </div>
                </div>
                <div class="trainer__baner__content__img">
                    <img src="{{ $user->getAvatarLink() ?? '/images/pages/trainers/1.png' }}" alt="1.png">
                </div>
            </div>
            <div class="trainer__baner__nav trainer__baner__nav--left">
                <a href="#" class="trainer__baner__nav trainer__baner__nav--left__arrow" title="Заряна Семенюк"></a>
            </div>
            <div class="trainer__baner__nav trainer__baner__nav--right">
                <a href="#" class="trainer__baner__nav trainer__baner__nav--right__arrow" title="Заряна Семенюк"></a>
            </div>

        </div>
        <div class="trainer__first-events overflow-hidden">
            <div class="template__orientation-direct-out">
                <div class="template__orientation-direct-in main-bg-color-gray-red">
                    <div class="template__orientation-direct-compensation template__orientation-direct-compensation--trainers-fix" style="padding-top: 3rem; padding-bottom: 8.5rem;">

                        <div class="container max-width-none-md">
                            <p class="text-underline text-white" style="font-size: 1.3333rem;">Ближайшие мероприятия {{ $user->getFirstName() ?? null }}</p>
                        </div>
                        <div class="trainer__portfolio__box">
                            <div class="owl-carousel trainer__first-events--owl-carousel owl-theme">

                                <div class="trainer__first-events__item">

                                    <div class="trainer__first-events__row__item">
                                        <div class="trainer__first-events__row__item__line" style="background-color: green;"></div>
                                        <div class="trainer__first-events__row__item__text">
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">5 августа</p>
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">Кудрявые стрижки.</p>
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">Женские стрижки на кудрявые волосы</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="trainer__first-events__item">

                                    <div class="trainer__first-events__row__item">
                                        <div class="trainer__first-events__row__item__line" style="background-color: green;"></div>
                                        <div class="trainer__first-events__row__item__text">
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">6–7 августа</p>
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">Альтернативное каре.</p>
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">Женские стрижки на волосы средней длины (боб-каре)</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="trainer__first-events__item">

                                    <div class="trainer__first-events__row__item">
                                        <div class="trainer__first-events__row__item__line" style="background-color: green;"></div>
                                        <div class="trainer__first-events__row__item__text">
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">10–13 августа</p>
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">Перезагрузка.</p>
                                            <p class="text-white articlepage-p4 padding-bottom-0-rem margin-none">Женские стрижки в технике Деметриус</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="trainer__body overflow-hidden">
            <div class="template__orientation-backward-out">
                <div class="template__orientation-backward-in bg-white">
                    <div class="template__orientation-backward-compensation padding-top-3-rem padding-bottom-0 template__orientation-direct-compensation--about-school-fix">

                        <div class="trainer__body__container">
                            <div class="trainer__body__row">

                                <div class="trainer__body__col">
                                    <div class="trainer__body__col--left-text">
                                        <p class="articlepage-p"><strong>Максим Воробьев — старожил тренерского состава школы Деметриус. Всеобщий любимчик. «Бог женской стрижки», «…он управляет волосами, как по волшебству», – так о Максиме отзываются его многочисленные ученики и коллеги.</strong></p>
                                        <p class="articlepage-p">Максим Воробьев не стоит на месте в своем развитии как тренера и мастера. Он находится в постоянном поиске новых форм и исполнения женской стрижки в технике Деметриус. Следит за трендами и предвосхищает их. Создает для вас все новые и новые обучающие продукты по женской стрижке. Его цель – передать свои наработки как можно большему количеству мастеров, чтобы поднять на новый уровень парикмахерское дело и индустрию красоты в целом.</p>
                                        <p class="articlepage-p">Разумеется, талант Максима Воробьева распознают не только его ученики и коллеги, но и его преданная постоянно пополняющаяся клиентов рать. Максим является успешным мастером с огромным багажом профессиональных обучений и тренингов, действующим технологом марки профессиональной итальянской косметики «Shot». Его достижения в профессии подтверждены наградами профессиональных конкурсов. Максим Воробьев – двукратный вице-чемпион Всероссийского конкурса "Стильный город" и Первенства парикмахеров и стилистов России.</p>
                                        <p class="articlepage-p">Обучение у Максима Воробьева всегда проходит на одном дыхании. Понятное объяснение, демонстрация и четкая отработка техники женской стрижки Demetrius, всегда позитивный настрой и теплое отношение ко всем ученикам делает обучение Максима ярким и продуктивным. Побывав на его обучении раз, 90% мастеров возвращается на другие его курсы.</p>
                                    </div>
                                </div>
                                <div class="trainer__body__col">
                                    <div class="trainer__body__col--right-sidebar">


                                        <div class="trainer__body__col--right-sidebar__box padding-bottom-2-rem">

                                            <div class="template__item-responsive template__item-responsive--size-16k9">
                                                <div class="template__item-responsive--content images-cover" style="background-image: url('/images/pages/trainers/2.png');">

                                                </div>
                                            </div>

                                        </div>

                                        <div class="trainer__body__col--right-sidebar__box">
                                            <p class="text-underline color-red">Видео. Работы {{ $user->getName() ?? null }}</p>

                                            <div class="trainer__body__col--right-sidebar__row">
                                                <div class="trainer__body__col--right-sidebar__col">

                                                    <div class="template__item-responsive template__item-responsive--size-16k9">
                                                        <div class="template__item-responsive--content images-cover" style="background-image: url('/images/pages/trainers/3.png');">

                                                        </div>
                                                    </div>

                                                    <p class="articlepage-p4 text-center" style="padding-top: .6rem">Женский образ от Деметриуса</p>

                                                </div>
                                                <div class="trainer__body__col--right-sidebar__col">

                                                    <div class="template__item-responsive template__item-responsive--size-16k9">
                                                        <div class="template__item-responsive--content images-cover" style="background-image: url('/images/pages/trainers/4.png');">

                                                        </div>
                                                    </div>

                                                    <p class="articlepage-p4 text-center" style="padding-top: .6rem">Классическая стрижка <br>
                                                        в технике Деметриус</p>

                                                </div>
                                            </div>

                                            <div class="trainer__body__col--right-sidebar__row">
                                                <div class="trainer__body__col--right-sidebar__col">

                                                    <div class="template__item-responsive template__item-responsive--size-16k9">
                                                        <div class="template__item-responsive--content images-cover" style="background-image: url('/images/pages/trainers/5.png');">

                                                        </div>
                                                    </div>

                                                    <p class="articlepage-p4 text-center" style="padding-top: .6rem">Женский образ от Деметриуса</p>

                                                </div>
                                                <div class="trainer__body__col--right-sidebar__col">

                                                    <div class="template__item-responsive template__item-responsive--size-16k9">
                                                        <div class="template__item-responsive--content images-cover" style="background-image: url('/images/pages/trainers/6.png');">

                                                        </div>
                                                    </div>

                                                    <p class="articlepage-p4 text-center" style="padding-top: .6rem">Стрижка на кудрявые волосы <br>
                                                        в технике Деметриуса</p>

                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                                {{--Пример расположения с левым sidebar-ом--}}

                                {{--<div class="trainer__body__col">--}}
                                {{--<div class="trainer__body__col--left-sidebar">--}}

                                {{--</div>--}}
                                {{--</div>--}}

                                {{--<div class="trainer__body__col">--}}
                                {{--<div class="trainer__body__col--right-text">--}}
                                {{--<p class="articlepage-p4"><strong>Максим Воробьев — старожил тренерского состава школы Деметриус. Всеобщий любимчик. «Бог женской стрижки», «…он управляет волосами, как по волшебству», – так о Максиме отзываются его многочисленные ученики и коллеги.</strong></p>--}}
                                {{--<p class="articlepage-p4">Максим Воробьев не стоит на месте в своем развитии как тренера и мастера. Он находится в постоянном поиске новых форм и исполнения женской стрижки в технике Деметриус. Следит за трендами и предвосхищает их. Создает для вас все новые и новые обучающие продукты по женской стрижке. Его цель – передать свои наработки как можно большему количеству мастеров, чтобы поднять на новый уровень парикмахерское дело и индустрию красоты в целом.</p>--}}
                                {{--<p class="articlepage-p4">Разумеется, талант Максима Воробьева распознают не только его ученики и коллеги, но и его преданная постоянно пополняющаяся клиентов рать. Максим является успешным мастером с огромным багажом профессиональных обучений и тренингов, действующим технологом марки профессиональной итальянской косметики «Shot». Его достижения в профессии подтверждены наградами профессиональных конкурсов. Максим Воробьев – двукратный вице-чемпион Всероссийского конкурса "Стильный город" и Первенства парикмахеров и стилистов России.</p>--}}
                                {{--<p class="articlepage-p4">Обучение у Максима Воробьева всегда проходит на одном дыхании. Понятное объяснение, демонстрация и четкая отработка техники женской стрижки Demetrius, всегда позитивный настрой и теплое отношение ко всем ученикам делает обучение Максима ярким и продуктивным. Побывав на его обучении раз, 90% мастеров возвращается на другие его курсы.</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="trainer__portfolio">
            <div class="container max-width-none-md">
                <p class="text-underline color-red padding-bottom-1-rem">Фото. Работы {{ $user->getName() ?? null }}</p>
            </div>

            <div class="trainer__portfolio__box">
                <div class="owl-carousel trainer__portfolio--owl-carousel owl-theme">
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/7.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/8.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/9.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/10.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/7.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/8.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/9.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                    <div class="trainer__portfolio__item">
                        <img src="/images/pages/trainers/10.png" alt="" class="trainer__portfolio__item--img">
                    </div>
                </div>
            </div>

        </div>
        <div class="trainer__courses">

            <div class="container max-width-none-md">
                <p class="text-underline color-red padding-bottom-1-rem">Курсы {{ $user->getName() ?? null }}</p>
            </div>

            <div class="trainer__portfolio__box">
                <div class="owl-carousel trainer__courses--owl-carousel owl-theme">

                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: green;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Перезагрузка</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">4 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: red;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Кудрявые стрижки</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">1 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: rebeccapurple;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Пикси тренд</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: gold;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Альтернативное каре</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: fuchsia;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Концептуальный каскад</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>

                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: green;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Перезагрузка</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">4 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: red;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Кудрявые стрижки</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">1 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: rebeccapurple;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Пикси тренд</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: gold;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Альтернативное каре</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: fuchsia;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Концептуальный каскад</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>

                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: green;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Перезагрузка</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">4 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: red;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Кудрявые стрижки</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">1 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: rebeccapurple;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Пикси тренд</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: gold;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Альтернативное каре</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>
                    <div class="trainer__courses__item">
                        <div class="trainer__first-events__row__item">
                            <div class="trainer__first-events__row__item__line" style="background-color: fuchsia;"></div>
                            <div class="trainer__first-events__row__item__text">
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none text-underline">Концептуальный каскад</p>
                                <p class="articlepage-p4 padding-bottom-0-rem margin-none">2 дня</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


@stop