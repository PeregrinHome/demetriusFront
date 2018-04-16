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


@includeIf('layouts.modules._flash')
@yield('content')

<script src="{{ mix('js/scripts.js') }}"></script>
@stack('scripts')
</body>
</html>
