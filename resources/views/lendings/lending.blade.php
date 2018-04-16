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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bilderrahmen@1.0.0/bilderrahmen.css" rel="stylesheet" />
    <link href="{{ mix('css/style.css') }}" rel="stylesheet">
</head>
<body class="site__body">

<div class="container">
    <div class="row">
        <div class="col-12 pt-5 pb-5">
            <div class="images-contain w-100" style="height: 5rem; background-image: url(/images/lending/logo.svg);"></div>
        </div>
        <div class="col-12 text-center">
            <p class="text-uppercase text-spacing mb-1 h2">Парикмахер салона красоты</p>
            <p class="d-block text-uppercase text-spacing font-weight-bold" style="font-size: .7rem;">Обучение с нуля</p>
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
        <a href="#" class="landing-red-link text-decoration-none">
            <div class="row no-gutters align-items-center">
                <div class="col-auto">
                    <div class="images-contain m-1" style="height: 2rem; width: 2rem; background-image: url(/images/lending/icon-pdf.svg);"></div>
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
            <div    v-for="(link, i) in links"
                    class="col-auto">
                <div @click="clickLink(i)" :key="i"
                     class="t__link-border" :class="link.class">
                    @{{link.title}}
                </div>
            </div>
            <div class="col-auto">
                <div @click="clickArrow(+1)" :class="activeRArrow"
                        class="t__link-right images-contain"></div>
            </div>
        </div>
    </div>

    <div class="w-100" style="height: 10rem;">

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
            <p>Москва, <img class="d-inline icon-small-top " style="height: .8rem;" src="/images/lending/metro.svg" alt="metro">Текстильщики  <br class="d-none d-md-block">
                Волгоградский проспект, 47, <br class="d-none d-md-block">
                Бизнес-центр «Cube»</p>
            <a href="tel:+79651085553" class="d-block link--hover-red">+7 965 108-55-53</a>
            <p class="font-italic">Ответим в любое время</p>
            <div class="d-flex align-items-center justify-content-center justify-content-md-start">
                <div class="images-contain m-2" style="height: 6rem; width: 6rem; background-image: url(/images/lending/ava-min.png);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
                <div class="text-left">
                    <p class="mb-0"><a href="#" class="font-weight-bold border-bottom-solid">Кристина</a><a href="#"><img class="d-inline pl-1 icon-small-top" style="height: .8rem;" src="/images/lending/vk-blue.svg" alt="vk-blue"></a></p>
                    <p class="font-italic mb-0">Руководитель проекта</p>
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<section class="position-relative overflow-hidden container-primary" style="height: 20rem;">
    <a class="h-100 w-100 d-block d-md-none" href="https://yandex.ru/maps/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;source=constructorStatic" target="_blank"><div class="images-cover" style="background-image: url('https://api-maps.yandex.ru/services/constructor/1.0/static/?um=constructor%3Af683efc92ee432a7bc17743f6b15edbd8feae95ce09c5aeb4b68e5221b4fd340&amp;width=600&amp;height=450&amp;lang=ru_RU');"></div></a>
    <div class="w-100 h-100 d-none d-md-block">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A980839373fb3c161179882531fe3280a26ae743620f168f3a84734ab5524f101&amp;source=constructor" width="100%" height="400" frameborder="0"></iframe>
    </div>
</section>

<footer class="pt-5 pb-5 main-bg-color-red">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col d-none d-lg-block"></div>
            <div class="col-auto">
                <div class="images-contain m-2" style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/fb.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="images-contain m-2" style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/vk.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="w-100 d-sm-none d-block"></div>
            <div class="col-auto">
                <div class="images-contain m-2" style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/insta.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col-auto">
                <div class="images-contain m-2" style="height: 3rem; width: 3rem; background-image: url(/images/lending/social/youtube.svg);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
            </div>
            <div class="col d-none d-lg-flex align-items-center">
                <p class="h3 mb-0 pl-2 text-white font-weight-light">
                &mdash; Мы здесь!
                </p>
            </div>

            <div class="col-12 pt-5 mt-4 text-center">
                <a href="#" class="text-white border-bottom-dashed">
                    Политика конфиденциальности
                </a>
            </div>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<script src="https://cdn.jsdelivr.net/gh/requirejs/requirejs@2.3.5/require.js"></script>
<script>
    var js_lending__setting ={
        el: '#js-lending',
        data: {
            links: [
                {
                    title: 'Мастер-универсал',
                    class: {active: false}
                },
                {
                    title: 'Женский мастер',
                    class: {active: true}
                },
                {
                    title: 'Мужской мастер',
                    class: {active: false}
                },
                {
                    title: 'Колорист. Шаг 1',
                    class: {active: false}
                }
            ],
            linksActive: 1,
            linksArrow: 0
        },
        computed: {
            activeLArrow: function () {
                if(this.linksActive > 0){
                    return { active: true };
                }else{
                    return { active: false };
                }
            },
            titleLArrow: function () {
                if(this.linksActive > 0){
                    return { active: true };
                }else{
                    return { active: false };
                }
            },
            activeRArrow: function () {
                if(this.linksActive < (this.links.length - 1)){
                    return { active: true };
                }else{
                    return { active: false };
                }
            },
            titleRArrow: function () {
                if(this.linksActive < (this.links.length - 1)){
                    return { active: true };
                }else{
                    return { active: false };
                }
            }
        },
        methods: {
            clickLink(i){
                this.links[this.linksActive].class.active = false;
                this.links[i].class.active = true;
                this.linksActive = i;
            },
            clickArrow(i){
                this.linksArrow = this.linksActive + i;
                if(this.linksArrow >= 0 && this.linksArrow < this.links.length){
                    this.clickLink(this.linksArrow);
                }
            }
        }
    };
    var js_lending = new Vue(js_lending__setting);
</script>
<script src="{{ mix('js/scripts.js') }}"></script>
</body>
</html>
