<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

{!! SEO::generate() !!}

<!-- Bootstrap CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700&amp;subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.css">
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
    <noscript>
        <style>
            [data-simplebar] {
                overflow: auto;
            }
        </style>
    </noscript>
    <style>
        *:not(.ruble){
            font-family: 'PT Sans', 'Oswald', sans-serif;
        }
        .ekko-lightbox .modal-body{
            padding: 0;
        }

        @media (max-width: 767.98px) {
            .simplebar-track{
                display: none;
            }
        }
    </style>
</head>
<body class="site__body">
<div class="container">
    <div class="row">
        <div class="col-12 pt-5 pb-5">
            <div class="images-contain w-100"
                 style="height: 5rem; background-image: url(/images/lending/logo.svg);"></div>
        </div>
        <div class="col-12 text-center">
            <p class="text-uppercase text-spacing mb-1 h2">Парикмахер салона красоты</p>
            <p class="d-block text-uppercase text-spacing font-weight-bold" style="font-size: .7rem;">Обучение с
                нуля</p>
            <p>
                Обучение «С нуля» в DEMETRIUS для парикмахеров, которые хотят сразу <br class="d-none d-md-block">
                начать зарабатывать. Все деньги, вложенные в обучение в DEMETRIUS, <br class="d-none d-md-block">
                Вы сможете вернуть уже через 3 недели полной записи в салоне. <br class="d-none d-md-block">
                Задача DEMETRIUS – научить вас зарабатывать деньги благодаря <br class="d-none d-md-block">
                высокому уровню мастерства и правильному отношению <br class="d-none d-md-block">
                к своей профессии.
            </p>
        </div>
    </div>
</div>

@includeIf('layouts.modules._flash')

<div class="pt-4 pl-0 pr-0 ml-0 mr-0 pb-4 row no-gutters">
    <div class="col d-flex align-items-center">
        <div class="bg-line-left w-100" style="height: 2px;"></div>
    </div>
    <div class="col-auto">
        <a href="{{route('index')}}/docs/info.pdf" target="_blank"
           class="landing-red-link text-decoration-none">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="images-contain m-1 mr-2"
                         style="height: 2rem; width: 2rem; background-image: url(/images/lending/icon-pdf.svg);"></div>
                </div>
                <div class="col-auto">
                    <span class="mb-0 d-block border-bottom-dashed color-red">Подробная информация</span>
                </div>
            </div>
        </a>
    </div>
    <div class="col d-flex align-items-center">
        <div class="bg-line-right w-100" style="height: 2px;"></div>
    </div>
</div>

<section id="js-lending">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="h3 pt-3 pb-5 text-center">Факультеты</p>
            </div>
        </div>
    </div>

    <div class="container-fluid container-primary pl-3 pr-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div @click="clickArrow(-1)" :class="activeLArrow"
                     class="t__link-left images-contain"></div>
            </div>
            <div v-for="(link, i) in links"
                 class="col-auto d-none d-md-block">
                <div @click="clickLink(i)" :key="i"
                     class="t__link-border" :class="link.class">
                    @{{link.title}}
                </div>
            </div>
            <div class="col d-flex d-md-none align-items-center">
                <div class="form-group mb-0 w-100">
                    <select @change="changeSelect"
                            name="links" class="form-control form-control-sm t__select">
                        <option v-for="(link, i) in links" :selected="link.class.active" :value="i">@{{link.title}}</option>
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <div @click="clickArrow(+1)" :class="activeRArrow"
                     class="t__link-right images-contain"></div>
            </div>
        </div>
    </div>

    <section class="pt-5 pb-3">

        <div class="container-primary pb-4 pl-3 pr-3 pl-md-0 pr-md-0">
            <div class="row no-gutters">
                <div class="col-12 col-md-5 mb-5">
                    <div id="js-scroll" class="t__box-overflow-landing" data-simplebar data-simplebar-auto-hide="false">
                        <div class="pl-4 pr-2">
                            <div :class="links[linksActive].info.doubleBlock.classColor"
                                    class="pl-4 mb-3 t__box-line-left t__box-line-left-fix" >
                                <p class="h2 text-uppercase" v-html="links[linksActive].info.doubleBlock.title"></p>
                                <p class="mb-0" v-html="links[linksActive].info.doubleBlock.desc">Женские стрижки, колористка, укладки, <br class="d-none d-md-block">
                                    трихология и массаж</p>
                            </div>
                            <div class="pl-4" v-html="links[linksActive].info.doubleBlock.content">
                                <p>
                                    Интенсивный курс подойдет для тех, <br class="d-none d-md-block">
                                    кто ни разу делал окрашивание, <br class="d-none d-md-block">
                                    а также для тех, работает в салоне, <br class="d-none d-md-block">
                                    но ему не хватает практики и опыта
                                </p>
                                <div class="d-flex mb-3 small t__text-red align-items-center">
                                    <div class="t__big-number">4</div>
                                    <div>
                                        день интенсивного практического <br class="d-none d-md-block">
                                        обучения с максимальным <br class="d-none d-md-block">
                                        погружением в профессию
                                    </div>
                                </div>
                                <div class="d-flex mb-3 small t__text-red align-items-center">
                                    <div class="t__big-number">8</div>
                                    <div>
                                        часов в день и более <br class="d-none d-md-block">
                                        под контролем лучших тренеров
                                    </div>
                                </div>
                                <div class="d-flex mb-3 small t__text-red align-items-center">
                                    <div class="t__big-number">1-2</div>
                                    <div>
                                        модели в день <br class="d-none d-md-block">
                                        минимум
                                    </div>
                                </div>
                                <p>
                                    Практика с первого дня обучения.
                                </p>
                                <p>
                                    Работа в уникальной технике, с помощью
                                    которой вы сможете воспроизвести
                                    любую стрижку, любой сложности.
                                </p>
                                <p>
                                    Малые группы до 7 человек.
                                </p>
                                <p>
                                    На время обучения предоставляем
                                    инструменты настоящего салонного мастера.
                                </p>
                                <p>
                                    Портфолио. Ваши работы снимает
                                    профессиональный фотограф.
                                </p>
                                <p>
                                    Иногородним ученикам предоставляем
                                    жилье по минимальной цене.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7 mb-5">
                    <div class="pl-md-2">
                        <a :href="links[linksActive].info.doubleBlock.photo"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100" :style="'background-image: url('+links[linksActive].info.doubleBlock.minPhoto+');'"></div>
                                </div>
                            </div>
                        </a>
                        <p class="mt-3" v-html="links[linksActive].info.doubleBlock.descPhoto">
                            Так проходит обучение женским стрижкам
                        </p>
                        <a href="{{route('photoGallery')}}" target="_blank" class="landing-red-link text-decoration-none">
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="images-contain m-1 mr-2" style="height: 2rem; width: 2rem; background-image: url(/images/lending/photo.svg);"></div>
                                </div>
                                <div class="col-auto">
                                    <span class="mb-0 d-block border-bottom-dashed color-red">Все фото процесса</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-primary pb-5">
            <div class="d-flex no-gutters justify-content-around flex-wrap">

                <div v-for="item in links[linksActive].info.trainerBlock"
                     class="col-12 col-sm-6 col-md-4 col-lg-auto pb-3 text-center t__trainer-box" style="max-width: 100%!important; flex-grow: 1;">
                    <div class="images-contain t__trainer" :style="'background-image: url('+item.img+'); background-position: bottom center;'"></div>
                    <div class="pt-4 pb-4 main-bg-color-red h-100 pl-3 pr-3">
                        <a :href="item.link" class="text-decoration-none d-flex flex-column h-100">
                            <p v-html="item.name" class="text-uppercase mb-0 text-white h3 font-weight-light">
                                ВАЛЕРИЯ
                                ЗАЙЦЕВА
                            </p>
                            <p v-html="item.desc" class="text-white mb-0 mt-auto">
                                тренер
                                по колористике
                            </p>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid pb-5 container-primary">
            <div class="row">
                <div class="col-12">
                    <p class="text-center h4">Работы учеников</p>
                </div>
            </div>
            <div class="row no-gutters">

                <div v-for="item in images" class="col-6 col-md-4">
                    <div class="p-3">
                        <a :href="item.img"
                           data-toggle="lightbox" data-gallery="gallery-01" data-type="image"
                           target="_blank" class="text-decoration-none">
                            <div class="embed-responsive embed-responsive-1by1">
                                <div class="embed-responsive-item">
                                    <div class="images-cover w-100 h-100"
                                         :style="'background-image: url('+item.minImg+');'">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row pt-3 pb-5">
                <div class="col-12 text-center">
                    <a target="_blank" href="{{ route('photoGallery') }}" class="btn t__btn-white">Еще</a>
                </div>
            </div>
        </div>

        <div class="mb-5 container-primary images-cover pt-5 pb-5 d-flex flex-column align-items-center" style="background-image: url(/images/lending/woman-min.png);">
            <p class="pt-5 pb-5 text-white h2 text-center">ЖЕНСКИЙ МАСТЕР</p>
            <div class="landing-fix-mw ml-3 mr-3 bg-g-yellow landing-border-radius p-5 d-flex flex-column align-items-center justify-content-center">
                <div class="row no-gutters pl-lg-5 pr-lg-5 w-100">
                    <div class="col-12 col-md-4 pb-3 pb-md-0">
                        <div class="landing__danger--label h-100 d-flex align-items-center justify-content-center">
                            <p v-html="links[linksActive].info.actionBlock.cost"
                                    class="mb-0 pt-2 pb-2 pt-md-0 pb-md-0">
                                Стоимость 89 000 <span class="ruble">q</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 pb-3 pb-md-0">
                        <a   data-toggle="modal"
                             data-target="#oneModal"
                             data-title="Запись мастером" data-btntitle="Записаться"
                             data-inputbox="{{ json_encode([[ 'name' => 'user_type_id', 'value' => '2']]) }}"
                             href="#oneModal" class="landing__danger--btn btn btn-danger btn-primary--gradient w-100 h-100">Записаться</a>
                    </div>
                    <div class="col-12 col-md-4 pb-3 pb-md-0">
                        <p v-html="links[linksActive].info.actionBlock.smallDesc"
                                class="mb-0 small pl-3 text-center text-md-left text-md-nowrap">
                            Возможна рассрочка <br>
                            Инструменты предоставляются
                        </p>
                    </div>
                </div>
                <div v-if="links[linksActive].info.actionBlock.desc !== ''"
                     class="row pl-lg-5 pr-lg-5 pt-4 pt-md-5">
                    <div class="col-12 col-sm-auto d-flex justify-content-center">
                        <div class="images-contain" style="height: 6rem; width: 6rem; background-image: url(/images/lending/icon-gift.svg);"></div>
                    </div>
                    <div class="col-12 col-sm text-center text-sm-left pt-3 pt-sm-0">
                        <p class="h5">В подарок!</p>
                        <p v-html="links[linksActive].info.actionBlock.desc">
                            Двухдневный тренинг Дмитрия Вашешникова «Ябренд». <br class="d-none d-lg-block">
                            Ябренд — тренинг о том, как правильно выстроить свой имидж <br class="d-none d-lg-block">
                            в индустрии красоты и найти свою миссию.
                        </p>
                    </div>
                </div>
            </div>
            <div v-if="links[linksActive].info.actionBlock.desc === ''"
                 class="w-100 lending-fix-height-1"></div>
        </div>

        <div class="container-fluid container-primary">
            <div class="row">
                <div class="col-12">
                    <p class="text-center h4">Отзывы</p>
                </div>
            </div>

            <div class="row no-gutters pt-3">

                <div class="col-12 col-md-6">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-1 d-flex">
                            <div class="quote-left pr-2">
                                <img src="/images/static/quotes.svg" class="img-fluid" style="position: relative; top: -1rem;">
                            </div>
                        </div>
                        <div class="col-10 col-lg-8 d-flex">
                            <div class="reviews__text">
                                <p class="font-weight-bold">
                                    Марина Саяпина, Зеленоград <br class="d-md-none"><span class="text-muted font-weight-light pl-1">2 марта 2018</span>
                                </p>
                                <div class="js-text--truncate" style="margin: 0;">
                                    <div class="js-text--truncate--metka js-random-review--text">
                                        <p>Спасибо за&nbsp;работу от&nbsp;вашей школы! За&nbsp;мои 30&nbsp;лет меня так не&nbsp;стригли ещё, все в&nbsp;комплексе: и&nbsp;ощущения, и&nbsp;ожидания, и&nbsp;укладка самостоятельно дома, подбор под тип волос, форму лица, и&nbsp;модно, и&nbsp;новые технологии укладки))! Даже несмотря на&nbsp;то, что была моделью на&nbsp;мастер-классе! Теперь придётся ездить в&nbsp;Москву стричься, не&nbsp;доверю никому свои волосы))</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-10 col-lg-8 mt-5 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v=qamhpP4Vhhg">
                                        <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url(/images/lending/review1.png);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-1 d-flex">
                            <div class="quote-left pr-2">
                                <img src="/images/static/quotes.svg" class="img-fluid" style="position: relative; top: -1rem;">
                            </div>
                        </div>
                        <div class="col-10 col-lg-8 d-flex">
                            <div class="reviews__text">
                                <p class="font-weight-bold">
                                    Екатерина Осетрова, Москва <br class="d-md-none"><span class="text-muted font-weight-light pl-1">26 марта 2018</span>
                                </p>
                                <div class="js-text--truncate" style="margin: 0;">
                                    <div class="js-text--truncate--metka js-random-review--text">
                                        <p>Давно мечтала побывать в этой школе и безумно рада, что наконец попала в Demetrius. Теперь школа Demetrius стала одним из любимым мест. Чувствую, кто-то не ляжет спать. Жизнь заиграла новыми красками. После череды не самых простых событий в моей жизни, сегодняшний день как горсть солнца и позитива. Я получила ответы на все свои вопросы и даже больше. Время пролетело быстро и очень продуктивно. Я обязательно хочу побывать в Demetrius снова. Спасибо!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>

                <div class="col-12 col-md-6 pt-md-5">
                    <div class="row no-gutters justify-content-center">
                        <div class="col-10 col-lg-8 mt-5 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v=-p1ZSRXipEc">
                                        <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url(/images/lending/review3.png);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-1 d-flex">
                            <div class="quote-left pr-2">
                                <img src="/images/static/quotes.svg" class="img-fluid" style="position: relative; top: -1rem;">
                            </div>
                        </div>
                        <div class="col-10 col-lg-8 d-flex">
                            <div class="reviews__text">
                                <p class="font-weight-bold">
                                    Наталья Хусаинова, Москва <br class="d-md-none"><span class="text-muted font-weight-light pl-1">26 марта 2018</span>
                                </p>
                                <div class="js-text--truncate" style="margin: 0;">
                                    <div class="js-text--truncate--metka js-random-review--text">

                                        <p>Demetrius, вы&nbsp;лучшая школа! Я&nbsp;прошла много курсов здесь и&nbsp;могу с&nbsp;уверенностью заявить, что все ребята тут профессионалы и&nbsp;фанаты своего дела. Все техники, будь&nbsp;то стрижки, окрашивания, укладки, современные, востребованные, легкие в&nbsp;работе. </p>
                                        <p>Хочется возвращаться к&nbsp;вам снова и&nbsp;снова! Вы&nbsp;заряжаете энергией, верой в&nbsp;будущее и&nbsp;успех!</p>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                    <div class="row no-gutters justify-content-center">
                        <div class="col-10 col-lg-8 mt-5 mb-5">
                            <div class="embed-responsive embed-responsive-16by9">
                                <div class="embed-responsive-item">
                                    <a class="text-decoration-none" data-toggle="lightbox" href="https://www.youtube.com/watch?v=Zbf5wz5HCBE">
                                        <div class="w-100 h-100 images-cover video-hover-icon" style="background-image: url(/images/lending/review2.png);">
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row pt-3 pb-5">
                <div class="col-12 text-center">
                    <a target="_blank" href="{{ route('reviews.index') }}" class="btn t__btn-white">Еще</a>
                </div>
            </div>
        </div>

    </section>

    <div class="container-fluid container-primary pl-3 pr-3">
        <div class="row justify-content-between">
            <div class="col-auto">
                <div @click="clickArrow(-1)" :class="activeLArrow"
                     class="t__link-left images-contain"></div>
            </div>
            <div v-for="(link, i) in links"
                 class="col-auto d-none d-md-block">
                <div @click="clickLink(i)" :key="i"
                     class="t__link-border" :class="link.class">
                    @{{link.title}}
                </div>
            </div>
            <div class="col d-flex d-md-none align-items-center">
                <div class="form-group mb-0 w-100">
                    <select @change="changeSelect"
                            name="links" class="form-control form-control-sm t__select">
                        <option v-for="(link, i) in links" :selected="link.class.active" :value="i">@{{link.title}}</option>
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <div @click="clickArrow(+1)" :class="activeRArrow"
                     class="t__link-right images-contain"></div>
            </div>
        </div>
    </div>

    <div class="container pb-5 pt-5">
        <div class="row">
            <div class="col-12">
                <p class="h3 pt-4 pb-5 text-center">Наш адрес</p>
            </div>
            <div class="col-12 col-md-6 col-lg-3 offset-lg-2 pb-5">
                {{ Form::open(['route'=>"call-requests.store",'method'=>'POST', 'class' => 'h-100']) }}
                <div class="d-flex flex-column h-100">

                    @include('forms._select',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__select',
                        'name' => 'learning',
                        'list' =>
                        [
                            '1' => 'Обучение',
                            '2' => '2',
                            '3' => '3',
                            '4' => '4',
                        ],
                    ])
                    @include('forms._input',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__input',
                        'placeholder' => 'Имя',
                        'type' => 'text',
                        'name' => 'name'

                    ])
                    @include('forms._input',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__input',
                        'placeholder' => 'Телефон',
                        'type' => 'tel',
                        'name' => 'phone'

                    ])
                    @include('forms._input',
                    [
                        'classFormGroup' => 'pb-2',
                        'class' => 't__input',
                        'placeholder' => 'Эл. почта',
                        'type' => 'email',
                        'name' => 'email'

                    ])
                    <div class="mt-auto pb-2">
                        <button type="submit" class="btn btn-primary--gradient-lite">
                            Записаться
                        </button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
            <div class="col-12 col-md-6 col-lg-5 offset-lg-1 pb-5 text-center text-md-left">
                <p>Москва, <img class="d-inline icon-small-top " style="height: .8rem;" src="/images/lending/metro.svg"
                                alt="metro">Текстильщики <br class="d-none d-md-block">
                    Волгоградский проспект, 47, <br class="d-none d-md-block">
                    Бизнес-центр «Cube»</p>
                <a href="tel:+79651085553" class="d-block link--hover-red">+7 965 108-55-53</a>
                <p class="font-italic">Ответим в любое время</p>
                <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                    <div class="images-contain m-2"
                         style="height: 6rem; width: 6rem; background-image: url(/images/lending/ava-min.png);">
                        <a href="https://vk.com/l.demetrius" class="w-100 h-100 d-block"></a>
                    </div>
                    <div class="text-left">
                        <p class="mb-0"><a href="https://vk.com/l.demetrius" class="font-weight-bold border-bottom-solid">Кристина</a><a
                                    href="https://vk.com/l.demetrius"><img class="d-inline pl-1 icon-small-top" style="height: .8rem;"
                                                  src="/images/lending/vk-blue.svg" alt="vk-blue"></a></p>
                        <p class="font-italic mb-0">Руководитель проекта</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="position-relative overflow-hidden container-primary">
    <div id="map" class="w-100" style="height: 20rem;"></div>
</section>

<footer class="pt-5 pb-5 main-bg-color-red">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col d-none d-lg-block"></div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/fb.svg);">
                    <a href="https://www.facebook.com/demetrius.su" target="_blank" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/vk.svg);">
                    <a href="https://vk.com/demetrius_school" target="_blank" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="w-100 d-sm-none d-block"></div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/insta.svg);">
                    <a href="https://www.instagram.com/demetriusschool/" target="_blank" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="images-contain m-2"
                     style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/youtube.svg);">
                    <a href="https://www.youtube.com/user/DemetriusSchool" target="_blank" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col d-none d-lg-flex align-items-center">
                <p class="h3 mb-0 pl-2 text-white font-weight-light">
                    &mdash; Мы здесь!
                </p>
            </div>

            <div class="col-12 pt-5 mt-4 text-center">
                <a href="{{ route('policy') }}" target="_blank" class="text-white border-bottom-dashed">
                    Политика конфиденциальности
                </a>
            </div>
        </div>
    </div>
</footer>


@include('modals.modal',
[
    'id' => 'oneModal',
    'title' => 'Запись моделью',
    'btn_title' => 'Записаться'

])

<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/npm/simplebar@latest/dist/simplebar.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script>
    new SimpleBar(document.getElementById('js-scroll'));
    var js_lending__setting = {
        el: '#js-lending',
        data: {
            reviews:{
                video: [],
                text: []
            },
            images: [
                {
                    img: '/images/lending/demophoto/1-min.jpg',
                    minImg: '/images/lending/demophoto/min/1-min.jpg'
                },
                {
                    img: '/images/lending/demophoto/2-min.jpg',
                    minImg: '/images/lending/demophoto/min/2-min.jpg'
                },
                {
                    img: '/images/lending/demophoto/3-min.jpg',
                    minImg: '/images/lending/demophoto/min/3-min.jpg'
                },
                {
                    img: '/images/lending/demophoto/4-min.jpg',
                    minImg: '/images/lending/demophoto/min/4-min.jpg'
                },
                {
                    img: '/images/lending/demophoto/5-min.jpg',
                    minImg: '/images/lending/demophoto/min/5-min.jpg'
                },
                {
                    img: '/images/lending/demophoto/6-min.jpg',
                    minImg: '/images/lending/demophoto/min/6-min.jpg'
                }
            ],
            links: [
                {
                    title: 'Мастер-универсал',
                    class: {active: false},
                    info: {
                        doubleBlock: {
                            title: 'Мастер-универсал',
                            desc: 'Женские, мужские стрижки, женская и мужская <br class="d-none d-md-block">' +
                            'колористика, укладки, трихология и массаж',
                            classColor: 't__box-line-left--red',
                            photo: '/images/lending/doubleBox/8wHlbmMETuw.jpg',
                            minPhoto: '/images/lending/doubleBox/min/8wHlbmMETuw.jpg',
                            descPhoto: 'Так проходит обучение стрижкам',
                            content: '<p>\n' +
                            '    Интенсивный тренинг подойдет для тех, <br class="d-none d-md-block">\n' +
                            '    кто уже работает в салоне красоты <br class="d-none d-md-block">\n' +
                            '    или только желает стать парикмахером. <br class="d-none d-md-block">\n' +
                            '</p>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">33</div>\n' +
                            '    <div>\n' +
                            '        день интенсивного практического <br class="d-none d-md-block">\n' +
                            '        обучения с максимальным <br class="d-none d-md-block">\n' +
                            '        погружением в профессию\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">8</div>\n' +
                            '    <div>\n' +
                            '        часов в день и более <br class="d-none d-md-block">\n' +
                            '        под контролем лучших тренеров\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">2</div>\n' +
                            '    <div>\n' +
                            '        модели в день <br class="d-none d-md-block">\n' +
                            '        минимум\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<p>\n' +
                            '    Практика с первого дня обучения. За время\n' +
                            '    обучения каждый ученик отрабатывает\n' +
                            '    минимум 65 стрижек и окрашиваний\n' +
                            '    на моделях.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Работа в уникальной технике, с помощью\n' +
                            '    которой вы сможете воспроизвести\n' +
                            '    любую стрижку, любой сложности.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Малые группы до 7 человек.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    На время обучения предоставляем\n' +
                            '    инструменты настоящего салонного мастера.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Интенсивное обучение, позволяющее\n' +
                            '    максимально погрузиться в профессию\n' +
                            '    (обучение проходит весь день)\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Портфолио. Ваши работы снимает\n' +
                            '    профессиональный фотограф.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Иногородним ученикам предоставляем\n' +
                            '    жилье по минимальной цене.\n' +
                            '</p>'
                        },
                        trainerBlock: [
                            {
                                img: '/images/lending/2.png',
                                link: 'http://demetrius.ru/trainers/2032',
                                name: 'АЛЕНА <br class="d-none d-md-block">' +
                                'МАКОТЕРСКАЯ',
                                desc: 'тренер по женской <br class="d-none d-md-block">' +
                                'стрижке'
                            },
                            {
                                img: '/images/pages/about-school/girl2.png',
                                link: 'http://demetrius.ru/trainers/2031',
                                name: 'АННА <br class="d-none d-md-block">' +
                                'ТЕМИР',
                                desc: 'тренер <br class="d-none d-md-block">' +
                                'по колористике'
                            },
                            {
                                img: '/images/pages/about-school/girl3.png',
                                link: 'http://demetrius.ru/trainers/70',
                                name: 'ВАЛЕРИЯ <br class="d-none d-md-block">' +
                                'ЗАЙЦЕВА',
                                desc: 'тренер <br class="d-none d-md-block">' +
                                'по колористике'
                            },
                            {
                                img: '/images/pages/about-school/olga-minina.png',
                                link: 'http://demetrius.ru/trainers/2026',
                                name: 'ОЛЬГА <br class="d-none d-md-block">' +
                                'МИНИНА',
                                desc: 'тренер по жен ской <br class="d-none d-md-block">' +
                                'стрижке'
                            },
                            {
                                img: '/images/lending/1.png',
                                link: 'http://demetrius.ru/trainers/2023',
                                name: 'ДИАНА <br class="d-none d-md-block">' +
                                'БОЛДЫРЕВА',
                                desc: 'тренер по мужской <br class="d-none d-md-block">' +
                                'стрижке'
                            }
                        ],
                        actionBlock: {
                            cost: 'Стоимость 144 200 <span class="ruble">q</span>',
                            smallDesc: 'Возможна рассрочка <br>\n' +
                            'Инструменты предоставляются',
                            desc: 'Двухдневные тренинги Дмитрия Вашешникова: <br class="d-none d-lg-block">\n' +
                            '«Ябренд» — тренинг о том, как правильно выстроить свой имидж <br class="d-none d-lg-block">\n' +
                            'в индустрии красоты и найти свою миссию. <br class="d-none d-lg-block">\n' +
                            '<br>\n' +
                            '«Клиентовладелец» — тренинг о том, как правильно общаться с клиентом <br class="d-none d-lg-block">\n' +
                            'в салоне от приветствия до оглашения цены на услуги.'
                        }
                    }
                },
                {
                    title: 'Женский мастер',
                    class: {active: true},
                    info: {
                        doubleBlock: {
                            title: 'Женский мастер',
                            desc: 'Женские стрижки, колористка, укладки, <br class="d-none d-md-block">' +
                            'трихология и массаж',
                            classColor: 't__box-line-left--red',
                            photo: '/images/lending/doubleBox/7ydLliWUSWg.jpg',
                            minPhoto: '/images/lending/doubleBox/min/7ydLliWUSWg.jpg',
                            descPhoto: 'Так проходит обучение женским стрижкам',
                            content: '<p>\n' +
                            'Интенсивный тренинг подойдет для тех, <br class="d-none d-md-block">\n' +
                            'кто уже работает в салоне красоты <br class="d-none d-md-block">\n' +
                            'или только желает стать парикмахером. <br class="d-none d-md-block">\n' +
                            '</p>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '<div class="t__big-number">21</div>\n' +
                            '<div>\n' +
                            '    день интенсивного практического <br class="d-none d-md-block">\n' +
                            '    обучения с максимальным <br class="d-none d-md-block">\n' +
                            '    погружением в профессию\n' +
                            '</div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '<div class="t__big-number">8</div>\n' +
                            '<div>\n' +
                            '    часов в день и более <br class="d-none d-md-block">\n' +
                            '    под контролем лучших тренеров\n' +
                            '</div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '<div class="t__big-number">2</div>\n' +
                            '<div>\n' +
                            '    модели в день <br class="d-none d-md-block">\n' +
                            '    минимум\n' +
                            '</div>\n' +
                            '</div>\n' +
                            '<p>\n' +
                            'Практика с первого дня обучения. За время\n' +
                            'обучения каждый ученик отрабатывает\n' +
                            'минимум 45 стрижек и окрашиваний\n' +
                            'на моделях.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            'Работа в уникальной технике, с помощью\n' +
                            'которой вы сможете воспроизвести\n' +
                            'любую стрижку, любой сложности.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            'Малые группы до 7 человек.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            'На время обучения предоставляем\n' +
                            'инструменты настоящего салонного мастера.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            'Портфолио. Ваши работы снимает\n' +
                            'профессиональный фотограф.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            'Иногородним ученикам предоставляем\n' +
                            'жилье по минимальной цене.\n' +
                            '</p>'
                        },
                        trainerBlock: [
                            {
                                img: '/images/lending/2.png',
                                link: 'http://demetrius.ru/trainers/2032',
                                name: 'АЛЕНА <br class="d-none d-md-block">' +
                                'МАКОТЕРСКАЯ',
                                desc: 'тренер по женской <br class="d-none d-md-block">' +
                                'стрижке'
                            },
                            {
                                img: '/images/pages/about-school/girl2.png',
                                link: 'http://demetrius.ru/trainers/2031',
                                name: 'АННА <br class="d-none d-md-block">' +
                                'ТЕМИР',
                                desc: 'тренер <br class="d-none d-md-block">' +
                                'по колористике'
                            },
                            {
                                img: '/images/pages/about-school/girl3.png',
                                link: 'http://demetrius.ru/trainers/70',
                                name: 'ВАЛЕРИЯ <br class="d-none d-md-block">' +
                                'ЗАЙЦЕВА',
                                desc: 'тренер <br class="d-none d-md-block">' +
                                'по колористике'
                            },
                            {
                                img: '/images/pages/about-school/olga-minina.png',
                                link: 'http://demetrius.ru/trainers/2026',
                                name: 'ОЛЬГА <br class="d-none d-md-block">' +
                                'МИНИНА',
                                desc: 'тренер по жен ской <br class="d-none d-md-block">' +
                                'стрижке'
                            }
                        ],
                        actionBlock: {
                            cost: 'Стоимость 89 000 <span class="ruble">q</span>',
                            smallDesc: 'Возможна рассрочка <br>\n' +
                            'Инструменты предоставляются',
                            desc: 'Двухдневный тренинг Дмитрия Вашешникова «Клиентовладелец» — <br class="d-none d-lg-block">\n' +
                            ' тренинг о том, как правильно общаться с клиентом в салоне <br class="d-none d-lg-block">\n' +
                            ' от приветствия до оглашения цены на услуги.'
                        }

                    }
                },
                {
                    title: 'Мужской мастер',
                    class: {active: false},
                    info: {
                        doubleBlock: {
                            title: 'Мужской мастер',
                            desc: 'Мужские стрижки, мужская колористика, <br class="d-none d-md-block">' +
                            'трихология и массаж',
                            classColor: 't__box-line-left--black',
                            photo: '/images/lending/doubleBox/gNiTTFapCBY.jpg',
                            minPhoto: '/images/lending/doubleBox/min/gNiTTFapCBY.jpg',
                            descPhoto: 'Так проходит обучение мужским стрижкам',
                            content: '<p>\n' +
                            '    Интенсивный курс подойдет для тех, <br class="d-none d-md-block">\n' +
                            '    кто ни разу не держал парикмахерские <br class="d-none d-md-block">\n' +
                            '    ножницы в руках, а также для тех, работает <br class="d-none d-md-block">\n' +
                            '    в салоне, но ему не хватает практики и опыта\n' +
                            '</p>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">13</div>\n' +
                            '    <div>\n' +
                            '        день интенсивного практического <br class="d-none d-md-block">\n' +
                            '        обучения с максимальным <br class="d-none d-md-block">\n' +
                            '        погружением в профессию\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">8</div>\n' +
                            '    <div>\n' +
                            '        часов в день и более <br class="d-none d-md-block">\n' +
                            '        под контролем лучших тренеров\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">2</div>\n' +
                            '    <div>\n' +
                            '        модели в день <br class="d-none d-md-block">\n' +
                            '        минимум\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<p>\n' +
                            '    Практика с первого дня обучения. За время\n' +
                            '    обучения каждый ученик отрабатывает\n' +
                            '    минимум 35 стрижек и окрашиваний\n' +
                            '    на моделях.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Работа в уникальной технике, с помощью\n' +
                            '    которой вы сможете воспроизвести\n' +
                            '    любую стрижку, любой сложности.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Малые группы до 7 человек.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    На время обучения предоставляем\n' +
                            '    инструменты настоящего салонного мастера.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Портфолио. Ваши работы снимает\n' +
                            '    профессиональный фотограф.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Иногородним ученикам предоставляем\n' +
                            '    жилье по минимальной цене.\n' +
                            '</p>'
                        },
                        trainerBlock: [
                            {
                                img: '/images/lending/1.png',
                                link: 'http://demetrius.ru/trainers/2023',
                                name: 'ДИАНА <br class="d-none d-md-block">' +
                                'БОЛДЫРЕВА',
                                desc: 'тренер по мужской <br class="d-none d-md-block">' +
                                'стрижке'
                            }
                        ],
                        actionBlock: {
                            cost: 'Стоимость 59 800 <span class="ruble">q</span>',
                            smallDesc: 'Можно пройти тренинг в рассрочку <br class="d-none d-md-block">' +
                            'Инструменты предоставляются',
                            desc: 'Двухдневный тренинг Дмитрия Вашешникова «Ябренд». <br class="d-none d-lg-block">\n' +
                            'Ябренд — тренинг о том, как правильно выстроить свой имидж <br class="d-none d-lg-block">\n' +
                            'в индустрии красоты и найти свою миссию.'
                        }
                    }
                },
                {
                    title: 'Колорист. Шаг 1',
                    class: {active: false},
                    info: {
                        doubleBlock: {
                            title: 'Колорист. Шаг 1',
                            desc: 'Окрашивание в 1 тон, тонирование, <br class="d-none d-md-block">' +
                            'седина, блонды.',
                            classColor: 't__box-line-left--rainbow',
                            photo: '/images/lending/doubleBox/Bw2U5PX9-tc.jpg',
                            minPhoto: '/images/lending/doubleBox/min/Bw2U5PX9-tc.jpg',
                            descPhoto: 'Так проходит обучение колористике',
                            content: '<p>\n' +
                            '    Интенсивный курс подойдет для тех, <br class="d-none d-md-block">\n' +
                            '    кто ни разу делал окрашивание, <br class="d-none d-md-block">\n' +
                            '    а также для тех, работает в салоне, <br class="d-none d-md-block">\n' +
                            '    но ему не хватает практики и опыта\n' +
                            '</p>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">4</div>\n' +
                            '    <div>\n' +
                            '        день интенсивного практического <br class="d-none d-md-block">\n' +
                            '        обучения с максимальным <br class="d-none d-md-block">\n' +
                            '        погружением в профессию\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">8</div>\n' +
                            '    <div>\n' +
                            '        часов в день и более <br class="d-none d-md-block">\n' +
                            '        под контролем лучших тренеров\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<div class="d-flex mb-3 small t__text-red align-items-center">\n' +
                            '    <div class="t__big-number">1-2</div>\n' +
                            '    <div>\n' +
                            '        модели в день <br class="d-none d-md-block">\n' +
                            '        минимум\n' +
                            '    </div>\n' +
                            '</div>\n' +
                            '<p>\n' +
                            '    Практика с первого дня обучения.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Работа в уникальной технике, с помощью\n' +
                            '    которой вы сможете воспроизвести\n' +
                            '    любую стрижку, любой сложности.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Малые группы до 7 человек.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    На время обучения предоставляем\n' +
                            '    инструменты настоящего салонного мастера.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Портфолио. Ваши работы снимает\n' +
                            '    профессиональный фотограф.\n' +
                            '</p>\n' +
                            '<p>\n' +
                            '    Иногородним ученикам предоставляем\n' +
                            '    жилье по минимальной цене.\n' +
                            '</p>'
                        },
                        trainerBlock: [
                            {
                                img: '/images/pages/about-school/girl2.png',
                                link: 'http://demetrius.ru/trainers/2031',
                                name: 'АННА <br class="d-none d-md-block">' +
                                'ТЕМИР',
                                desc: 'тренер <br class="d-none d-md-block">' +
                                'по колористике'
                            }
                        ],
                        actionBlock: {
                            cost: 'Стоимость 20 000 <span class="ruble">q</span>',
                            smallDesc: 'Можно пройти тренинг в рассрочку <br class="d-none d-md-block">' +
                            'Инструменты предоставляются',
                            desc: ''
                        }

                    }
                }
            ],
            linksActive: 1,
            linksArrow: 0
        },
        computed: {
            activeLArrow: function () {
                if (this.linksActive > 0) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            },
            titleLArrow: function () {
                if (this.linksActive > 0) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            },
            activeRArrow: function () {
                if (this.linksActive < (this.links.length - 1)) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            },
            titleRArrow: function () {
                if (this.linksActive < (this.links.length - 1)) {
                    return {active: true};
                } else {
                    return {active: false};
                }
            }
        },
        methods: {
            clickLink: function(i) {
                this.links[this.linksActive].class.active = false;
                this.links[i].class.active = true;
                this.linksActive = i;
            },
            clickArrow: function(i) {
                this.linksArrow = this.linksActive + i;
                if (this.linksArrow >= 0 && this.linksArrow < this.links.length) {
                    this.clickLink(this.linksArrow);
                }
            },
            changeSelect: function(e){
                this.clickLink(parseInt(e.target.value));
            }
        }
    };
    var js_lending = new Vue(js_lending__setting);
</script>
<script src="{{ mix('js/scripts.js') }}"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script>
    // Дождёмся загрузки API и готовности DOM.
    ymaps.ready(initMap);

    function initMap() {

        var myMap = new ymaps.Map('map', {
                center: [55.712589, 37.723870],
                zoom: 17,
                controls: ['smallMapDefaultSet'],
                type: 'yandex#map'
            }),
            // Создаём макет содержимого.
            MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                '<div style="color: #FFFFFF; font-weight: normal;">$[properties.iconContent]</div>'
            ),

            myPlacemarkWithContent1 = new ymaps.Placemark([55.712589, 37.723870], {
                hintContent: 'Demetrius',
                balloonContent: 'Demetrius, Россия, Москва, Волгоградский проспект, 47',
                iconContent: ''
            }, {
                // Опции.
                // Необходимо указать данный тип макета.
                iconLayout: 'default#imageWithContent',
                // Своё изображение иконки метки.
                iconImageHref: 'images/lending/map.svg',
                // Размеры метки.
                iconImageSize: [50, 50],
                // Смещение левого верхнего угла иконки относительно
                // её "ножки" (точки привязки).
                iconImageOffset: [-24, -50],
                // Смещение слоя с содержимым относительно слоя с картинкой.
                iconContentOffset: [15, 15],
                // Макет содержимого.
                iconContentLayout: MyIconContentLayout
            });

        myMap.behaviors.disable('scrollZoom');

        myMap.geoObjects
            .add(myPlacemarkWithContent1);
    }
</script>
</body>
</html>
