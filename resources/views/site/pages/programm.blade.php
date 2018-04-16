<?php
    /**
     * @var \App\Models\Courses\Course $course
     */
?>

@extends('site.layouts.app')

@section('content')



    <div class="programm">
        <h2 class="mainpage-h2 font-oswald padding-bottom-3">Обучение</h2>

        <div class="programm__navigation" id="programm__navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12 padding-bottom-2-rem display-center-md">
                        <div class="template__control template__control--inline justify-content-center">
                            <div class="template__control--inline__item">
                                <input value="all" type="radio" id="radio_all" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="template__control--inline__item--radio-checkbox__label" for="radio_all">Показать все</label>
                            </div>
                            <div class="template__control--inline__item">
                                <input checked value="menhaircut" type="radio" id="radio_menhaircut" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="template__control--inline__item--radio-checkbox__label" for="radio_menhaircut">Мужские стрижки</label>
                            </div>
                            <div class="template__control--inline__item">
                                <input value="womenhaircut" type="radio" id="radio_womenhaircut" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="template__control--inline__item--radio-checkbox__label" for="radio_womenhaircut">Женские стрижки</label>
                            </div>
                            <div class="template__control--inline__item">
                                <input value="kurs1" type="radio" id="radio_kurs1" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="template__control--inline__item--radio-checkbox__label" for="radio_kurs1">Прически и укладки</label>
                            </div>
                            <div class="template__control--inline__item">
                                <input value="kurs2" type="radio" id="radio_kurs2" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="template__control--inline__item--radio-checkbox__label" for="radio_kurs2">Колористика</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p style="padding-left: .6rem;">По тренеру:</p>
                    </div>
                    <div class="col-12">
                        <div class="d-flex flex-wrap padding-bottom-2-rem" style="padding-left: .6rem; padding-right: .6rem;">
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="cut" type="checkbox" id="checkbox_cut" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_cut">
                                    Заряна <br>семенюк
                                </label>
                            </div>
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="moscow" type="checkbox" id="checkbox_moscow" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_moscow">
                                    Анна <br>темир
                                </label>
                            </div>
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="saratov" type="checkbox" id="checkbox_saratov" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_saratov">
                                    дмитрий <br>вешешников
                                </label>
                            </div>
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="tagil" type="checkbox" id="checkbox_tagil" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_tagil">
                                    Ольга <br>минина
                                </label>
                            </div>
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="ecat" type="checkbox" id="checkbox_ecat" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_ecat">
                                    Елена <br>Мареичева
                                </label>
                            </div>
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="wedding_hairstyles" type="checkbox" id="checkbox_wedding_hairstyles" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_wedding_hairstyles">
                                    Диана <br>болдырева
                                </label>
                            </div>
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="chloristics" type="checkbox" id="checkbox_chloristics" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_chloristics">
                                    Максим <br>Воробьев
                                </label>
                            </div>
                            <div class="template__control--inline__item" style="min-width: 7rem;">
                                <input value="kurs3" type="checkbox" id="checkbox_kurs3" name="haircut" class="template__control--inline__item--radio-checkbox__input">
                                <label class="pr-4 font-oswald articlepage-p3_lite text-uppercase template__control--inline__item--radio-checkbox__label--title" for="checkbox_kurs3">
                                    Валерия <br>заицева
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="programm__body__bar" id="programm__body__bar">

            @forelse($courses as $course)
                <div class="width-sm-1k1 width-lg-1k3 width-md-1k2 programm__body__bar__item ActiveEvent all moscow cut tagil chloristics menhaircut kurs1 kurs2 kurs3 ">
                    <div class="programm__body__bar__item__content">
                        <a class="text-decoration-none" href="{{ route('courses.show',$course->id) }}">
                            <div class="programm__body__bar__item__content--bg images-cover"
                                 style="background-image: url('{{ (($course->getImageUrl() !== null)? $course->getImageUrl() : route('index').'/images/pages/hqdefault.jpg') }}');"><p
                                        class="programm__body__bar__item__content--title h3">{{ $course->name ?? null }}</p>
                                <p class="programm__body__bar__item__content--description">{{ $course->getShortDescription() }}</p>
                                <div class="programm__body__bar__item__content--bg-dark"></div>
                            </div>
                        </a>
                    </div>
                </div>
            @empty
            @endforelse

        </div>

        <p class="mainpage-span-3 font-pt-sans text-center color-red padding-top-3-rem padding-bottom-2-rem">
            Разбегаются глаза? <br>
            Позвоните на +<a class="border-bottom-solid color-red" href="tel:+79057042131">7 905 704-21-31</a> и мы поможем с выбором!
        </p>

    </div>
@endsection
