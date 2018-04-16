<?php
/**
 * Прихоядт три класса 'courses', 'trainers','faculties',
 * Один лист 'facultiesList'
 */

/**
 * @var \App\Models\Courses\Course  $course
 * @var \App\Models\Users\User      $trainer
 * @var \App\Models\Courses\Faculty $faculty
 */
?>
@extends('layouts.app')

@section('content')

    <section class="courses">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="mainpage-h2 font-oswald padding-bottom-3">Курсы</h2>
                </div>
            </div>
        </div>


        <div class="programm__navigation" id="programm__navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12 padding-bottom-2-rem display-center-md">
                        <div class="template__control template__control--inline justify-content-center">
                            <div class="template__control--inline__item">
                                <input checked value="all" type="radio" id="radio_all" name="faculty" class="template__control--inline__item--radio-checkbox__input">
                                <label class="template__control--inline__item--radio-checkbox__label" for="radio_all">Показать все</label>
                            </div>
                            @forelse($faculties as $faculty)
                                <div class="template__control--inline__item">
                                    <input value="{{ trim($faculty->getAliasForJS()) }}" type="radio" id="radio_{{ trim($faculty->getAliasForJS()) }}" name="faculty" class="template__control--inline__item--radio-checkbox__input">
                                    <label class="template__control--inline__item--radio-checkbox__label" for="radio_{{ trim($faculty->getAliasForJS()) }}">{{ $faculty->getName() }}</label>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    @if(isset($trainers) && $trainers->count() > 0)
                        <div class="col-12">
                            <p style="padding-left: .6rem;">По тренеру:</p>
                        </div>
                        <div class="col-12">
                            <div class="d-flex flex-wrap padding-bottom-2-rem" style="padding-left: .6rem; padding-right: .6rem;">
                                @forelse($trainers as $trainer)
                                    <div class="template__control--inline__item" style="min-width: 7rem;">
                                        <input value="{{ trim($trainer->getAliasForJS()) }}" type="checkbox" id="checkbox_{{ trim($trainer->getAliasForJS()) }}" name="trainers" class="template__control--inline__item--radio-checkbox__input">
                                        <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_{{ trim($trainer->getAliasForJS()) }}">
                                            {{ $trainer->getFirstName() }} <br>{{ $trainer->getLastName() }}
                                        </label>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="programm__body__bar" id="programm__body__bar">

                        @if(isset($courses))
                            @forelse($courses as $course)

                                <div class="width-sm-1k1 width-lg-1k3 width-md-1k2 programm__body__bar__item all
                    {{ $course->getFacultyAliasForJS() }}
                                @forelse($course->trainers as $trainer)
                                {{ $trainer->getAliasForJS() }}
                                @empty
                                @endforelse
                                        ">
                                    <div class="programm__body__bar__item__content">
                                        <a class="text-decoration-none" href="{{ route('courses.show',$course) }}">
                                            <div class="programm__body__bar__item__content--bg images-cover"
                                                 style="background-image: url('{{ (($course->getImageUrl() !== null)? $course->getImageUrl() : route('index').'/images/pages/hqdefault.jpg') }}');"><p
                                                        class="programm__body__bar__item__content--title h3">{{ $course->getName() }}</p>
                                                <p class="programm__body__bar__item__content--description">
                                                    {{ $course->getShortDescription() }}
                                                </p>
                                                <div class="programm__body__bar__item__content--bg-dark"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @empty
                            @endforelse
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <p class="mainpage-span-3 font-pt-sans text-center color-red padding-top-3-rem padding-bottom-2-rem">
                        Разбегаются глаза? <br>
                        Позвоните на +<a class="border-bottom-solid color-red" href="tel:+79057042131">7 905 704-21-31</a> и мы поможем с выбором!
                    </p>
                </div>
            </div>
        </div>
    </section>


    {{--<div class="container">--}}
        {{--<ul>--}}
        {{--@foreach($faculties as $faculty)--}}
            {{--<li>--}}
                {{--{{ $faculty->getName() }}--}}

                {{--{{ $faculty->getAliasForJS() }}--}}
            {{--</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
        {{--<section class="courses">--}}
            {{--@if(isset($courses))--}}
                {{--<div class="row course">--}}

                    {{--@forelse($courses as $course)--}}
                        {{--<div class="col-lg-3">--}}
                            {{--<a href="{{ route('courses.show',$course) }}">--}}
                                {{--<h2>{{ $course->getName() }}</h2>--}}
        {{--Alias: {{ $course->getAliasForJS() }}--}}
                                {{--@if( $course->getImageUrl() !== null)--}}
                                    {{--<img src="{{  $course->getImageUrl() }}" class="img-fluid">--}}
                                {{--@endif--}}
                            {{--</a>--}}


                            {{--<h3>Тренеры</h3>--}}
                            {{--@forelse($course->trainers as $trainer)--}}
                                {{--<a href="{{ route('trainers.show',$trainer) }}">--}}
                                    {{--{{ $trainer->getName() }}--}}
                                    {{--Alias: {{ $trainer->getAliasForJS() }}--}}
                                {{--</a><br>--}}
                            {{--@empty--}}
                            {{--@endforelse--}}
                        {{--</div>--}}



                    {{--@empty--}}
                    {{--@endforelse--}}
                {{--</div>--}}

            {{--@endif--}}
        {{--</section>--}}

    {{--</div>--}}


@stop