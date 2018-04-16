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

<div class="container">
    <div class="row">
        <div class="col-12">
            <p class="h3 pt-3 pb-5 text-center">Факультеты</p>
        </div>
    </div>
</div>

<div class="w-100" style="height: 10rem;">

</div>

<div class="container pb-5 pt-4">
    <div class="row">
        <div class="col-12">
            <p class="h3 pt-3 pb-5 text-center">Наш адрес</p>
        </div>
        <div class="col-12 col-md-6">
            {{ Form::open(['route'=>"call-requests.store",'method'=>'POST']) }}
            <div>

                @include('forms._select',
                [
                    'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                    'name' => 'request_date',
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
                    'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                    'placeholder' => 'Имя',
                    'type' => 'text',
                    'name' => 'name'

                ])
                @include('forms._input',
                [
                    'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                    'placeholder' => 'Телефон',
                    'type' => 'tel',
                    'name' => 'phone'

                ])
                @include('forms._input',
                [
                    'classFormGroup' => 'col-md-6 col-lg-3 template__input',
                    'placeholder' => 'Email',
                    'type' => 'email',
                    'name' => 'email'

                ])
                <button type="submit" class="btn btn-danger btn-primary--gradient js-btn_title">
                    Записаться
                </button>
            </div>
            {{ Form::close() }}
        </div>
        <div class="col-12 col-md-6">
            <p>Москва, <img class="d-inline icon-small-top " style="height: .8rem;" src="/images/lending/metro.svg" alt="metro">Текстильщики  <br class="d-none d-md-block">
                Волгоградский проспект, 47, <br class="d-none d-md-block">
                Бизнес-центр «Cube»</p>
            <a href="tel:+79651085553" class="d-block link--hover-red">+7 965 108-55-53</a>
            <p class="font-italic">Ответим в любое время</p>
            <div class="d-flex align-items-center">
                <div class="images-contain m-2" style="height: 6rem; width: 6rem; background-image: url(/images/lending/ava-min.png);">
                    <a href="#" class="w-100 h-100 d-block"></a>
                </div>
                <div>
                    <p class="mb-0"><a href="#" class="font-weight-bold border-bottom-solid">Кристина</a><a href="#"><img class="d-inline pl-1 icon-small-top" style="height: .8rem;" src="/images/lending/vk-blue.svg" alt="vk-blue"></a></p>
                    <p class="font-italic mb-0">Руководитель проекта</p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ mix('js/scripts.js') }}"></script>
</body>
</html>
