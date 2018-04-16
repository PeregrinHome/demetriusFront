<?php
    /**
     * @var \App\Models\Reviews\Review $review
     */
    $review = $reviews->shift();
?>
<section id="section_reviews" class="section__reviews position-relative z-index-2">
    <div class="container">
        <div class="reviews__wrapper--out">
            <div class="reviews__wrapper--in">
                <h2 class="reviews__h2">
                    К нам регулярно возвращаются наши ученики
                </h2>
                <div class="flex-row no-gutters d-flex justify-content-center pt-3">
                    <div class="col-1 d-flex">
                        {{--<div class="quote-left d-flex align-items-center">--}}
                            {{--<img src="/images/template/quotes/quote-left.svg" class="img-fluid">--}}
                        {{--</div>--}}
                        <div class="quote-left pl-0 pl-sm-3 pr-1">
                            <img src="/images/static/quotes.svg" class="img-fluid" style="position: relative; top: -1rem;">
                        </div>

                    </div>
                    <div class="d-flex col-10 col-lg-7">
                        <div class="reviews__text">
                            <div class="js-text--truncate" style="margin: 0;">
                                <div class="js-text--truncate--metka js-random-review--text">
                                    {!! $review->getText() !!}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-1 quote-right d-flex">
                        {{--<div class="quote-right d-flex align-items-center">--}}
                            {{--<img src="/images/template/quotes/quote-right.svg" class="img-fluid">--}}
                        {{--</div>--}}
                    </div>  

                </div>


                <div class="reviews__author pt-3 js-random-review--name">

                    {!! $review->getName() !!}
                </div>


                <div class="d-flex row justify-content-center justify-content-md-end">
                    <div class="col-auto reviews__all-wrapper">
                        <a href="/" class="btn link-black border-none js-random-review" >
                            {{--<i class="fa fa-refresh  fa-lg fa-fw"></i>--}}
                            <div class="icon--refresh images-contain"></div>
                        </a>

                        <a class="btn btn-outline-red border-width-2" href="{{ route('reviews.index')}}">
                            Все отзывы
                        </a>

                    </div>
                </div>


            </div>

        </div>
    </div>


</section>