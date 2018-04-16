@extends('site.layouts.app')

@section('content')

    <div class="wrap__main-preloader">
        <div class="banter-loader">
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
            <div class="banter-loader__box"></div>
        </div>
    </div>

    @include('site.pages.main.diamonds')
    @include('site.pages.main.review')
    @include('site.pages.main.masters')
    @include('site.pages.main.enrollment')
    @include('site.pages.main.enrollmentZero')
    @include('site.pages.main.signUpAsModel')
    @include('site.pages.main.schedule')
    @include('site.pages.main.trainers')


    @include('site.pages.main.faculties')

    @include('site.pages.main.videos')

    @include('site.pages.main.gallery')

    @include('site.pages.main.reviews')
@endsection
