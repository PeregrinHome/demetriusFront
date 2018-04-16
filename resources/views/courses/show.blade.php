<?php
/**
 * @var \App\Models\Courses\Course       $course , $nextCourse
 * @var \App\Models\Educations\Education $education
 * @var \App\Models\Reviews\Review       $review
 * @var \App\Models\Users\User           $trainer
 */
?>
@extends('layouts.app')

@section('content')
    <div class="trainer overflow-hidden">
        <div class="trainer__baner images-cover"
             style="background-image: url('/images/static/pattern-gray-v4.svg'); background-position: 0 50%; ">
            <div class="container trainer__baner__content">
                <div class="row">
                    <div class="col">
                        <div class="about-course__baner__content__img">
                            {{--<img src="/images/static/demo/1.png" alt="1.png">--}}
                            @if(!empty($course->getImageUrl()))
                                <img src="{{ $course->getImageUrl() }}" alt="Фото курса">
                            @endif
                        </div>
                    </div>
                    <div class="col">
                        <div class="about-course__baner__content__title">
                            <div class="about-course__baner__title__name h2 font-oswald text-Light text-uppercase"
                                 style="margin-bottom: 0;">
                                {{--Перезагрузка--}}
                                {{ $course->getName() ?? null }}
                            </div>
                            <div class="about-course__baner__title__position p font-pt-sans">
                                {{--Техника Demetrius--}}
                                {{ $course->getFacultyName() ?? null }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(isset($previousCourse))
                <div class="trainer__baner__nav trainer__baner__nav--left">
                    <a href="{{ route('courses.show', $previousCourse) }}"
                       class="trainer__baner__nav trainer__baner__nav--left__arrow"
                       title="{{ $previousCourse->getName() }}"></a>
                </div>
            @endif
            @if(isset($nextCourse))
                <div class="trainer__baner__nav trainer__baner__nav--right">
                    <a href="{{ route('courses.show', $nextCourse) }}"
                       class="trainer__baner__nav trainer__baner__nav--right__arrow"
                       title="{{ $nextCourse->getName() }}"></a>
                </div>
            @endif
        </div>
    </div>
    <section class="about-school__action--1 overflow-hidden" style="padding-bottom: 4rem;">
        <div class="template__orientation-backward-out">
            <div class="template__orientation-backward-in bg-white">
                <div class="template__orientation-backward-compensation template__orientation-direct-compensation--about-school-fix padding-bottom-0">
                    <div class="container">
                        <div class="row" style=" min-height: 2rem;">
                            {!!  $course->getDescriptionTop() !!}
                            {{--<div class="col-12">--}}
                            {{--<p class="text-center font-pt-sans articlepage-p3 font-weight-bold padding-bottom-2-rem pt-3">4-дневное обучение женской стрижке в технике Demetrius «Перезагрузка»</p>--}}
                            {{--</div>--}}
                            {{--<div class="col-12 col-lg-6 offset-lg-3">--}}
                            {{--<p class="font-pt-sans pb-3"><strong>Вы думаете, что умеете стричь? Тогда вы без сомнений поставите плюс напротив следующих пунктов:</strong></p>--}}
                            {{--<ul class="fa-ul cu-ul font-pt-sans ml-0">--}}
                            {{--<li>У вас расписан каждый рабочий день на <strong>70% в любой сезон</strong></li>--}}
                            {{--<li>Восторженные отклики и благодарность клиенток стали для вас <strong>обыденностью</strong></li>--}}
                            {{--<li>Вы всегда можете посоветовать клиентке <strong>«что-нибудь новенькое»</strong></li>--}}
                            {{--<li>Ваша клиентская база постоянно <strong>обновляется и пополняется</strong></li>--}}
                            {{--<li>Вы можете себе позволить и материально, и физически съездить в <strong>отпуск</strong> с семьей два раза в год.</li>--}}
                            {{--</ul>--}}
                            {{--<p class="font-pt-sans">Не досчитались плюсов? Возможно, это означает, что пора сделать «Перезагрузку»?!</p>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="about-course__action--2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="font-pt-sans text-center articlepage-p3 font-weight-bold">После обучения в Demetrius для
                        вас откроется новый мир. <br>
                        Отзывы наших учеников подтверждают это:</p>
                </div>
            </div>
            <div class="row" style="position: relative;">

                <div class="col-12 col-lg-5 d-flex flex-column">
                    <div class="pb-3 font-pt-sans font-italic icon-quote2">
                        <div class="review__text">
                            <div class="reviews__text--trancate js-text--truncate--metka-2 js-random-review--text-2-0"
                                 data-author="{{ $reviewFirst->getName() ?? null }}"
                                 data-create="{{ $reviewFirst->getCreatedDate() ?? null }}"
                            >
                                {!! $reviewFirst->getText() ?? null !!}
                            </div>
                        </div>
                    </div>
                    <p class="font-pt-sans font-italic text-right margin-top-auto mb-0 js-random-review--author-2-0">
                        {{ $reviewFirst->getName() ?? null }}
                    </p>
                    <small class="font-pt-sans text-muted text-right js-random-review--create-2-0">
                        {{ $reviewFirst->getCreatedDate() ?? null }}
                    </small>
                </div>

                <div class="col-12 col-lg-2 display-center align-items-center">
                    <div class="about-course__action--2__refresh">
                        <a href="/" class="btn link-black border-none js-random-review-2"
                           data-id="{{ $course->id ?? null }}">
                            <div class="icon--refresh images-contain"></div>
                        </a>
                    </div>
                </div>

                <div class="col-12 col-lg-5 d-flex flex-column">
                    <div class="pb-3 font-pt-sans font-italic icon-quote2">
                        <div class="review__text">
                            <div class="reviews__text--trancate js-text--truncate--metka-2 js-random-review--text-2-1"
                                 data-author="{{ $reviewSecond->getName() ?? null }}"
                                 data-create="{{ $reviewSecond->getCreatedDate() ?? null }}"
                            >
                                {!! $reviewSecond->getText() ?? null !!}
                            </div>
                        </div>
                    </div>
                    <p class="font-pt-sans font-italic text-right margin-top-auto mb-0 js-random-review--author-2-1">
                        {{ $reviewSecond->getName() ?? null }}
                    </p>
                    <small class="font-pt-sans text-muted text-right js-random-review--create-2-1">
                        {{ $reviewSecond->getCreatedDate() ?? null }}
                    </small>
                </div>

            </div>
        </div>
    </div>
    <div class="about-course__action--3 padding-top-3-rem padding-bottom-2-rem">
        <div class="container">
            <div class="row">
                <div class="col-10 offset-1">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <a href="#" class="about-course__link-span articlepage-p3 font-weight-bold">
                                <div class="about-course__action--3__item display-center container__vertical padding-bottom-1-rem">
                                    <div class="about-course__action--3__item__img padding-top-bottom-1">
                                        <div class="icon--scissors"></div>
                                        {{--<img src="/images/static/scissors-demetrius.png" alt="icon">--}}
                                    </div>
                                    <div class="about-course__action--3__item__text">
                                        <span class="border-bottom-dashed" href="#">О технике Demetrius</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a href="#" class="about-course__link-span articlepage-p3 font-weight-bold">
                                <div class="about-course__action--3__item display-center container__vertical padding-bottom-1-rem">
                                    <div class="about-course__action--3__item__img padding-top-bottom-1">
                                        <div class="icon--oclock"></div>
                                        {{--<img src="/images/static/oclock.png" alt="icon">--}}
                                    </div>
                                    <div class="about-course__action--3__item__text">
                                        <span class="border-bottom-dashed" href="#">Программа обучения</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 col-md-4">
                            <a href="#" class="about-course__link-span articlepage-p3 font-weight-bold">
                                <div class="about-course__action--3__item display-center container__vertical padding-bottom-1-rem">
                                    <div class="about-course__action--3__item__img padding-top-bottom-1">
                                        <div class="icon--percent"></div>
                                        {{--<img src="/images/static/percent.png" alt="icon">--}}
                                    </div>
                                    <div class="about-course__action--3__item__text">
                                        <span class="border-bottom-dashed" href="#">Бонусы Demetrius</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-course__advantage position-relative overflow-hidden padding-top-bottom-1">

        <div class="template__arrow-blog-left-universal">

            <div class="template__orientation-direct-out template__arrow-blog-left-universal--fix-orientation-direct-out"
                 style="margin-top: 0;">
                <div class="template__orientation-direct-in bg-white" style="z-index: 5;">
                    <div class="template__orientation-direct-compensation template__arrow-blog-left-universal--fix-orientation-direct-compensation">
                        <p class="text-center font-oswald h2 text-uppercase">преимущества</p>
                    </div>
                </div>
            </div>

            <div class="template__arrow-blog-left-universal__block padding-top-bottom-3-rem">
                <div class="owl-carousel about-course__advantage--owl-carousel owl-theme">

                    {{-- По желанию дизайнера отключил програмно скролл на PC в файле default.js, есть возможность вернуть функционал карусели на PC --}}

                    <div class="about-course__advantage__item">
                        <div class="about-course__advantage__item__img images-cover"
                             style="background-image: url('/images/pages/trainers/3.png');"></div>
                        <div class="about-course__advantage__item__img__text">
                            <p class="text-center font-pt-sans articlepage-p3 font-weight-bold">Отработка только на
                                моделях <br>
                                (в среднем 3 модели за день)</p>
                        </div>
                    </div>

                    <div class="about-course__advantage__item">
                        <div class="about-course__advantage__item__img images-cover"
                             style="background-image: url('/images/pages/trainers/3.png');"></div>
                        <div class="about-course__advantage__item__img__text">
                            <p class="text-center font-pt-sans articlepage-p3 font-weight-bold">Постоянная поддержка
                                <br>
                                и внимание тренера</p>
                        </div>
                    </div>

                    <div class="about-course__advantage__item">
                        <div class="about-course__advantage__item__img images-cover"
                             style="background-image: url('/images/pages/trainers/3.png');"></div>
                        <div class="about-course__advantage__item__img__text">
                            <p class="text-center font-pt-sans articlepage-p3 font-weight-bold">Позитивный заряд на
                                работу!</p>
                        </div>
                    </div>

                </div>

            </div>

            {{--<div class="template__orientation-backward-out template__arrow-blog-left-universal--fix-orientation-backward-out margin-top--5 margin-bottom-0" style="margin-top: -5rem; margin-bottom: 0rem;">--}}
            {{--<div class="template__orientation-backward-in bg-white" style="z-index: 5;">--}}
            {{--<div class="template__orientation-backward-compensation template__arrow-blog-left-universal--fix-orientation-backward-compensation">--}}
            {{----}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
        </div>

        <p class="text-center font-pt-sans articlepage-p3 font-weight-bold mb-0"><span
                    class="color-red">Цена 25 000 <span class="rub">₽</span> /</span> 27 000 <span class="rub">₽</span>
            с марта</p>

        <div class="padding-top-bottom-2 display-center">
            <a href="#about-course__form" class="btn btn-danger btn-primary--gradient">Записаться сейчас</a>
        </div>

    </section>

    {!!  $course->getDescriptionBottom() !!}

    {{--<section class="about-course__action--4 overflow-hidden padding-bottom-5-rem">--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
    {{--<div class="col-12">--}}
    {{--<p class="text-center font-oswald h2 text-uppercase padding-left-2-rem">Что получите на обучении в--}}
    {{--Demetrius:</p>--}}
    {{--</div>--}}
    {{--<div class="order-1 col-6 col-lg-3 d-flex align-items-end justify-content-start padding-right-2-rem">--}}
    {{--<div class="about-course__action--4__img">--}}
    {{--<img src="/images/pages/about-course/1.png" alt="1" class="image-gray-fill--hover">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="order-3 order-lg-2 col-12 col-lg-6">--}}
    {{--<p class="font-pt-sans">— Вы отработаете самые востребованные у ваших клиенток стрижки: каскад,--}}
    {{--каре, боб, пикси… И любую другую стрижку, которую попросит клиент или которую вы захотите ему--}}
    {{--предложить, потому что с техникой Demetrius ваши возможности не ограничены каким-то набором--}}
    {{--определенных стрижек. Теперь вы можете создавать новые формы и текстуры или воспроизводить с--}}
    {{--картинки.</p>--}}
    {{--<p class="font-pt-sans">— Вы зарабатываете на своих навыках. Навыки вы получаете на том обучении,--}}
    {{--где много отработки.</p>--}}
    {{--<p class="font-pt-sans">Обучение в Demetrius полностью ориентировано на отработку.</p>--}}
    {{--<p class="font-pt-sans">— Только в школе Demetrius вы получите в распоряжение такое большое--}}
    {{--количество моделей (по статистике обучений, один мастер успевает отработать от двух до 6 стрижек--}}
    {{--в день. В среднем, три модели в день на каждого мастера)! Причём важно не только количество, но--}}
    {{--и качество. Среди наших моделей женщины и девушки разного возраста, стиля и образа жизни. Что--}}
    {{--даст вам возможность применить технику Demetrius к абсолютно разным клиенткам.</p>--}}
    {{--<p class="font-pt-sans">— Тренеры Demetrius заинтересованы, чтобы вы максимально эффективно--}}
    {{--отработали новую для себя технику стрижки. Вернулись в салон полные сил, идей, заряженные на--}}
    {{--плодотворную работу.</p>--}}
    {{--<p class="font-pt-sans">— Каждый тренер Demetrius сам является успешным салонным мастером и хочет--}}
    {{--сделать успешными других. Потому что сам прошел этот путь и знает, как получить результат.</p>--}}
    {{--</div>--}}
    {{--<div class="order-2 order-lg-3 col-6 col-lg-3 d-flex align-items-start justify-content-end padding-left-2-rem">--}}
    {{--<div class="about-course__action--4__img">--}}
    {{--<img src="/images/pages/about-course/2.png" alt="2" class="image-gray-fill--hover">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    {{--<section class="about-course__action--5 padding-bottom-3-rem overflow-hidden">--}}
    {{--<div class="container">--}}
    {{--<div class="row">--}}
    {{--<div class="col-12 padding-bottom-2-rem">--}}
    {{--<p class="text-center font-oswald h2 text-uppercase padding-bottom-2-rem">Когда изучать технику--}}
    {{--Demetrius:</p>--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-4">--}}
    {{--<p class="font-pt-sans font-weight-bold"><span--}}
    {{--class="color-red">Когда у мастера затяжной кризис:</span></p>--}}
    {{--<ul class="fa-ul cu-ul font-pt-sans ml-0">--}}
    {{--<li>Мало клиентов,</li>--}}
    {{--<li>Клиенты стареют, а новые не задерживаются,</li>--}}
    {{--<li>Клиенты требуют скидок,</li>--}}
    {{--<li>Мастер боится повышать цены.</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-4">--}}
    {{--<p class="font-pt-sans font-weight-bold"><span class="color-red">Когда «творческий» кризис:</span>--}}
    {{--</p>--}}
    {{--<ul class="fa-ul cu-ul font-pt-sans ml-0">--}}
    {{--<li>Исчерпал себя в работе,</li>--}}
    {{--<li>Хочется чего-то нового, <br>--}}
    {{--не хватает вдохновения, эмоций, <br>--}}
    {{--драйва, всё надоело.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--<div class="col-12 col-md-4">--}}
    {{--<p class="font-pt-sans font-weight-bold"><span class="color-red">Когда это начинающий мастер:</span>--}}
    {{--</p>--}}
    {{--<ul class="fa-ul cu-ul font-pt-sans ml-0">--}}
    {{--<li>Хочет стартовать в правильной технике,</li>--}}
    {{--<li>Хочет отличаться от основной массы мастеров.</li>--}}
    {{--<li>Когда мастер хочет доминировать в профессии,--}}
    {{--конкурировать только с самим собой.--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    {{--<section class="about-course__action--6  overflow-hidden">--}}
    {{--<div class="container-fluid">--}}
    {{--<div class="row">--}}
    {{--<div class="col-12 padding-bottom-2-rem">--}}
    {{--<p class="text-center font-oswald h2 text-uppercase padding-bottom-2-rem">ЗАЧЕМ изучать технику--}}
    {{--Demetrius:</p>--}}
    {{--</div>--}}
    {{--<div class="col-12 col-lg-6 offset-lg-3">--}}
    {{--<p class="font-pt-sans">— Техника Demetrius создана в России и адаптирована под особенености наших--}}
    {{--клиенток.</p>--}}
    {{--<p class="font-pt-sans">— По отзывам сотен наших учеников: клиентки сразу замечают разницу. <br> И в--}}
    {{--процессе стрижки (последовательность и качество ваших действий будет отличаться от того, что они--}}
    {{--видели когда-либо раньше. Так у них не будет даже шанса вмешиваться в работу со своими--}}
    {{--советами);</p>--}}
    {{--<p class="font-pt-sans">— И в результате стрижки (идеальная форма и лежание);</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</section>--}}

    <div class="container padding-bottom-3-rem">
        <div class="row">
            <div class="col-12">
                <a class="font-pt-sans color-red text-underline text-center d-block font-weight-bold" target="_blank"
                   href="{{ route('reviews.index', ['course_id' => $course->id]) }}"
                   style="padding-top: 1rem;">Посмотреть отзывы</a>
                <div class="padding-top-bottom-2 display-center">
                    <a href="#about-course__form" class="btn btn-danger btn-primary--gradient">Записаться сейчас</a>
                </div>
            </div>
        </div>
    </div>

    <section class="about-course__action--6 overflow-hidden padding-bottom-3-rem">
        <p class="text-center font-oswald h2 text-uppercase" style="padding-bottom: 1rem;">тренеры</p>
        <div class="container">
            <div class="row justify-content-center">

                @forelse($course->trainers as $trainer)
                    <div class="col-12 col-md-3">
                        <div class="d-flex flex-column align-items-center" style="padding: 0rem 2rem;">
                            <img class="" style="height: 14rem;" src="{{ $trainer->getAvatarLink() ?? null }}"
                                 alt="{{ $trainer->getName() ?? null }}">
                            <div class="d-flex justify-content-center padding-top-1-rem">
                                <div>
                                    <p class="font-pt-sans">{{ $trainer->getFirstName() ?? null }} <br>
                                        {{ $trainer->getLastName() ?? null }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
        </div>
    </section>

    <section id="videos" class="d-none videos padding-bottom-3-rem">
        <div class="padding-top-bottom-2">
            <p class="text-center font-oswald h2 text-uppercase">видео по теме</p>
        </div>
        <!-- 21:9 aspect ratio -->
        <div class="row no-gutters">

            <div class="col-lg-4 col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="embed-responsive-item">
                        <a class="text-decoration-none" data-toggle="lightbox"
                           href="https://www.youtube.com/watch?v=ToHfb907Q6Y">
                            <div class="w-100 h-100 images-cover video-hover-icon"
                                 style="background-image: url(https://i.ytimg.com/vi/ToHfb907Q6Y/hqdefault.jpg);">
                                <p class="p-2 text-light text-truncate">Как правильно уложить и доработать стрижку на
                                    длинные волосы | Советы от Demetrius | Укладка феном</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="embed-responsive-item">
                        <a class="text-decoration-none" data-toggle="lightbox"
                           href="https://www.youtube.com/watch?v=ToHfb907Q6Y">
                            <div class="w-100 h-100 images-cover video-hover-icon"
                                 style="background-image: url(https://i.ytimg.com/vi/ToHfb907Q6Y/hqdefault.jpg);">
                                <p class="p-2 text-light text-truncate">Как правильно уложить и доработать стрижку на
                                    длинные волосы | Советы от Demetrius | Укладка феном</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-12">
                <div class="embed-responsive embed-responsive-16by9">
                    <div class="embed-responsive-item">
                        <a class="text-decoration-none" data-toggle="lightbox"
                           href="https://www.youtube.com/watch?v=ToHfb907Q6Y">
                            <div class="w-100 h-100 images-cover video-hover-icon"
                                 style="background-image: url(https://i.ytimg.com/vi/ToHfb907Q6Y/hqdefault.jpg);">
                                <p class="p-2 text-light text-truncate">Как правильно уложить и доработать стрижку на
                                    длинные волосы | Советы от Demetrius | Укладка феном</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section id="photos" class="d-none photos padding-bottom-3-rem">
        <div class="padding-top-bottom-2">
            <p class="text-center font-oswald h2 text-uppercase">Галлерея</p>
        </div>
        <!-- 21:9 aspect ratio -->
        <div class="row no-gutters">
            <div class="row no-gutters">

                <div class="col-lg-3 col-6">
                    <a href="/photos/pages/main/1.png" data-toggle="lightbox" data-gallery="mainpage-photos"
                       data-type="image">
                        <img src="/photos/pages/main/1.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="/photos/pages/main/2.png" data-toggle="lightbox" data-gallery="mainpage-photos"
                       data-type="image">
                        <img src="/photos/pages/main/2.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="/photos/pages/main/3.png" data-toggle="lightbox" data-gallery="mainpage-photos"
                       data-type="image">
                        <img src="/photos/pages/main/3.png" class="img-fluid" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-6">
                    <a href="/photos/pages/main/4.png" data-toggle="lightbox" data-gallery="mainpage-photos"
                       data-type="image">
                        <img src="/photos/pages/main/4.png" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

        </div>

    </section>

    <section class="d-none about-course__grid padding-top-2-rem padding-bottom-3-rem overflow-hidden">
        <div class="container-fluid">
            <div class="row justify-content-center" style="margin: 0;">
                <div class="col-12 padding-bottom-2-rem">
                    <p class="text-center font-oswald h2 text-uppercase" style="padding-bottom: 1rem;">С этим обучением
                        обычно смотрят</p>
                </div>
                <div class="col-12 col-md-6 col-lg-4 padding-right-left-05-rem padding-bottom-1-rem">

                    <div class="template__item-responsive">
                        <div class="template__item-responsive--content template__grid-posts-v2">

                            <div class="template__grid-posts-v2__item images-cover"
                                 style="background-image: url('/images/pages/event/1.png');">
                                <a href="#" class="template__grid-posts-v2__link">
                                    <div class="template__grid-posts-v2__item__content">

                                        <div class="template__grid-posts-v2__line" style="background: red;"></div>
                                        <p class="template__grid-posts-v2__title color-white text-center font-oswald h2 text-uppercase">
                                            Колористика. <br>
                                            основы</p>

                                    </div>
                                </a>
                                <div class="template__grid-posts-v2__btn">
                                    <a href="http://beta.demetrius-crm.ru/"
                                       class="btn btn-danger btn-primary--gradient">Записаться сейчас</a>
                                </div>
                                <div class="template__grid-posts-v2__bg-dark"></div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4 padding-right-left-05-rem padding-bottom-1-rem">

                    <div class="template__item-responsive">
                        <div class="template__item-responsive--content template__grid-posts-v2">

                            <div class="template__grid-posts-v2__item images-cover"
                                 style="background-image: url('/images/pages/event/1.png');">
                                <a href="#" class="template__grid-posts-v2__link">
                                    <div class="template__grid-posts-v2__item__content">
                                        <div class="template__grid-posts-v2__line"></div>
                                        <p class="template__grid-posts-v2__title color-white text-center font-oswald h2 text-uppercase">
                                            Колористика. <br>
                                            основы</p>
                                        <p class="template__grid-posts-v2__description text-center color-white">Техника
                                            Demetrius</p>
                                    </div>
                                </a>
                                <div class="template__grid-posts-v2__btn">
                                    <a href="http://beta.demetrius-crm.ru/"
                                       class="btn btn-danger btn-primary--gradient">Записаться сейчас</a>
                                </div>
                                <div class="template__grid-posts-v2__bg-dark"></div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6 col-lg-4 padding-right-left-05-rem padding-bottom-1-rem">

                    <div class="template__item-responsive">
                        <div class="template__item-responsive--content template__grid-posts-v2">

                            <div class="template__grid-posts-v2__item images-cover"
                                 style="background-image: url('/images/pages/event/1.png');">
                                <a href="#" class="template__grid-posts-v2__link">
                                    <div class="template__grid-posts-v2__item__content">
                                        <div class="template__grid-posts-v2__line"></div>
                                        <p class="template__grid-posts-v2__title color-white text-center font-oswald h2 text-uppercase">
                                            Колористика. <br>
                                            основы</p>
                                        <p class="template__grid-posts-v2__description text-center color-white">Техника
                                            Demetrius</p>
                                    </div>
                                </a>
                                <div class="template__grid-posts-v2__btn">
                                    <a href="http://beta.demetrius-crm.ru/"
                                       class="btn btn-danger btn-primary--gradient">Записаться сейчас</a>
                                </div>
                                <div class="template__grid-posts-v2__bg-dark"></div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <section id="about-course__form" class="about-course__form padding-bottom-3-rem overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12 padding-bottom-2-rem">
                    <p class="text-center font-oswald h2 text-uppercase" style="padding-bottom: 1rem;">Запись на
                        ближайшее обучение</p>
                </div>
                <div class="col-12 offset-lg-1 col-lg-10">
                    <div class="template__form template__form--border">

                        {{ Form::open(['route'=>"call-requests.store",'method'=>'POST']) }}

                            <div class="row">
                                <div class="col-12 display-center">
                                    <div class="form-row">


                                        <input type="hidden" name="course_id" value="{{ $course->id }}">
                                        @include('forms._input',
                                        [
                                            'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                                            'label' => 'Имя и фамилия',
                                            'name' => 'request_name'

                                        ])
                                        @include('forms._input',
                                        [
                                            'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                                            'label' => 'Email',
                                            'type' => 'email',
                                            'name' => 'email'

                                        ])
                                        @include('forms._input',
                                        [
                                            'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                                            'label' => 'Телефон',
                                            'type' => 'tel',
                                            'name' => 'request_phone_raw'

                                        ])

                                        @include('forms._select',
                                        [
                                            'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                                            'label' => 'Выберете дату',
                                            'name' => 'request_date',
                                            'list' => $educationsList,
                                        ])




                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group display-center flex-wrap">
                                        <div class="template__agreement color-gray-v1 articlepage-p4"
                                             style="font-size: .8rem; line-height: 1.8;">
                                            Согласие на обработку персональных данных
                                            <a class="color-gray-v1 text-underline" href="{{route('policy')}}">
                                                (политика конфиденциальности)</a>&nbsp;
                                        </div>
                                        <div class="template__form-check template__form-check--right">

                                            <input class="form-check template__form-check--input" type="checkbox"
                                                   value="" id="invalidCheck" required>
                                            <label class="template__form-check--label" for="invalidCheck">
                                                Я согласен / согласна
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-12 display-center">
                                    <div class="template__form--border__btn">
                                        <button class="btn btn-outline-red_v2 border-width-2">
                                            Отправить
                                        </button>
                                    </div>
                                </div>
                            </div>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
    </section>


@stop