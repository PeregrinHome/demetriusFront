<style>
    .trainer__name {
        margin-right: -6rem;
        z-index: 10;
    }

    .trainer__photo {
        height: 8.2rem;
        margin-bottom: -2.2rem;
    }
    .trainer__photo--static {
        display: block;
    }

    .trainer__photo--dynamic {
        display: none;
    }

    .trainer__free-places {
        padding-top: 1rem;
        font-size: 90%;
        color: #999;
    }
    .trainer:focus .trainer__free-places,  .trainer:hover .trainer__free-places {
        color: white;
    }
</style>


<section class="trainers overflow-hidden">

    @include('site.pages.main.trainer',[
'imageStatic'=>'/images/pages/main/min/mini-alena-png.png',
'imageDynamic'=>'/cdn/design/pages/index/trainers/mini-alena.gif',
'lineColor'=>'#6ac693',
'lineColorHover'=>'#c3bcb1',
'color'=>'black',
'colorHover'=>'white',
'name'=>'Алена Прекрасная',
'date'=>'2018-01-15 12:00:00',
'description'=>'Совершенство боб/каре.<br>Женские стрижки на волосы средней длины',
'freePlaces'=>'3'
])

    @include('site.pages.main.trainer',[
'imageStatic'=>'/images/pages/main/min/mini-boldyreva-png.png',
'imageDynamic'=>'/cdn/design/pages/index/trainers/mini-boldyreva.gif',
'lineColor'=>'#6ac693',
'lineColorHover'=>'#c3bcb1',
'color'=>'black',
'colorHover'=>'white',
'name'=>'Диана Болдырева',
'date'=>'2018-01-15 12:00:00',
'description'=>'Совершенство боб/каре.<br>Женские стрижки на волосы средней длины',
'freePlaces'=>'3'
])

    @include('site.pages.main.trainer',[
   'imageStatic'=>'/images/pages/main/min/mini-marey-png.png',
   'imageDynamic'=>'/cdn/design/pages/index/trainers/mini-marey.gif',
   'lineColor'=>'#6ac693',
   'lineColorHover'=>'#c3bcb1',
   'color'=>'black',
   'colorHover'=>'white',
   'name'=>'Елена Марейчева',
   'date'=>'2018-01-15 12:00:00',
   'description'=>'Совершенство боб/каре.<br>Женские стрижки на волосы средней длины',
   'freePlaces'=>'2'
   ])



    {{--@include('site.pages.main.trainer',[--}}
{{--'imageStatic'=>'/images/pages/main/trainers/mini-semenyk-png.png',--}}
{{--'imageDynamic'=>'/images/pages/main/trainers/mini-semenyk.gif',--}}
{{--'lineColor'=>'#6ac693',--}}
{{--'lineColorHover'=>'#c3bcb1',--}}
{{--'color'=>'black',--}}
{{--'colorHover'=>'white',--}}
{{--'name'=>'Заряна Семенюк',--}}
{{--'date'=>'2018-01-15 12:00:00',--}}
{{--'description'=>'Совершенство боб/каре.<br>Женские стрижки на волосы средней длины',--}}
{{--'freePlaces'=>'3'--}}
{{--])--}}

    {{--@include('site.pages.main.trainer',[--}}
{{--'imageStatic'=>'/images/pages/main/trainers/mini-temir-png.png',--}}
{{--'imageDynamic'=>'/images/pages/main/trainers/mini-temir.gif',--}}
{{--'lineColor'=>'#6ac693',--}}
{{--'lineColorHover'=>'#c3bcb1',--}}
{{--'color'=>'black',--}}
{{--'colorHover'=>'white',--}}
{{--'name'=>'Анна Темир',--}}
{{--'date'=>'2018-01-15 12:00:00',--}}
{{--'description'=>'Совершенство боб/каре.<br>Женские стрижки на волосы средней длины',--}}
{{--'freePlaces'=>'3'--}}
{{--])--}}

    {{--@include('site.pages.main.trainer',[--}}
{{--'imageStatic'=>'/images/pages/main/trainers/mini-vasheshnikov-png.png',--}}
{{--'imageDynamic'=>'/images/pages/main/trainers/mini-vasheshnikov.gif',--}}
{{--'lineColor'=>'#6ac693',--}}
{{--'lineColorHover'=>'#c3bcb1',--}}
{{--'color'=>'black',--}}
{{--'colorHover'=>'white',--}}
{{--'name'=>'Дмитрий Вашешников',--}}
{{--'date'=>'2018-01-26 13:33:00',--}}
{{--'description'=>'Барбер Деметриус',--}}
{{--'freePlaces'=>'0'--}}
{{--])--}}

    {{--@include('site.pages.main.trainer',[--}}
{{--'imageStatic'=>'/images/pages/main/trainers/mini-minina-png.png',--}}
{{--'imageDynamic'=>'/images/pages/main/trainers/mini-minina.gif',--}}
{{--'lineColor'=>'#6ac693',--}}
{{--'lineColorHover'=>'#c3bcb1',--}}
{{--'color'=>'black',--}}
{{--'colorHover'=>'white',--}}
{{--'name'=>'Ольга Минина',--}}
{{--'date'=>'2018-02-17 17:20:00',--}}
{{--'description'=>'Перезагрузка<br>Женские стрижки по технике Деметриуса',--}}
{{--'freePlaces'=>'4'--}}
{{--])--}}

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto padding-top-bottom-2">
                <a href="{{ route('pages.calendar') }}" class="btn btn-outline-red border-width-2">
                    Показать еще
                </a>
            </div>
        </div>
    </div>


</section>