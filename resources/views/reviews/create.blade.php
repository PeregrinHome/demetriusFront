@extends('site.layouts.app')

@section('content')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 pt-4 pb-5">
                <h2 class="mainpage-h2 font-oswald font-weight-light">Отзыв</h2>
                {{ Form::open(['route'=>"reviews.store",'method'=>'POST']) }}

                <div class="row">
                    <div class="col-auto">
                        @include('forms._radio',[
                'name'=>'review_type',
                'value'=>1,
                'label'=>'Я модель'
                ])
                    </div>
                    <div class="col-auto">
                        @include('forms._radio',[
                                         'name'=>'review_type',
                                         'value'=>2,
                                         'label'=>'Я мастер'
                                         ])
                    </div>
                </div>





                <div class="form-inline pb-3">
                    @include('forms._input',[
                'name'=>"review_name",
                'label'=>"Имя",
                'class'=>'outline-none border-top-0 border-bottom-gray border-left-0 border-right-0 box-shadow-none fg-1 border-radius-0',
                'labelClass'=>'color-gray-v1 pr-3',
                'classFormGroup' => 'w-100',
                'placeholder' => 'Константин Константинович Константинопольский'])
                </div>

                <div class="form-group ">
                    <label class="form-control-label color-gray-v1" for="input_text_review-text"> Отзыв </label>

                    <div class="border-red-4 pt-3 pl-3 pr-3 box-shadow-red">
                        @include('forms._textarea',[
                        'name'=>"review_text",
                        'cols' => 50,
                        'rows' => 16,
                        'class' => 'border-0 outline-none box-shadow-none border-radius-0',
                        'style' => 'resize: none;'])
                    </div>

                </div>

                <div class="text-center pt-5">
                    <button class="btn btn-danger btn-primary--gradient">
                        Отправить отзыв
                    </button>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>

@endsection
