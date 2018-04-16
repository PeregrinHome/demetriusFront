@extends('site.layouts.app')

@section('content')

    <script>
        window.educationsRoute = '{!! $educationsRoute !!}';
    </script>

    <div class="calendar overflow-hidden">
        <h2 class="mainpage-h2 font-oswald padding-bottom-3">Расписание <span class="calendar--today-year"></span></h2>
        <div class="calendar__navigation" id="calendar__navigation">
            <div class="container">
                <div class="row">
                    <div class="col-12 padding-bottom-2-rem display-center-md">
                        <div class="template__control template__control--inline justify-content-center">
                            @forelse($faculties as $faculty)
                                <div class="template__control--inline__item">
                                    <input value="{{ trim($faculty->getAliasForJS()) }}" type="checkbox" id="checkbox_{{ trim($faculty->getAliasForJS()) }}" name="faculty" class="template__control--inline__item--radio-checkbox__input">
                                    <label class="template__control--inline__item--radio-checkbox__label" for="checkbox_{{ trim($faculty->getAliasForJS()) }}">{{ $faculty->getName() }}</label>
                                </div>
                            @empty
                            @endforelse
                        </div>
                    </div>
                    <div class="col-12 padding-bottom-2-rem display-center-md">
                        <div class="template__control template__control--inline justify-content-center">
                            <div class="template__control--inline__item">
                                <input value="js-moscow" type="checkbox" id="Exemple_checkbox_5" name="Exemple_checkbox_5"
                                       class="template__control--inline__item--radio-checkbox__input js-city">
                                <label class="template__control--inline__item--radio-checkbox__label"
                                       for="Exemple_checkbox_5">В Москве</label>
                            </div>
                            <div class="template__control--inline__item" style="width: 200px;">
                                <select class="template__control--inline__item--select" id="Exemple_select_2">
                                    <option selected value="">В других городах</option>
                                    <option value="tagil">Tagil</option>
                                    <option value="ecat">Ecat</option>
                                    <option value="saratov">Saratov</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="calendar__body">
            <div class="calendar__body__pagination calendar__body__pagination--top">
                <div class="calendar__body__pagination__item calendar__body__pagination__item--left"><span class="calendar__body__pagination__item__icon"><</span><span class="calendar__body__pagination__item__text--left calendar__body__pagination__item__text">Август</span></div>
                <div class="calendar__body__pagination__item calendar__body__pagination__item--center"><span class="calendar__body__pagination__item__text calendar__body__pagination__item__text--center">Сентябрь</span></div>
                <div class="calendar__body__pagination__item calendar__body__pagination__item--right"><span class="calendar__body__pagination__item__text--right calendar__body__pagination__item__text">Октябрь</span><span class="calendar__body__pagination__item__icon">></span></div>
            </div>

            <div class="calendar__body__bar pt-3 d-lg-none" id="calendar__body__bar"></div>

            {{--<div class="calendar__body__table hidden-md" id="calendar__body__table">--}}
            <div class="calendar__body__table pt-3 d-none d-lg-block " id="calendar__body__table"></div>

            <div class="calendar__body__pagination calendar__body__pagination--bottom">
                <div class="calendar__body__pagination__item calendar__body__pagination__item--left"><span class="calendar__body__pagination__item__icon"><</span><span class="calendar__body__pagination__item__text--left calendar__body__pagination__item__text">Август</span></div>
                <div class="calendar__body__pagination__item calendar__body__pagination__item--center"><span class="calendar__body__pagination__item__text calendar__body__pagination__item__text--center">Сентябрь</span></div>
                <div class="calendar__body__pagination__item calendar__body__pagination__item--right"><span class="calendar__body__pagination__item__text--right calendar__body__pagination__item__text">Октябрь</span><span class="calendar__body__pagination__item__icon">></span></div>
            </div>
        </div>
    </div>
@endsection
