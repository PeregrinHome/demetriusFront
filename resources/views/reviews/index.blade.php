<?php
/**
 * @var \App\Models\Reviews\Review $review
 */
?>

@extends('site.layouts.app')

@section('content')



<style>
    .trbl-0 {
        top:0;
        right: 0;
        bottom:0;
        left: 0;
    }
</style>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 offset-lg-3">
                <h2 class="mainpage-h2">Отзывы учеников</h2>
            </div>
            <div class="col-6  col-md-3  col-lg-3  col-xl-2 position-relative">
                <div class="images-contain ml-auto text-center">

                    <img src="/images/static/bubble.svg" class="img-fluid">
                    <div class="position-absolute trbl-0 d-flex justify-content-center">
                        <div class="align-self-center text-center">
                            <a class="text-red border-bottom-dashed"
                               href="{{ Route('reviews.create') }}">
                                Написать отзыв
                            </a>
                        </div>


                    </div>


                </div>
            </div>

            <div class="col-lg-12 d-flex justify-content-center">
                {{ Form::open(['route'=>'reviews.index','method'=>'GET','class'=>'form-inline']) }}
                <div class="form-control-sm form-group text-center">
                    @include('forms._input',[
                      'name'=>'search',
                      'class' => 'box-shadow-none outline-none',
                      'label'=>'Поиск&nbsp;'])
                    <button class="btn btn-sm" type="submit" style="background-color: transparent;"><i class="fa fa-search"></i></button>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>




    <section id="reviews" class="reviews">

        <div class="container position-relative">
            @forelse($reviews as $review)
                @include('reviews._review')
            @empty

            @endforelse
        </div>


        @isset($reviews)
            {!! $reviews->appends($frd ?? [])->render() !!}
        @endisset


    </section>






@endsection
