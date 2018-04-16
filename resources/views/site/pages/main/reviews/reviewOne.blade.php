<style>

    .review__quote-left {
        position: relative;
        bottom: -5rem;
    }

    .review__quote-right {
        position: relative;
        top: -5rem;
    }
</style>
<div class="review review-one position-relative">
    <div class="container">
        <div class="row flex-row d-flex no-gutters justify-content-between">
            <div class="col-lg-2 d-none d-lg-block text-center">
                <img class="img-fluid review__quote-left" src="/images/template/quotes/quote-left-big-gray.svg">

            </div>
            <div class="col-lg-7">
                <div class="review__bg">
                    <div class="review__bg-inner">
                        <div class="review__bg-top"></div>
                        <div class="review__bg-bottom"></div>
                        <div class="review__bg-right"></div>
                        <div class="review__text">
                            <div class="js-text--truncate">
                                <div class="js-text--truncate--metka">
                                    {!! $text ?? null !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review__author">
                        {!! $author ?? '' !!}
                    </div>

                </div>

            </div>
            <div class="col-lg-2 d-none d-lg-block  text-center">
                <img class="img-fluid review__quote-right" src="/images/template/quotes/quote-right-medium-gray.svg">
            </div>
        </div>

    </div>

</div>

