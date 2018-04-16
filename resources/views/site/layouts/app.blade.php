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
    <link rel="preload" href="/images/static/refresh-hover-red.svg" as="image">
    <link rel="preload" href="/images/static/house-demetrius-icon-hover.svg" as="image">
</head>
<body class="site__body">

{{--<img src="/images/pages/main/index.png" style="position: absolute;top:0;left:51.6%; margin-left: -50%; opacity: .5; z-index:-5">--}}
@includeIf('site.layouts.modules._navbar')

@includeIf('layouts.modules._flash')
@yield('content')
@include('modals.modal',
[
    'id' => 'oneModal',
    'title' => 'Запись моделью',
    'btn_title' => 'Записаться'

])
@include('modals.modalReview',
[
    'id' => 'modalReview',
    'title' => 'Отзыв'

])
@include('site.layouts.modules.socials')
@include('site.layouts.modules.footer')
<script src="{{ mix('js/all.js') }}"></script>
@stack('scripts')
</body>
</html>
