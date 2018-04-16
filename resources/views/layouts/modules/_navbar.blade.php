<header class="header header-demetrius d-none d-lg-block">
    <div class="container">
        <div class="row d-flex flex-wrap">
            <div class="col-lg-3 col-md-6 header__phones">
                <div class="header__phone-wrapper">
                    <div class="header__phone-label">
                        Запись на обучение
                    </div>
                    <div class="header__phone">
                        <a href="tel:+79057042131" class="header__phone link-span-black-red">+<span
                                    class="border-bottom-dashed">7 905 704-21-31</span></a>
                    </div>
                </div>

                <div class="header__phone-wrapper">
                    <div class="header__phone-label">
                        Запись моделью
                    </div>
                    <div class="header__phone">
                        <a href="tel:+79851276390" class="header__phone link-span-black-red">+<span
                                    class="border-bottom-dashed">7 985 127-63-90</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12  ">
                <a href="/" data-href="{{ env('SITE_URL') }}">
                    <img src="/images/pages/main/header-logotype.svg" class="header__logotype img-fluid">
                </a>
            </div>
            <div class="col-lg-3 col-md-6 header__socials">
                <div class="d-flex flex-row justify-content-center no-gutters">
                    <div class="col-auto">
                        <div class="header__social-wrapper">
                            <a href="home" class="header__social-link house-link">
                                Дом деметриус&nbsp;&nbsp;
                                <div class="header__social-link__img img-fluid header__social-icon images-contain"></div>
                            </a>
                        </div>
                    </div>

                    @include('site.layouts.modules.navbar._socialLink',[
                         'href'=> env('LINK_DEMETRIUS_YOUTUBE'),
                         'iconClass'=>'header__social-icon',
                         'src'=>'/images/pages/main/header/socials/youtube.svg',
                         'linkClass'=>'header__social-link',
                     ])

                    @include('site.layouts.modules.navbar._socialLink',[
                        'href'=> env('LINK_DEMETRIUS_INSTAGRAM'),
                        'iconClass'=>'header__social-icon',
                        'src'=>'/images/pages/main/header/socials/insta.svg',
                        'linkClass'=>'header__social-link',
                    ])

                    @include('site.layouts.modules.navbar._socialLink',[
                      'href'=> env('LINK_DEMETRIUS_VKONTAKTE'),
                      'iconClass'=>'header__social-icon',
                      'src'=>'/images/pages/main/header/socials/vk.svg',
                      'linkClass'=>'header__social-link',
                  ])
                </div>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg  navbar-dmt navbar-default navbar-light">
    <a class="navbar-brand d-lg-flex d-xl-none" href="/">
        <img src="/images/logotypes/demetrius_logo_text.svg" height="25" width="200" alt="" class="img-fluid">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">


        <ul class="navbar-nav mx-auto header__bottom-block">

            @include('site.layouts.modules.navbar._navItem',[
           'href' => route('about'),
           'name' => 'О школе',
            'dropdowns' => [
                [
                    'title' => 'Тренеры школы',
                    'href' => route('about').'#about-school__our-team'
                ],
                [
                    'title' => 'Фотогалерея',
                    'href' => route('photoGallery')
                ],
                [
                    'title' => 'Видеогалерея',
                    'href' => route('videoGallery')
                ],
                [
                    'title' => 'Instagram',
                    'href' => route('instagram')
                ],
                [
                    'title' => 'Отзывы',
                    'href' => route('reviews.index')
                ]
            ]
           ])

            @include('site.layouts.modules.navbar._navItem',[
            'href'=>route('courses.index'),
            'name'=>'Курсы',
            'dropdowns' => [
                [
                    'title' => 'Женские стрижки',
                    'href' => route('courses.index', [ 'faculty' => 'js-faculty-id-1' ])
                ],
                [
                    'title' => 'Мужские стрижки',
                    'href' => route('courses.index', [ 'faculty' => 'js-faculty-id-2' ])
                ],
                [
                    'title' => 'Колористика',
                    'href' => route('courses.index', [ 'faculty' => 'js-faculty-id-4' ])
                ],
                [
                    'title' => 'Заказать обучение',
                    'href' => route('actions')
                ],
                [
                    'title' => 'Обучение с нуля',
                    'href' => 'http://obuchenies0.lpmotortest.ru/'
                ],
                [
                    'title' => 'Путь чемпиона',
                    'href' => 'http://konkurs-demetrius.ru/'
                ]
            ]
            ])

            @include('site.layouts.modules.navbar._navItem',[
        'href'=>route('pages.calendar'),
        'name'=>'Календарь'
        ])

            @include('site.layouts.modules.navbar._navItem',[
       'href'=>route('posts'),
       'name'=>'Блог'
       ])

            @include('site.layouts.modules.navbar._navItem',[
        'href'=>route('sale'),
        'name'=>'Скидки'
        ])

            @include('site.layouts.modules.navbar._navItem',[
         'href'=>route('contacts'),
         'name'=>'Контакты',
            'dropdowns' => [
                [
                    'title' => 'Как пройти',
                    'href' => route('howToGet')
                ]
            ]
         ])
        </ul>


        <ul class="navbar-nav mr-auto b-block d-lg-none">

            @include('site.layouts.modules.navbar._navItem',[
            'href'=>route('home'),
            'name'=>'Дом деметриус'
            ])

            @include('site.layouts.modules.navbar._navItem',[
      'href'=>'https://www.youtube.com/user/DemetriusSchool',
      'name'=>'Youtube'
      ])

            @include('site.layouts.modules.navbar._navItem',[
    'href'=>'https://www.instagram.com/demetriusschool/',
    'name'=>'Instagram'
    ])

            @include('site.layouts.modules.navbar._navItem',[
    'href'=>'https://vk.com/demetrius_school',
    'name'=>'Vkontakte'
    ])


        </ul>

    </div>
</nav>